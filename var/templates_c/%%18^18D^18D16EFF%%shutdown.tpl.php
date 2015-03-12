<?php /* Smarty version 2.6.14, created on 2015-02-18 22:45:33
         compiled from file:/var/www/html/modules/shutdown/themes/default/shutdown.tpl */ ?>
<form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <input class="button" type="submit" name="submit_accept" value="<?php echo $this->_tpl_vars['ACCEPT']; ?>
" onClick="return confirmSubmit('<?php echo $this->_tpl_vars['CONFIRM_CONTINUE']; ?>
')">
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><input type="radio" name="shutdown_mode" value="1">&nbsp;<?php echo $this->_tpl_vars['HALT']; ?>
 </td>
	<td width="35%">&nbsp;</td>
	<td width="20%">&nbsp;</td>
	<td width="30%">&nbsp;</td>
      </tr>
      <tr>
	<td width="15%"><input type="radio" name="shutdown_mode" value="2" checked>&nbsp;<?php echo $this->_tpl_vars['REBOOT']; ?>
</td>
	<td width="35%">&nbsp;</td>
	<td width="20%">&nbsp;</td>
	<td width="30%">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form>