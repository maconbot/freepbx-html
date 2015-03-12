<?php /* Smarty version 2.6.14, created on 2015-02-18 22:44:27
         compiled from /var/www/html/modules/backup_restore/themes/default/backup.tpl */ ?>

<?php echo '
<script type="text/javascript">

function ChequearTodos(chkbox)
{
    for (var i=0;i < document.getElementById("backup_form").elements.length;i++)
    {
        var elemento = document.getElementById("backup_form").elements[i];
        if (elemento.type == "checkbox")
        {
            if(!elemento.disabled)
                elemento.checked = chkbox.checked
        }
    }
}
function ChequearTabla(chkbox, id)
{
    //Si desmarco el checkbox desmarcar all options global
    if(!chkbox.checked)
        document.getElementById(\'backup_total\').checked = chkbox.checked;

    var arr_chk = document.getElementById(id).getElementsByTagName("INPUT");
    for(var i=0; i<arr_chk.length; i++)
    {
        if(!arr_chk[i].disabled)
            arr_chk[i].checked = chkbox.checked;
    }
}
function VerificarCheck(chkbox, id)
{
    if(!chkbox.checked)
    {
        //Descarmar all options de la tabla
        document.getElementById(id).checked = chkbox.checked;
        //Descarmar all options global
        document.getElementById(\'backup_total\').checked = chkbox.checked;
    }
}
function popup_dif(content_popup)
{
	var ancho = 800;
        var alto = 110;
	var winiz = (screen.width-ancho)/2;
	var winal = (screen.height-alto)/2;	
	my_window = window.open(content_popup,"my_window","width="+ancho+",height="+alto+",top="+winal+",left="+winiz+",location=no,status=no,resizable=no,scrollbars=no,fullscreen=no,toolbar=no,directories=no");
        my_window.document.close();
}
</script>
'; ?>

<form method="POST" enctype="multipart/form-data" id="backup_form">
    <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td>
                <table width="100%" cellpadding="4" cellspacing="0" border="0">
                    <tr>
                        <td align="left"><?php echo $this->_tpl_vars['ERROR_MSG']; ?>
</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input class="button" type="submit" name="process" value="<?php echo $this->_tpl_vars['PROCESS']; ?>
">
                            <input class="button" type="submit" name="back" value="<?php echo $this->_tpl_vars['BACK']; ?>
">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $this->_tpl_vars['WARNING']; ?>
</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="99%" BORDER=0>
                    <tr>
                        <td colspan=4><INPUT type="checkbox" name="backup_total" id="backup_total" onClick=ChequearTodos(this);><b><?php echo $this->_tpl_vars['LBL_TODOS']; ?>
</b></td>
                    </tr>
                    <tr>
                    <!-- ********** E N D   P O I N T ************ -->
                        <td width="25%">
                            <table id="table_endpoint" width="100%" height="100px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $this->_tpl_vars['ENDPOINT']; ?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_endpoint" id="backup_endpoint" onClick="ChequearTabla(this, 'table_endpoint');"><b><?php echo $this->_tpl_vars['TODO_ENDPOINT']; ?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php $_from = $this->_tpl_vars['backup_endpoint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $this->_tpl_vars['item']['disable']; ?>
 name="<?php echo $this->_tpl_vars['key']; ?>
" id="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['key']; ?>
" onClick="VerificarCheck(this, 'backup_endpoint');" <?php echo $this->_tpl_vars['item']['check']; ?>
><?php echo $this->_tpl_vars['item']['desc']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['msg']; ?>
</td>
                                    </tr>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tbody>
                            </table>
                        </td>
                    <!-- ********** F A X ************ -->
                        <td width="25%">
                            <table id="table_fax" width="100%" height="100px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $this->_tpl_vars['FAX']; ?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_fax" id="backup_fax" onClick="ChequearTabla(this, 'table_fax');"><b><?php echo $this->_tpl_vars['TODO_FAX']; ?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php $_from = $this->_tpl_vars['backup_fax']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $this->_tpl_vars['item']['disable']; ?>
 name="<?php echo $this->_tpl_vars['key']; ?>
" id="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['key']; ?>
" onClick="VerificarCheck(this, 'backup_fax');" <?php echo $this->_tpl_vars['item']['check']; ?>
><?php echo $this->_tpl_vars['item']['desc']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['msg']; ?>
</td>
                                    </tr>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tbody>
                            </table>
                        </td>
                    <!-- ********** E M A I L ************ -->
                        <td width="25%">
                            <table id="table_email" width="100%" height="100px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $this->_tpl_vars['EMAIL']; ?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_email" id="backup_email" onClick="ChequearTabla(this, 'table_email');"><b><?php echo $this->_tpl_vars['TODO_EMAIL']; ?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php $_from = $this->_tpl_vars['backup_email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $this->_tpl_vars['item']['disable']; ?>
 name="<?php echo $this->_tpl_vars['key']; ?>
" id="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['key']; ?>
" onClick="VerificarCheck(this, 'backup_email');" <?php echo $this->_tpl_vars['item']['check']; ?>
><?php echo $this->_tpl_vars['item']['desc']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['msg']; ?>
</td>
                                    </tr>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                    <!-- ********** A S T E R I X ************ -->
                        <td width="25%">
                            <table id="table_asterisk" width="100%" height="270px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $this->_tpl_vars['ASTERISK']; ?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_asterisk" id="backup_asterisk" onClick="ChequearTabla(this, 'table_asterisk');"><b><?php echo $this->_tpl_vars['TODO_ASTERISK']; ?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php $_from = $this->_tpl_vars['backup_asterisk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $this->_tpl_vars['item']['disable']; ?>
 name="<?php echo $this->_tpl_vars['key']; ?>
" id="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['key']; ?>
" onClick="VerificarCheck(this, 'backup_asterisk');" <?php echo $this->_tpl_vars['item']['check']; ?>
><?php echo $this->_tpl_vars['item']['desc']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['msg']; ?>
</td>
                                    </tr>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tbody>
                            </table>
                        </td>
                    <!-- ********** O T H E R S ************ -->
                        <td width="25%">
                            <table id="table_others" width="100%" height="270px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $this->_tpl_vars['OTROS']; ?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_others" id="backup_others" onClick="ChequearTabla(this, 'table_others');"><b><?php echo $this->_tpl_vars['TODO_OTROS']; ?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php $_from = $this->_tpl_vars['backup_otros']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $this->_tpl_vars['item']['disable']; ?>
 name="<?php echo $this->_tpl_vars['key']; ?>
" id="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['key']; ?>
" onClick="VerificarCheck(this, 'backup_others');" <?php echo $this->_tpl_vars['item']['check']; ?>
><?php echo $this->_tpl_vars['item']['desc']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['msg']; ?>
</td>
                                    </tr>
                                    <?php endforeach; endif; unset($_from); ?>
									<tr><td height="20px">&nbsp;</td></tr>
                                </tbody>
                            </table>
                        </td>
                    <!-- ********** N E W   O T H E R S ************ -->
                        <td width="25%">
                            <table id="table_others_new" width="100%" height="270px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $this->_tpl_vars['OTROS_NEW']; ?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_others_new" id="backup_others_new" onClick="ChequearTabla(this, 'table_others_new');"><b><?php echo $this->_tpl_vars['TODO_OTROS_NEW']; ?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php $_from = $this->_tpl_vars['backup_otros_new']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $this->_tpl_vars['item']['disable']; ?>
 name="<?php echo $this->_tpl_vars['key']; ?>
" id="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['key']; ?>
" onClick="VerificarCheck(this, 'backup_others_new');" <?php echo $this->_tpl_vars['item']['check']; ?>
><?php echo $this->_tpl_vars['item']['desc']; ?>
&nbsp;<?php echo $this->_tpl_vars['item']['msg']; ?>
</td>
                                    </tr>
                                    <?php endforeach; endif; unset($_from); ?>
									<tr><td height="20px">&nbsp;</td></tr>
									<tr><td height="20px">&nbsp;</td></tr>
									<tr><td height="20px">&nbsp;</td></tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <INPUT type="hidden" name="option_url" id="option_url" value="<?php echo $this->_tpl_vars['OPTION_URL']; ?>
">
    <input type='hidden' name='backup_file' value='<?php echo $this->_tpl_vars['BACKUP_FILE']; ?>
'></td>
</form>