<?php /* Smarty version 2.6.14, created on 2015-02-23 03:38:09
         compiled from file:/var/www/html/modules/dont_call_list/themes/default/new.tpl */ ?>
<form method="POST" name="form_formulario" enctype="multipart/form-data">
    <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td>
                <table width="100%" cellpadding="3" cellspacing="0" border="0">
                    <tr>
                        <td align="left">
                        <input class="button" type="submit" name="apply_changes" value="<?php echo $this->_tpl_vars['SAVE']; ?>
" />
                        <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
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
                        <td colspan="2"><?php echo $this->_tpl_vars['new_accion']['INPUT']; ?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $this->_tpl_vars['file_number']['LABEL']; ?>
:<br/><?php echo $this->_tpl_vars['LABEL_MAX_FILESIZE']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['file_number']['INPUT']; ?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $this->_tpl_vars['txt_new_number']['LABEL']; ?>
:</td>
                        <td><?php echo $this->_tpl_vars['txt_new_number']['INPUT']; ?>
</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <?php echo $this->_tpl_vars['id_formulario']['INPUT']; ?>

</form>
<?php echo '
<script type="text/javascript">
function new_accion_update(accion)
{
    if (accion == \'file\') {
        $(\'input[name="txt_new_number"]\').parents(\'tr:first\').hide();
        $(\'input[name="file_number"]\').parents(\'tr:first\').show();
    }
    if (accion == \'text\') {
        $(\'input[name="file_number"]\').parents(\'tr:first\').hide();
        $(\'input[name="txt_new_number"]\').parents(\'tr:first\').show();
    }
}

$(document).ready(function() {
	$(\'input[name="new_accion"]\').on(\'change\', function () {
		new_accion_update($(\'input[name="new_accion"]:checked\').val());
	});
	
	new_accion_update($(\'input[name="new_accion"]:checked\').val());
});
</script>
'; ?>