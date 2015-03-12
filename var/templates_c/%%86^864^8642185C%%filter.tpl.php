<?php /* Smarty version 2.6.14, created on 2015-02-19 04:09:59
         compiled from file:/var/www/html/modules/login_logout/themes/default/filter.tpl */ ?>
<table cellpadding="4" cellspacing="0" border="0" align="center">
  <tr class="letra12">
    <td align="right"><?php echo $this->_tpl_vars['date_start']['LABEL']; ?>
:<span  class='required'>*</span></td>
    <td align="left" nowrap><?php echo $this->_tpl_vars['date_start']['INPUT']; ?>
</td>
    <td align="right"><?php echo $this->_tpl_vars['date_end']['LABEL']; ?>
:<span  class='required'>*</span></td>
    <td align="left" nowrap><?php echo $this->_tpl_vars['date_end']['INPUT']; ?>
</td>
    <td align="right"><?php echo $this->_tpl_vars['queue']['LABEL']; ?>
:</td>
    <td align="left" nowrap><?php echo $this->_tpl_vars['queue']['INPUT']; ?>
</td>
    <td align="right"><?php echo $this->_tpl_vars['detailtype']['LABEL']; ?>
:<span  class='required'>*</span></td>
    <td align="left" nowrap><?php echo $this->_tpl_vars['detailtype']['INPUT']; ?>
</td>
    <td align="left"><input class="button" type="submit" name="filter" value="<?php echo $this->_tpl_vars['Filter']; ?>
" /></td>
  </tr>
</table>