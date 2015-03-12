<?php /* Smarty version 2.6.14, created on 2015-02-18 21:56:50
         compiled from file:/var/www/html/modules/rep_trunks_used_per_hour/themes/default/filter.tpl */ ?>
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td width="30%" align="left"><?php echo $this->_tpl_vars['date_from']['LABEL']; ?>
:&nbsp;&nbsp;<?php echo $this->_tpl_vars['date_from']['INPUT']; ?>
</td>
        <td width="70%" align="left">
            <?php echo $this->_tpl_vars['filter_field']['LABEL']; ?>
:&nbsp;&nbsp;<?php echo $this->_tpl_vars['filter_field']['INPUT']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['filter_value']['INPUT']; ?>

            <input class="button" type="submit" name="show" value="<?php echo $this->_tpl_vars['SHOW']; ?>
" />
        </td>
    </tr>
    <tr class="letra12">
        <td width="30%" align="left"><?php echo $this->_tpl_vars['date_to']['LABEL']; ?>
:&nbsp;&nbsp;<?php echo $this->_tpl_vars['date_to']['INPUT']; ?>
</td>
        <td width="70%" align="left">&nbsp;</td>
    </tr>
</table>