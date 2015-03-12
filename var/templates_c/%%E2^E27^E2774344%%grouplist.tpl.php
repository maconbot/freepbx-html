<?php /* Smarty version 2.6.14, created on 2015-02-18 21:36:31
         compiled from file:/var/www/html/modules/grouplist/themes/default/grouplist.tpl */ ?>
<form method="POST" action="?menu=grouplist">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($this->_tpl_vars['mode'] == 'input'): ?>
          <input class="button" type="submit" name="submit_save_group" value="<?php echo $this->_tpl_vars['SAVE']; ?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
"></td>
          <?php elseif ($this->_tpl_vars['mode'] == 'edit'): ?>
          <input class="button" type="submit" name="submit_apply_changes" value="<?php echo $this->_tpl_vars['APPLY_CHANGES']; ?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
"></td>
          <?php else: ?>
          <input class="button" type="submit" name="edit" value="<?php echo $this->_tpl_vars['EDIT']; ?>
">
          <input class="button" type="submit" name="delete" value="<?php echo $this->_tpl_vars['DELETE']; ?>
"  onClick="return confirmSubmit('<?php echo $this->_tpl_vars['CONFIRM_CONTINUE']; ?>
')"></td>
          <?php endif; ?>
        <?php if ($this->_tpl_vars['mode'] != 'view'): ?><td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $this->_tpl_vars['REQUIRED_FIELD']; ?>
</span></td><?php endif; ?>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td><?php echo $this->_tpl_vars['group']['LABEL']; ?>
:<?php if ($this->_tpl_vars['mode'] != 'view'): ?> <span  class="required">*</span><?php endif; ?></td>
	<td><?php echo $this->_tpl_vars['group']['INPUT']; ?>
</td>
        <td width="50%"></td>
      </tr>
      <tr>
	<td><?php echo $this->_tpl_vars['description']['LABEL']; ?>
:<?php if ($this->_tpl_vars['mode'] != 'view'): ?> <span  class="required">*</span><?php endif; ?></td>
	<td><?php echo $this->_tpl_vars['description']['INPUT']; ?>
</td>
        <td width="50%"></td>
      </tr>
    </table>
  </td>
</tr>
</table>
<input type="hidden" name="id_group" value="<?php echo $this->_tpl_vars['id_group']; ?>
">
</form>