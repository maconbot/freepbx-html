<?php /* Smarty version 2.6.14, created on 2015-02-18 21:44:27
         compiled from /var/www/html/modules/agent_console/themes/default/agent_console_atributos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/var/www/html/modules/agent_console/themes/default/agent_console_atributos.tpl', 4, false),)), $this); ?>
<table border="0">
    <theader>
	    <tr>
	        <th colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['LBL_INFORMACION_LLAMADA'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</th>
	    </tr>
    </theader>
    <tbody>
    <?php $_from = $this->_tpl_vars['ATRIBUTOS_LLAMADA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ATRIBUTO']):
?>
	    <tr>
	       <td><label><?php echo ((is_array($_tmp=$this->_tpl_vars['ATRIBUTO']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
: </label></td>
           <td><?php echo $this->_tpl_vars['ATRIBUTO']['value']; ?>
</td>
	    </tr>
	<?php endforeach; else: ?>
	   <tr><td colspan="2"><?php echo $this->_tpl_vars['MSG_NO_ATTRIBUTES']; ?>
</td></tr>
    <?php endif; unset($_from); ?>
    </tbody>
</table>