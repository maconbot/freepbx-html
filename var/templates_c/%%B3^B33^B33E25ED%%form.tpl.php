<?php /* Smarty version 2.6.14, created on 2015-02-18 21:16:23
         compiled from file:/var/www/html/modules/callcenter_config/themes/default/form.tpl */ ?>
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
<?php if (! $this->_tpl_vars['FRAMEWORK_TIENE_TITULO_MODULO']): ?>
    <tr class="moduleTitle">
        <td class="moduleTitle" valign="middle">&nbsp;&nbsp;<img src="<?php echo $this->_tpl_vars['icon']; ?>
" border="0" align="absmiddle" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['title']; ?>
</td>
        <td></td>
    </tr>
<?php endif; ?>    
    <tr class="letra12">
        <td align="left"><input class="button" type="submit" name="save" value="<?php echo $this->_tpl_vars['SAVE']; ?>
"></td>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $this->_tpl_vars['REQUIRED_FIELD']; ?>
</span></td>
    </tr>
</table>
<table class="tabForm" width="100%"><tr>
<td valign="top">
<table>
<tr class="letra12"><td><b><?php echo $this->_tpl_vars['ASTERISK_CONNECT_PARAM']; ?>
</b></td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['asterisk_asthost']['LABEL']; ?>
:</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['asterisk_asthost']['INPUT']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['asterisk_astuser']['LABEL']; ?>
:</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['asterisk_astuser']['INPUT']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['asterisk_astpass_1']['LABEL']; ?>
:</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['asterisk_astpass_1']['INPUT']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['asterisk_astpass_2']['LABEL']; ?>
:</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['asterisk_astpass_2']['INPUT']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['asterisk_duracion_sesion']['LABEL']; ?>
:</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['asterisk_duracion_sesion']['INPUT']; ?>
</td></tr>
</table>
</td>
<td valign="top">
<table>
<tr class="letra12"><td><b><?php echo $this->_tpl_vars['DIALER_PARAM']; ?>
</b></td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_llamada_corta']['LABEL']; ?>
:</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_llamada_corta']['INPUT']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_tiempo_contestar']['LABEL']; ?>
:</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_tiempo_contestar']['INPUT']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_qos']['LABEL']; ?>
:</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_qos']['INPUT']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_timeout_originate']['LABEL']; ?>
:</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_timeout_originate']['INPUT']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_timeout_inactivity']['LABEL']; ?>
:</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_timeout_inactivity']['INPUT']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_debug']['INPUT']; ?>
 <?php echo $this->_tpl_vars['dialer_debug']['LABEL']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_allevents']['INPUT']; ?>
 <?php echo $this->_tpl_vars['dialer_allevents']['LABEL']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_overcommit']['INPUT']; ?>
 <?php echo $this->_tpl_vars['dialer_overcommit']['LABEL']; ?>
</td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['dialer_predictivo']['INPUT']; ?>
 <?php echo $this->_tpl_vars['dialer_predictivo']['LABEL']; ?>
</td></tr>
</table>
</td>
<td valign="top">
<table>
<tr class="letra12"><td><b><?php echo $this->_tpl_vars['DIALER_STATUS_MESG']; ?>
</b></td></tr>
<tr class="letra12"><td><?php echo $this->_tpl_vars['CURRENT_STATUS']; ?>
: <b><?php echo $this->_tpl_vars['DIALER_STATUS']; ?>
</b></td></tr>
<tr class="letra12"><td><input class="button" type="submit" name="dialer_action" value="<?php echo $this->_tpl_vars['DIALER_ACTION']; ?>
"/></td></tr>
</table>
</td>
</tr></table>