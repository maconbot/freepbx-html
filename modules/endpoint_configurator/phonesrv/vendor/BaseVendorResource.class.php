<?php
/*
  vim: set expandtab tabstop=4 softtabstop=4 shiftwidth=4:
  Codificación: UTF-8
  +----------------------------------------------------------------------+
  | Elastix version 1.0                                                  |
  | http://www.elastix.org                                               |
  +----------------------------------------------------------------------+
  | Copyright (c) 2006 Palosanto Solutions S. A.                         |
  +----------------------------------------------------------------------+
  | Cdla. Nueva Kennedy Calle E 222 y 9na. Este                          |
  | Telfs. 2283-268, 2294-440, 2284-356                                  |
  | Guayaquil - Ecuador                                                  |
  | http://www.palosanto.com                                             |
  +----------------------------------------------------------------------+
  | The contents of this file are subject to the General Public License  |
  | (GPL) Version 2 (the "License"); you may not use this file except in |
  | compliance with the License. You may obtain a copy of the License at |
  | http://www.opensource.org/licenses/gpl-license.php                   |
  |                                                                      |
  | Software distributed under the License is distributed on an "AS IS"  |
  | basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See  |
  | the License for the specific language governing rights and           |
  | limitations under the License.                                       |
  +----------------------------------------------------------------------+
  | Autores: Alex Villacís Lasso <a_villacis@palosanto.com>              |
  +----------------------------------------------------------------------+
  $Id: index.php,v 1.1 2007/01/09 23:49:36 alex Exp $
*/

require_once(ELASTIX_BASE.'configs/default.conf.php');
require_once(ELASTIX_BASE.'modules/address_book/libs/paloSantoAdressBook.class.php');
require_once(ELASTIX_BASE.'modules/address_book/configs/default.conf.php');

$arrConf = array_merge($arrConf, $arrConfModule);

class BaseVendorResource
{
    protected $_db;
    protected $_baseurl;

    function BaseVendorResource($db, $baseurl)
    {
        $this->_db = $db;
        $this->_baseurl = $baseurl;
    }
    
    /**
     * Procedimiento para intentar obtener un usuario de Elastix que esté 
     * asociado a una cuenta del endpoint indicado. Para endpoints con múltiples
     * cuentas, se buscan usuarios por orden de prioridad de la cuenta en el 
     * endpoint y se devuelve el primero que se encuentre.
     * 
     * Esta implementación asume el esquema de Elastix 2.
     * 
     * @param   int $id_endpoint    ID del endpoint
     * 
     * @return  NULL si no se encuentra un usuario, o arreglo(id_user, username)
     */
    protected function obtenerUsuarioElastix($id_endpoint)
    {
        // Lista de cuentas del endpoint, por orden de prioridad
    	$recordset = $this->_db->fetchTable(
            'SELECT account FROM endpoint_account WHERE id_endpoint = ? ORDER BY priority',
            TRUE, array($id_endpoint));
        if (!is_array($recordset)) return NULL;
        $accounts = array();
        foreach ($recordset as $tupla) $accounts[] = $tupla['account'];
        
        global $arrConf;
        $pdbACL = new paloDB($arrConf['elastix_dsn']['acl']);
        $sql = 'SELECT id AS id_user, name AS name_user FROM acl_user WHERE extension = ? ORDER BY id';
        foreach ($accounts as $account) {
            $tupla = $pdbACL->getFirstRowQuery($sql, TRUE, array($account));
            if (!is_array($tupla)) return NULL;
            if (count($tupla) > 0) return $tupla;
        }
        return NULL;
    }
    
    /**
     * Procedimiento para listar y buscar en las agendas de Elastix. Este método
     * implementa el comportamiento de que un id_user puesto a NULL debe de
     * tener acceso a la lista de contactos internos, y también a los contactos
     * públicos de la lista de contactos externos. 
     * 
     * @param   mixed   $id_user    NULL para extensión anónima, o ID del usuario
     * @param   string  $addressBookType    'internal' o 'external'
     * @param   mixed   NULL para cualquier contacto, o cadena para buscar en nombre
     * 
     * @return  array   Arreglo de estado con los siguientes campos:
     *      contacts    La lista de contactos devuelta, o NULL en caso de error.
     *      fc          NULL en éxito, 'PARAMERROR', 'DBERROR'
     *      fm          NULL en éxito, o mensaje de error corto
     *      fd          NULL en éxito, o mensaje largo
     */
    protected function listarAgendaElastix($id_user, $addressBookType,
        $sBuscarNombre = NULL)
    {
        global $arrConf;
    	$result = array(
            'contacts'  =>  NULL,
            'fc'        =>  NULL,
            'fm'        =>  NULL,
            'fd'        =>  NULL,
        );
        
        $field_name = $field_pattern = NULL;
        $addressBook = new paloAdressBook($arrConf['dsn_conn_database']);
        switch ($addressBookType) {
        case 'internal':
            $astDSN = generarDSNSistema('asteriskuser', 'asterisk', ELASTIX_BASE.'/');
            if (!is_null($sBuscarNombre)) {
            	$field_name = 'name';
                $field_pattern = "%{$sBuscarNombre}%";
            }
            $result['contacts'] = $addressBook->getDeviceFreePBX_Completed($astDSN, NULL, NULL, $field_name, $field_pattern);
            break;
        case 'external':
            $result['contacts'] = $addressBook->getAddressBook(NULL, NULL, $field_name, $field_pattern, FALSE, $id_user);
            if (is_array($result['contacts']) && !is_null($sBuscarNombre)) {
            	$t = array();
                foreach ($result['contacts'] as $contact) {
                    $fullname = $contact['name'];
                    if (isset($contact['last_name'])) {
                        $fullname .= ' '.$contact['last_name'];
                    }
                	if ((stripos($fullname, $sBuscarNombre) !== FALSE)) $t[] = $contact;
                }
                $result['contacts'] = $t;
            }
            break;
        default:
            $result['fc'] = 'PARAMERROR';
            $result['fm'] = 'Invalid format';
            $result['fd'] = 'Unrecognized address book type, must be internal or external';
            return $result;
        }
        if (!is_array($result['contacts'])) {
            $result['fc'] = 'DBERROR';
            $result['fm'] = 'Database operation failed';
            $result['fd'] = 'Unable to read data from '.$addressBookType.' phonebook - '.$addressBook->_DB->errMsg;
            $result['contacts'] = NULL;
        }
        
        return $result;
    }
    
    /**
     * Procedimiento para listar y devolver los códigos de funcionalidades. Esta
     * implementación lee de la base de datos de FreePBX.
     * 
     * @return  NULL en error, o lista en caso de éxito
     */
    protected function listarCodigosFuncionalidades()
    {
    	$recordset = $this->_db->fetchTable(
            'SELECT IFNULL(customcode, defaultcode) AS code, description '.
            'FROM asterisk.featurecodes WHERE enabled = 1 ORDER BY code', TRUE);
        if (!is_array($recordset)) {
        	return NULL;
        }
        $r = array();
        foreach ($recordset as $tupla) {
        	if (preg_match('/\d/', $tupla['code'])) $r[] = $tupla;
        }
        return $r;
    }
    
    /**
     * Procedimiento para listar y devolver los canales RSS que pueden verse a
     * través de la interfaz soportada del teléfono.
     * 
     * @return  NULL en error, o lista en caso de éxito
     */
    protected function listarCanalesRSS()
    {
        // TODO: leer esta lista de una base de datos
        $rssfeeds = array(
            'elastixnews'       =>  array(
                'Elastix News',
                'http://elastix.org/index.php/en/news.feed?type=rss'
            ),
            'elastixtraining'   =>  array(
                'Elastix Training',
                'http://elastix.org/index.php/en/events.feed?type=rss'
            ),
            'wsjonline'         =>  array(
                "What's News - US",
                'http://online.wsj.com/xml/rss/0,,3_7011,00.xml'
            ),
            'eluniverso'        =>  array(
                'El Universo - Noticias de Ecuador y el Mundo',
                'http://www.eluniverso.com/rss/all.xml'
            ),
        );
        
        return $rssfeeds;
    }
}
?>