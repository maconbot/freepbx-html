<?php /* Smarty version 2.6.14, created on 2015-02-19 04:11:40
         compiled from /var/www/html/modules/form_list/themes/default/listacampos.tpl */ ?>
<table width="100%" border=0 class="tabForm" height="400">
  <tr>
    <td valign='top'>
		<table cellpadding="2" cellspacing="0" width="100%" border="0">
		<?php $_from = $this->_tpl_vars['listacampos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['campo']):
?>
		<tr>
		    <td height='15' width='15%' align="right" valign="top"><?php echo $this->_tpl_vars['campo']['LABEL']; ?>
</td>
		    <td height='15' width='85%'><?php echo $this->_tpl_vars['campo']['INPUT']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
    </td>
  </tr>
</table>