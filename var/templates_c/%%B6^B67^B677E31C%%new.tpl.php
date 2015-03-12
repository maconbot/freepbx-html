<?php /* Smarty version 2.6.14, created on 2015-02-19 22:59:49
         compiled from file:/var/www/html/modules/break_administrator/themes/default/new.tpl */ ?>
<form method="POST" action="?menu=<?php echo $this->_tpl_vars['MODULE_NAME']; ?>
&amp;action=<?php echo $this->_tpl_vars['ACTION']; ?>
">
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
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
            <input class="button" type="submit" name="cancel" value="&laquo;&nbsp;<?php echo $this->_tpl_vars['CANCEL']; ?>
" />
            <input class="button" type="submit" name="save" value="<?php echo $this->_tpl_vars['SAVE']; ?>
" />
        </td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
        <tr>
		<td width="20%"><?php echo $this->_tpl_vars['nombre']['LABEL']; ?>
: <span  class="required">*</span></td>
		<td width="80%"><?php echo $this->_tpl_vars['nombre']['INPUT']; ?>
</td>
        </tr>
        <tr>
		<td width="20%"><?php echo $this->_tpl_vars['descripcion']['LABEL']; ?>
: <span  class="required">*</span></td>
		<td width="80%"><?php echo $this->_tpl_vars['descripcion']['INPUT']; ?>
</td>
        </tr> 
      </table>
    </td>
  </tr>
</table>
<?php echo $this->_tpl_vars['id_break']['INPUT']; ?>

</form>