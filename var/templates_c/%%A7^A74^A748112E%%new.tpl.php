<?php /* Smarty version 2.6.14, created on 2015-02-18 21:18:46
         compiled from file:/var/www/html/modules/campaign_out/themes/default/new.tpl */ ?>
<?php if ($this->_tpl_vars['no_queues']): ?>
<p><b>No queues have been defined</b></p>
<p>For an outgoing campaign to be created, it is necessary to configure at least one queue. You can add queues <a href="?menu=pbxconfig&amp;display=queues">here</a>.</p>
<?php elseif ($this->_tpl_vars['no_outgoing_queues']): ?>
<p><b>No remaining queues for outgoing campaings</b></p>
<p>All queues are currently reserved for incoming campaigns. For an outgoing campaign to be created, it is necessary to have at least one free queue. You can add queues <a href="?menu=pbxconfig&amp;display=queues">here</a>.</p>
<?php elseif ($this->_tpl_vars['no_forms']): ?>
<p><b>No active forms available</b></p>
<p>For an outgoing campaign to be created, it is necessary to have at least one active form. You can add forms <a href="?menu=form_designer">here</a>.</p>
<?php else: ?>
<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['relative_dir_rich_text']; ?>
/richtext/html2xhtml.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['relative_dir_rich_text']; ?>
/richtext/richtext_compressed.js"></script>
<script language="JavaScript" type="text/javascript">
//Usage: initRTE(imagesPath, includesPath, cssFile, genXHTML, encHTML)
initRTE("./<?php echo $this->_tpl_vars['relative_dir_rich_text']; ?>
/richtext/images/", "./<?php echo $this->_tpl_vars['relative_dir_rich_text']; ?>
/richtext/", "", true);
var rte_script = new richTextEditor('rte_script');
</script>

<form method="post" enctype="multipart/form-data">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<?php if (! $this->_tpl_vars['FRAMEWORK_TIENE_TITULO_MODULO']): ?>
<tr class="moduleTitle">
  <td class="moduleTitle" valign="middle">&nbsp;&nbsp;<img src="<?php echo $this->_tpl_vars['icon']; ?>
" border="0" align="absmiddle" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['title']; ?>
</td>
</tr>
<?php endif; ?>
<tr>
  <td>
    <table width="100%" valign="top" cellpadding="4" cellspacing="0" border="0">
      <tr>
          <?php if ($this->_tpl_vars['mode'] == 'input'): ?>
        <td align="left">
          <input class="button" type="submit" name="save" value="<?php echo $this->_tpl_vars['SAVE']; ?>
" onclick="return enviar_datos();" />
          <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
" />
        </td>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $this->_tpl_vars['REQUIRED_FIELD']; ?>
</span></td>
          <?php elseif ($this->_tpl_vars['mode'] == 'edit'): ?>
        <td align="left">
          <input class="button" type="submit" name="apply_changes" value="<?php echo $this->_tpl_vars['APPLY_CHANGES']; ?>
" onclick="return enviar_datos();" />
          <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
" />
        </td>
          <?php else: ?>
        
          <?php endif; ?>          
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="900" valign="top" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr height='50'>
          <td width="20%" align='right'><?php echo $this->_tpl_vars['nombre']['LABEL']; ?>
: <span  class="required">*</span></td>
          <td colspan='2'><?php echo $this->_tpl_vars['nombre']['INPUT']; ?>
</td>
      </tr>
      <tr>
          <td align='right'><?php echo $this->_tpl_vars['fecha_str']['LABEL']; ?>
: <span  class="required">*</span></td>
          <td width="25%"><?php echo $this->_tpl_vars['fecha_ini']['INPUT']; ?>
&nbsp;<?php echo $this->_tpl_vars['fecha_ini']['LABEL']; ?>
</td>
          <td><?php echo $this->_tpl_vars['fecha_fin']['INPUT']; ?>
&nbsp;<?php echo $this->_tpl_vars['fecha_fin']['LABEL']; ?>
</td>
      </tr>
      <tr height='10'>
          <td align='right' colspan='3'></td>
      </tr>
      <tr height='30'>
          <td align='right'><?php echo $this->_tpl_vars['hora_str']['LABEL']; ?>
: <span  class="required">*</span></td>
          <td align='left' colspan='2'><?php echo $this->_tpl_vars['hora_ini_HH']['INPUT']; ?>
&nbsp;:&nbsp;<?php echo $this->_tpl_vars['hora_ini_MM']['INPUT']; ?>
&nbsp;<?php echo $this->_tpl_vars['hora_ini_HH']['LABEL']; ?>
</td>
      </tr>
      <tr height='30'>
          <td>&nbsp;</td>
          <td align='left' colspan='2'><?php echo $this->_tpl_vars['hora_fin_HH']['INPUT']; ?>
&nbsp;:&nbsp;<?php echo $this->_tpl_vars['hora_fin_MM']['INPUT']; ?>
&nbsp;<?php echo $this->_tpl_vars['hora_fin_HH']['LABEL']; ?>
</td>
      </tr>
      <tr height='10'>
          <td align='left' colspan='3'></td>
      </tr>
      <tr>
		<td align='right' valign='top'>
			<?php echo $this->_tpl_vars['formulario']['LABEL']; ?>
: <span  class="required">*</span>
			<br><br>
			<a href="?menu=form_designer">
			<b><?php echo $this->_tpl_vars['label_manage_forms']; ?>
</b>
			</a><br><br><hr>			
		</td>
          <td  colspan='2'>
           <?php if ($this->_tpl_vars['mode'] == 'edit' || $this->_tpl_vars['mode'] == 'input'): ?>
                <table border='0' cellpadding='0' cellspacing='0'>
                    <tr>
                        <td rowspan='2'><?php echo $this->_tpl_vars['formulario']['INPUT']; ?>
</td>
                        <td><input type='button' name='agregar_formulario' value="&gt;&gt;" onclick='add_form()'/></td>
                        <td width="50%" rowspan='2' ><?php echo $this->_tpl_vars['formularios_elegidos']['INPUT']; ?>
</td>
                        <?php if ($this->_tpl_vars['label_manage_forms']): ?>
                        <td rowspan='2' align='right' valign='top'></td>
                        <?php endif; ?>
                    </tr>
                    <tr>
                        <td><input type='button' name='quitar_formulario' value="&lt;&lt;" onclick='drop_form()'/></td>
                    </tr>
                </table>                
           <?php else: ?>
               <?php echo $this->_tpl_vars['formulario']['INPUT']; ?>

            <?php endif; ?>
            </td>
	  </tr>
      <tr  height='30'>
		<td align='right'><?php echo $this->_tpl_vars['external_url']['LABEL']; ?>
:<br><br>
		<a href="?menu=external_url">
		<b><?php echo $this->_tpl_vars['label_manage_external_url']; ?>
</b></a><br><hr>
		</td>
		<td valign="top" colspan='2'><?php echo $this->_tpl_vars['external_url']['INPUT'];  if ($this->_tpl_vars['label_manage_external_url']): ?>&nbsp;<?php endif; ?></td>
      </tr>
      <tr  height='30'>
        <td align='right'><?php echo $this->_tpl_vars['trunk']['LABEL']; ?>
: <span  class="required">*</span><br><br>
        <a href="?menu=pbxconfig&amp;display=trunks">
        <b><?php echo $this->_tpl_vars['label_manage_trunks']; ?>
</b></a><br><hr>
        </td>
        <td valign="top" colspan='2'><?php echo $this->_tpl_vars['trunk']['INPUT'];  if ($this->_tpl_vars['label_manage_trunks']): ?>&nbsp;<?php endif; ?></td>
      </tr>
      <tr  height='30'>
		<td align='right'><?php echo $this->_tpl_vars['max_canales']['LABEL']; ?>
: <span  class="required">*</span></td>
		<td colspan='2'><?php echo $this->_tpl_vars['max_canales']['INPUT']; ?>
</td>
      </tr>
      <tr height='30'>
		<td align='right'><?php echo $this->_tpl_vars['context']['LABEL']; ?>
: <span  class="required">*</span></td>
		<td colspan='2'><?php echo $this->_tpl_vars['context']['INPUT']; ?>
</td>
      </tr>
      <tr height='30'>
		<td align='right'><?php echo $this->_tpl_vars['queue']['LABEL']; ?>
: <span  class="required">*</span><br><br>
		<a href="?menu=pbxconfig&amp;display=queues">
		<b><?php echo $this->_tpl_vars['label_manage_queues']; ?>
</b></a><br><hr>
		</td>
		<td valign="top" colspan='2'><?php echo $this->_tpl_vars['queue']['INPUT'];  if ($this->_tpl_vars['label_manage_queues']): ?>&nbsp;<?php endif; ?></td>
      </tr>
      <tr height='30'>
	    <td align='right'><?php echo $this->_tpl_vars['reintentos']['LABEL']; ?>
: <span  class="required">*</span></td>
	    <td  colspan='4'><?php echo $this->_tpl_vars['reintentos']['INPUT']; ?>
</td>
      </tr>
      <tr>
    	<td align='right'><?php echo $this->_tpl_vars['LABEL_CALL_FILE']; ?>
: <?php if ($this->_tpl_vars['mode'] == 'input'): ?><span  class="required">*</span><?php endif; ?></td>
    	<td  colspan='4'><input type='file' name='phonefile' /></td>
      </tr>
      <tr>
        <td align='right'><?php echo $this->_tpl_vars['encoding']['LABEL']; ?>
: <?php if ($this->_tpl_vars['mode'] == 'input'): ?><span  class="required">*</span><?php endif; ?></td>
        <td  colspan='4'><?php echo $this->_tpl_vars['encoding']['INPUT']; ?>
</td>
      </tr>
      <tr>
        <td align='right' valign='top'><?php echo $this->_tpl_vars['script']['LABEL']; ?>
: <span  class="required">*</span></td>
        <td  colspan='2'> 
            <?php if ($this->_tpl_vars['mode'] == 'edit' || $this->_tpl_vars['mode'] == 'input'): ?>
               <script language="JavaScript" type="text/javascript">
                   rte_script.html ="<?php echo $this->_tpl_vars['rte_script']; ?>
";
                   rte_script.toggleSrc = false;
                   rte_script.build();
               </script>
            <?php else: ?>
                <?php echo $this->_tpl_vars['script']['INPUT']; ?>

            <?php endif; ?> 
        </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
<input type="hidden" name="id_campaign" id='id_campaign' value="<?php echo $this->_tpl_vars['id_campaign']; ?>
" />
<input type="hidden" name="values_form" id='values_form' value="" />    
</form>

<?php echo '
<script type="text/javascript">
/* Función para recoger todas las variables del formulario y procesarlas. Sólo
   se requiere atención especial para el RTF del script, y para la lista de 
   formularios elegidos. */
function enviar_datos()
{   
	var lc = listaControlesFormularios();
	var select_form = lc[1]; /* Formularios elegidos */
    var values = "";
    
    for(var i=0; i < select_form.length; i++) {
        values = values + select_form[i].value + ",";
    }
    if(values != "")
        values = values.substring(0,values.length-1);
    document.getElementById("values_form").value = values;

    updateRTEs();
    return true;
}

function add_form()
{
	var lc = listaControlesFormularios();
	var select_formularios = lc[0];
	var select_formularios_elegidos = lc[1];

    for(var i=0;i<select_formularios.length;i++){
        if(select_formularios[i].selected){
            var option_tmp = document.createElement("option");
            option_tmp.value = select_formularios[i].value;
            option_tmp.appendChild(document.createTextNode(select_formularios[i].firstChild.data));
            select_formularios_elegidos.appendChild(option_tmp);
        }
    }

    for(var i=select_formularios.length-1;i>=0;i--){
        if(select_formularios[i].selected){
            select_formularios.removeChild(select_formularios[i]);
        }
    }
}


function drop_form()
{
	var lc = listaControlesFormularios();
	var select_formularios = lc[0];
	var select_formularios_elegidos = lc[1];

    for(var i=0;i<select_formularios_elegidos.length;i++){
        if(select_formularios_elegidos[i].selected){
            var option_tmp = document.createElement("option");
            option_tmp.value = select_formularios_elegidos[i].value;
            option_tmp.appendChild(document.createTextNode(select_formularios_elegidos[i].firstChild.data));
            select_formularios.appendChild(option_tmp);
        }
    }

    for(var i=select_formularios_elegidos.length-1;i>=0;i--){
        if(select_formularios_elegidos[i].selected){
            select_formularios_elegidos.removeChild(select_formularios_elegidos[i]);
        }
    }
}

/* Esta función es necesaria para lidiar con el cambio en los nombres de los 
   controles generados por Elastix entre 1.6-12 y 1.6.2-1 */
function listaControlesFormularios()
{
	var listaControles;
	var select_formularios;
	var select_formularios_elegidos;
	
	listaControles = document.getElementsByName(\'formulario\');
	if (listaControles.length == 0)
		listaControles = document.getElementsByName(\'formulario[]\');
    select_formularios = listaControles[0];
    
	listaControles = document.getElementsByName(\'formularios_elegidos\');
	if (listaControles.length == 0)
		listaControles = document.getElementsByName(\'formularios_elegidos[]\');
    select_formularios_elegidos = listaControles[0];

	var lista = new Array();
	lista[0] = select_formularios;
	lista[1] = select_formularios_elegidos;
	return lista;
}
</script>
'; ?>

<?php endif; ?> 