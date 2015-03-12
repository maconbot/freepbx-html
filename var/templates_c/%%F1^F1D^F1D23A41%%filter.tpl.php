<?php /* Smarty version 2.6.14, created on 2015-02-19 04:09:57
         compiled from file:/var/www/html/modules/hold_time/themes/default/filter.tpl */ ?>
<table width='100%' border='0'>
    <tr>
        <td align='left'>
            <table>
            <tr>
                <td class='letra12'>
                    <?php echo $this->_tpl_vars['date_start']['LABEL']; ?>

                    <span  class='required'>*</span>
                </td>
                <td>
                    <?php echo $this->_tpl_vars['date_start']['INPUT']; ?>

                </td>
                <td class='letra12'>
                    &nbsp;
                </td>
                <td class='letra12'>
                    <?php echo $this->_tpl_vars['date_end']['LABEL']; ?>

                    <span  class='required'>*</span>
                </td>
                <td>
                    <?php echo $this->_tpl_vars['date_end']['INPUT']; ?>

                </td>
                <td>&nbsp;</td>
            </tr>

            <tr>
                <td class='letra12' align='left'><?php echo $this->_tpl_vars['call_type']['LABEL']; ?>
</td>
                <td><?php echo $this->_tpl_vars['call_type']['INPUT']; ?>
</td>
                <td class='letra12'>
                    &nbsp;
                </td>
                <td class='letra12' align='left'><?php echo $this->_tpl_vars['call_state']['LABEL']; ?>
</td>
                <td><?php echo $this->_tpl_vars['call_state']['INPUT']; ?>
</td>
                <td>
                    <input type='submit' name='submit_fecha' value="<?php echo $this->_tpl_vars['LABEL_FIND']; ?>
" class='button'>
                </td>
            </tr>
            </table>
        </td>
    </tr>
</table>