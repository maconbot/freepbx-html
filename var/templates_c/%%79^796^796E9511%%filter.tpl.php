<?php /* Smarty version 2.6.14, created on 2015-02-18 21:57:20
         compiled from file:/var/www/html/modules/calls_per_agent/themes/default/filter.tpl */ ?>
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
      <tr class="letra12">
        <td align="right"><?php echo $this->_tpl_vars['date_start']['LABEL']; ?>
: <span  class="required">*</span></td>
        <td align="left" nowrap><?php echo $this->_tpl_vars['date_start']['INPUT']; ?>
</td>
        <td align="right"><?php echo $this->_tpl_vars['date_end']['LABEL']; ?>
: <span  class="required">*</span></td>
        <td align="left" nowrap><?php echo $this->_tpl_vars['date_end']['INPUT']; ?>
</td>
        <td colspan="3">&nbsp;</td>
     </tr>
      <tr class="letra12">
        <td align="right"><?php echo $this->_tpl_vars['type']['LABEL']; ?>
</td>
        <td align="left" nowrap="nowrap"><?php echo $this->_tpl_vars['type']['INPUT']; ?>
</td>
        <td align="right"><?php echo $this->_tpl_vars['queue']['LABEL']; ?>
</td>
        <td align="left" nowrap="nowrap"><?php echo $this->_tpl_vars['queue']['INPUT']; ?>
</td>
        <td align="right"><?php echo $this->_tpl_vars['number']['LABEL']; ?>
</td>
        <td align="left" nowrap="nowrap"><?php echo $this->_tpl_vars['number']['INPUT']; ?>
</td>
        <td align="center"><input class="button" type="submit" name="filter" value="<?php echo $this->_tpl_vars['Filter']; ?>
" /></td>
      </tr>
</table>