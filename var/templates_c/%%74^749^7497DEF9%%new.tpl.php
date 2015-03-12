<?php /* Smarty version 2.6.14, created on 2015-02-18 21:39:51
         compiled from file:/var/www/html/modules/userlist/themes/default/new.tpl */ ?>
<form method="POST" action="?menu=userlist">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
	  <?php if ($this->_tpl_vars['editUserExtension'] == 'yes'): ?>
          <input class="button" type="button" name="submit_apply_changes" value="<?php echo $this->_tpl_vars['APPLY_CHANGES']; ?>
" onclick="apply_changes()">
          <?php elseif ($this->_tpl_vars['mode'] == 'input'): ?>
          <input class="button" type="submit" name="submit_save_user" value="<?php echo $this->_tpl_vars['SAVE']; ?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
"></td>
          <?php elseif ($this->_tpl_vars['mode'] == 'edit'): ?>
          <input class="button" type="submit" name="submit_apply_changes" value="<?php echo $this->_tpl_vars['APPLY_CHANGES']; ?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
"></td>
          <?php elseif ($this->_tpl_vars['userLevel1'] == 'admin'): ?>
          <input class="button" type="submit" name="edit" value="<?php echo $this->_tpl_vars['EDIT']; ?>
">
          <input class="button" type="submit" name="delete" value="<?php echo $this->_tpl_vars['DELETE']; ?>
"  onClick="return confirmSubmit('<?php echo $this->_tpl_vars['CONFIRM_CONTINUE']; ?>
')"></td>
          <?php else: ?>
          <input class="button" type="submit" name="edit" value="<?php echo $this->_tpl_vars['EDIT']; ?>
">
          <?php endif; ?>
	<?php if ($this->_tpl_vars['mode'] != 'view'): ?>
	  <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $this->_tpl_vars['REQUIRED_FIELD']; ?>
</span></td>
	<?php endif; ?>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="20%"><?php echo $this->_tpl_vars['name']['LABEL']; ?>
: <?php if ($this->_tpl_vars['mode'] != 'view'): ?><span  class="required">*</span><?php endif; ?></td>
	<td width="30%"><?php echo $this->_tpl_vars['name']['INPUT']; ?>
</td>
	<td width="25%"><?php echo $this->_tpl_vars['description']['LABEL']; ?>
:</td>
	<td width="25%"><?php echo $this->_tpl_vars['description']['INPUT']; ?>
</td>
      </tr>
      <tr>
	<td><?php echo $this->_tpl_vars['password1']['LABEL']; ?>
: <?php if ($this->_tpl_vars['mode'] != 'view'): ?><span  class="required">*</span><?php endif; ?></td>
	<td><?php echo $this->_tpl_vars['password1']['INPUT']; ?>
</td>
	<td><?php echo $this->_tpl_vars['password2']['LABEL']; ?>
: <?php if ($this->_tpl_vars['mode'] != 'view'): ?><span class="required">*</span><?php endif; ?></td>
	<td><?php echo $this->_tpl_vars['password2']['INPUT']; ?>
</td>
      </tr>
      <tr>
	<td><?php echo $this->_tpl_vars['group']['LABEL']; ?>
: <?php if ($this->_tpl_vars['mode'] != 'view'): ?><span  class="required">*</span><?php endif; ?></td>
	<td><?php echo $this->_tpl_vars['group']['INPUT']; ?>
</td>
	<td><?php echo $this->_tpl_vars['extension']['LABEL']; ?>
:</td>
	<td><?php echo $this->_tpl_vars['extension']['INPUT']; ?>
</td>
      </tr>
    </table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr class="moduleTitle">
   <td class="moduleTitle" valign="middle"><?php if ($this->_tpl_vars['THEMENAME'] == 'elastixneo'): ?><span class="neo-module-name" style="background:none;"><img src="images/email.png" width="22" height="22" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['title_webmail']; ?>
</span><?php else:  echo $this->_tpl_vars['title_webmail'];  endif; ?></td>
  </tr>
 </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
        <td width="20%"><?php echo $this->_tpl_vars['webmailuser']['LABEL']; ?>
: </td>
        <td width="30%"><?php echo $this->_tpl_vars['webmailuser']['INPUT']; ?>
</td>
        <td width="25%"><?php echo $this->_tpl_vars['webmaildomain']['LABEL']; ?>
: </td>
        <td width="25%"><?php echo $this->_tpl_vars['webmaildomain']['INPUT']; ?>
</td>
      </tr>
      <tr>
        <td><?php echo $this->_tpl_vars['webmailpassword1']['LABEL']; ?>
: </td>
        <td><?php echo $this->_tpl_vars['webmailpassword1']['INPUT']; ?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>
<input type="hidden" name="id_user" value="<?php echo $this->_tpl_vars['id_user']; ?>
">
</form>