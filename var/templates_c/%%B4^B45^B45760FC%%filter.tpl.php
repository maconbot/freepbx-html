<?php /* Smarty version 2.6.14, created on 2015-02-18 21:52:06
         compiled from file:/var/www/html/modules/cdrreport/themes/default/filter.tpl */ ?>
    <table width="99%" cellpadding="4" cellspacing="0" border="0" align="center">
      <tr class="letra12">
        <td width="7%" align="right"><?php echo $this->_tpl_vars['date_start']['LABEL']; ?>
:</td>
        <td width="10%" align="left" nowrap><?php echo $this->_tpl_vars['date_start']['INPUT']; ?>
</td>
        <td width="11%" align="right"><?php echo $this->_tpl_vars['field_pattern']['LABEL']; ?>
: </td>
        <td width="14%" align="left" nowrap><?php echo $this->_tpl_vars['field_name']['INPUT']; ?>
&nbsp;<?php echo $this->_tpl_vars['field_pattern']['INPUT']; ?>
</td>
        <td align="left"><input class="button" type="submit" name="filter" value="<?php echo $this->_tpl_vars['Filter']; ?>
" /></td>
      </tr>
      <tr class="letra12">
        <td align="right"><?php echo $this->_tpl_vars['date_end']['LABEL']; ?>
:</td>
        <td align="left" nowrap><?php echo $this->_tpl_vars['date_end']['INPUT']; ?>
</td>
        <td align="right"><?php echo $this->_tpl_vars['status']['LABEL']; ?>
: </td>
        <td align="left" nowrap><?php echo $this->_tpl_vars['status']['INPUT']; ?>
</td>
      </tr>
      <tr class="letra12">
        <td /td>
        <td /td>
        <td align="right"><?php echo $this->_tpl_vars['ringgroup']['LABEL']; ?>
: </td>
        <td align="left" nowrap><?php echo $this->_tpl_vars['ringgroup']['INPUT']; ?>
</td>
      </tr>
   </table>

