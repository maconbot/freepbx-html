<?php /* Smarty version 2.6.14, created on 2015-02-18 20:49:20
         compiled from file:/var/www/html/modules/agents/themes/default/new.tpl */ ?>
<form method="post">
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
          <?php if ($this->_tpl_vars['mode'] == 'input'): ?>
          <input class="button" type="submit" name="submit_save_agent" value="<?php echo $this->_tpl_vars['SAVE']; ?>
" />
          <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
"/>
          <?php elseif ($this->_tpl_vars['mode'] == 'edit'): ?>
          <input class="button" type="submit" name="submit_apply_changes" value="<?php echo $this->_tpl_vars['APPLY_CHANGES']; ?>
" />
          <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
"/>
          <?php else: ?>
          <input class="button" type="submit" name="edit" value="<?php echo $this->_tpl_vars['EDIT']; ?>
"/>
          <input class="button" type="submit" name="delete" value="<?php echo $this->_tpl_vars['DELETE']; ?>
"  onClick="return confirmSubmit('<?php echo $this->_tpl_vars['CONFIRM_CONTINUE']; ?>
')" />
          <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
"/>
          <?php endif; ?>
        </td>
        <td align="right" nowrap><span  class="required">*</span> <span class="letra12"><?php echo $this->_tpl_vars['REQUIRED_FIELD']; ?>
</span></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
    <td width="20%"><?php echo $this->_tpl_vars['extension']['LABEL']; ?>
: <span class="required">*</span></td>
    <td width="30%"><?php echo $this->_tpl_vars['extension']['INPUT']; ?>
</td>
	<td width="15%"><?php echo $this->_tpl_vars['description']['LABEL']; ?>
: <span  class="required">*</span></td>
	<td width="35%"><?php echo $this->_tpl_vars['description']['INPUT']; ?>
</td>
      </tr>
<?php if ($this->_tpl_vars['mode'] != 'view'): ?>
      <tr>
	<td width="20%"><?php echo $this->_tpl_vars['password1']['LABEL']; ?>
: <span  class="required">*</span></td>
	<td width="30%"><?php echo $this->_tpl_vars['password1']['INPUT']; ?>
</td>
	<td width="20%"><?php echo $this->_tpl_vars['password2']['LABEL']; ?>
: <span class="required">*</span></td>
	<td width="30%"><?php echo $this->_tpl_vars['password2']['INPUT']; ?>
</td>
      </tr>
      <tr>
    <td width="20%"><?php echo $this->_tpl_vars['eccpwd1']['LABEL']; ?>
:</td>
    <td width="30%"><?php echo $this->_tpl_vars['eccpwd1']['INPUT']; ?>
</td>
    <td width="20%"><?php echo $this->_tpl_vars['eccpwd2']['LABEL']; ?>
:</td>
    <td width="30%"><?php echo $this->_tpl_vars['eccpwd2']['INPUT']; ?>
</td>
      </tr>
<?php endif; ?>
    </table>
  </td>
</tr>
</table>
<input type="hidden" name="id_agent" value="<?php echo $this->_tpl_vars['id_agent']; ?>
" />
</form>



