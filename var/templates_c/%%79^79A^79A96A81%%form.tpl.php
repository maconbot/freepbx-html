<?php /* Smarty version 2.6.14, created on 2015-02-18 21:12:26
         compiled from file:/var/www/html/modules/form_designer/themes/default/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/var/www/html/modules/form_designer/themes/default/form.tpl', 31, false),)), $this); ?>
<!-- end of Message board -->
<form method="POST" name="form_formulario">
    <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td>
                <table width="100%" cellpadding="3" cellspacing="0" border="0">
                    <tr>
                        <td align="left">
                        <input class="button" type="button" name="apply_changes" value="<?php echo $this->_tpl_vars['SAVE']; ?>
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
                        <td align="right" valign="top"><?php echo $this->_tpl_vars['form_nombre']['LABEL']; ?>
: <span  class="required" <?php echo $this->_tpl_vars['style_field']; ?>
>*</span></td>
                        <td valign="top"><?php echo $this->_tpl_vars['form_nombre']['INPUT']; ?>
</td>
                    </tr>
                    <tr>
	                    <td align="right" valign="top"><?php echo $this->_tpl_vars['form_description']['LABEL']; ?>
:</td>
	                    <td valign="top"><?php echo $this->_tpl_vars['form_description']['INPUT']; ?>
</td>
                    </tr>
                    <tr><td colspan="2">
<table class="formfield_list" border='0' cellspacing='0' cellpadding='0' width='100%' align='center'>
<thead>
<tr>
    <td width="50"><?php echo ((is_array($_tmp=$this->_tpl_vars['LABEL_ORDER'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['LABEL_NAME'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['LABEL_TYPE'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['LABEL_ENUMVAL'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>
    <td width="40">&nbsp;</td>
</tr>
</thead>
<tbody id="tbody_fieldlist">
<tr title="<?php echo $this->_tpl_vars['TOOLTIP_DRAGDROP']; ?>
">
    <td valign="top"><span class="formfield_order">?</span><input type="hidden" name="formfield_id" value="" /></td>
    <td valign="top" class='formfield_name'><input type="text" name="formfield_name" value="(no name)" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['LABEL_NEWFIELD'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
    <td valign="top" class='formfield_type'><select><?php echo $this->_tpl_vars['CMB_TIPO']; ?>
</select></td>
    <td valign="top" class='formfield_enumval'>
        <span class="formfield_enumval_wrap">
            <span class="formfield_enumval_passive"></span>
            <div class="formfield_enumval_active">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td rowspan='2' valign="top" width="50"><input type="text" name="formfield_enumlist_newitem" id='formfield_enumlist_newitem' value="" /></td>
                        <td valign="top" width="40"><input class="button" type="button" name="formfield_additem" value=">>"/></td>
                        <td rowspan='2' valign="top">
                            <select name="formfield_enumlist_items" size="4" class="formfield_enumlist_items" style="width:120px"></select>
                        </td>
                    </tr>
                    <tr>
                        <td width="40"><input class="button" type="button" name="formfield_delitem" value="<<" /></td>
                    </tr>
                </table>
            </div>
        </span>
    </td>
    <td class='formfield_order'><input class="button" type="button" name="formfield_add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LABEL_FFADD'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><input class="button" type="button" name="formfield_del" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['LABEL_FFDEL'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></td>
</tr>
</tbody>
</table>            
                    </td></tr>
                </table>
            </td>
        </tr>
    </table>
    <?php echo $this->_tpl_vars['id_formulario']['INPUT']; ?>

</form>
<script type="text/javascript">
CAMPOS_FORM = <?php echo $this->_tpl_vars['CAMPOS_FORM']; ?>
;
</script>