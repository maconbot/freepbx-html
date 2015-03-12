<?php /* Smarty version 2.6.14, created on 2015-02-18 20:49:03
         compiled from /var/www/html/modules/agents/themes/default/filter-list-agents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', '/var/www/html/modules/agents/themes/default/filter-list-agents.tpl', 4, false),)), $this); ?>
<table width="100%" border="0">
<tr>
	<td class="letra12" width="10%" align="right"><b><?php echo $this->_tpl_vars['LABEL_STATE']; ?>
:</b></td>
    <td><?php echo smarty_function_html_options(array('name' => 'cbo_estado','id' => 'cbo_estado','options' => $this->_tpl_vars['estados'],'selected' => $this->_tpl_vars['estado_sel'],'onchange' => 'submit();'), $this);?>
</td>
</tr>
</table>
<script language='JavaScript' type='text/javascript'>
var pregunta_borrar_agente_conf = "<?php echo $this->_tpl_vars['PREGUNTA_BORRAR_AGENTE_CONF']; ?>
";
var pregunta_agregar_agente_conf = "<?php echo $this->_tpl_vars['PREGUNTA_AGREGAR_AGENTE_CONF']; ?>
";
</script>