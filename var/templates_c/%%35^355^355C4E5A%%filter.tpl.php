<?php /* Smarty version 2.6.14, created on 2015-02-18 21:37:06
         compiled from file:/var/www/html/modules/group_permission/themes/default/filter.tpl */ ?>
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td width="5%" align="right"><?php echo $this->_tpl_vars['filter_group']['LABEL']; ?>
:&nbsp;&nbsp;</td>
        <td width="10%" align="left"><?php echo $this->_tpl_vars['filter_group']['INPUT']; ?>
</td>
    </tr>
    <tr class="letra12">
        <td width="5%" align="right"><?php echo $this->_tpl_vars['filter_resource']['LABEL']; ?>
:&nbsp;&nbsp;</td>
        <td width="10%" align="left"><?php echo $this->_tpl_vars['filter_resource']['INPUT']; ?>
</td>
        <td align="left"><input class="button" type="submit" name="show" value="<?php echo $this->_tpl_vars['SHOW']; ?>
" /><td>
    </tr>
</table>

<input type="hidden" name="resource_apply" value="<?php echo $this->_tpl_vars['resource_apply']; ?>
">
<input type="hidden" name="limit_apply" value="<?php echo $this->_tpl_vars['limit_apply']; ?>
">
<input type="hidden" name="offset_apply" value="<?php echo $this->_tpl_vars['offset_apply']; ?>
">

<input type="hidden" name="action_apply" value="<?php echo $this->_tpl_vars['action_apply']; ?>
">
<input type="hidden" name="start_apply" value="<?php echo $this->_tpl_vars['start_apply']; ?>
">
<?php echo '
  <script type="text/javascript">
    $(document).ready(function() {
      $("td.neo-table-title-row,td.table_title_row, th").css("width","50%");
    });
  </script>
'; ?>