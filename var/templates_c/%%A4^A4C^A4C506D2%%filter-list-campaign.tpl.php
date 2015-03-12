<?php /* Smarty version 2.6.14, created on 2015-02-18 21:18:43
         compiled from /var/www/html/modules/campaign_out/themes/default/filter-list-campaign.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', '/var/www/html/modules/campaign_out/themes/default/filter-list-campaign.tpl', 4, false),)), $this); ?>
<table width="100%" border="0">
<tr>
    <td align="right" class="letra12" width="20%" ><b><?php echo $this->_tpl_vars['LABEL_CAMPAIGN_STATE']; ?>
:</b></td>
    <td><?php echo smarty_function_html_options(array('name' => 'cbo_estado','id' => 'cbo_estado','options' => $this->_tpl_vars['estados'],'selected' => $this->_tpl_vars['estado_sel'],'onchange' => 'submit();'), $this);?>
</td>
</tr>
</table>
