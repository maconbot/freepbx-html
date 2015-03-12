<?php /* Smarty version 2.6.14, created on 2015-02-19 04:11:40
         compiled from file:/var/www/html/modules/form_list/themes/default/preview.tpl */ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
<?php if (! $this->_tpl_vars['FRAMEWORK_TIENE_TITULO_MODULO']): ?>
    <table width="100%">
    <tr class="moduleTitle">
            <td class="moduleTitle" valign="middle">&nbsp;&nbsp;<img src="<?php echo $this->_tpl_vars['icon']; ?>
" border="0" align="absmiddle" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['title']; ?>
 
            </td>
    </tr>
    </table>
<?php endif; ?>    
    <table class="tabForm">
    <tr>
            <td width="12%" valign="top"><?php echo $this->_tpl_vars['form_nombre']['LABEL']; ?>
: <span  class="required" <?php echo $this->_tpl_vars['style_field']; ?>
>*</span></td>
            <td width="42%" valign="top"><?php echo $this->_tpl_vars['form_nombre']['INPUT']; ?>
</td>
            <td width="9%" valign="top"><?php echo $this->_tpl_vars['form_description']['LABEL']; ?>
:</td>
            <td width="45%" valign="top"><?php echo $this->_tpl_vars['form_description']['INPUT']; ?>
</td>
    </tr> 
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <?php echo $this->_tpl_vars['formulario']; ?>

            </td>
        </tr>
    </table>
</table>
