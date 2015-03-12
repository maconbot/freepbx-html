<?php /* Smarty version 2.6.14, created on 2015-02-18 21:57:14
         compiled from file:/var/www/html/modules/graphic_calls/themes/default/filter-graphic-calls.tpl */ ?>
    <table width='100%' border='0'>
        <tr>
            <td align='left'>
                <table>
                <tr>
                    <td class='letra12'><?php echo $this->_tpl_vars['fecha_ini']['LABEL']; ?>
<span  class='required'>*</span></td>
                    <td><?php echo $this->_tpl_vars['fecha_ini']['INPUT']; ?>
</td>
                    <td class='letra12'><?php echo $this->_tpl_vars['fecha_fin']['LABEL']; ?>
<span  class='required'>*</span></td>
                    <td><?php echo $this->_tpl_vars['fecha_fin']['INPUT']; ?>
</td>
                    <td class='letra12' colspan="2">&nbsp;</td>
                    <td><input type='submit' name='submit_fecha' value='<?php echo $this->_tpl_vars['LABEL_FIND']; ?>
' class='button' /></td>
                </tr>
                <tr>
                    <td class='letra12' align='left'><?php echo $this->_tpl_vars['tipo']['LABEL']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['tipo']['INPUT']; ?>
</td>
                    <td class='letra12' align='left'><?php echo $this->_tpl_vars['estado']['LABEL']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['estado']['INPUT']; ?>
</td>
                    <td class='letra12' align='left'><?php echo $this->_tpl_vars['queue']['LABEL']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['queue']['INPUT']; ?>
</td>
                    <td class='letra12'>&nbsp;</td>
                </tr>
                </table>
            </td>
        </tr>
        <tr align='left'>
            <td>
                <img src='?menu=<?php echo $this->_tpl_vars['MODULE_NAME']; ?>
&amp;rawmode=yes&amp;action=graph_histogram&amp;tipo=<?php echo $this->_tpl_vars['TIPO']; ?>
&amp;estado=<?php echo $this->_tpl_vars['ESTADO']; ?>
&amp;queue=<?php echo $this->_tpl_vars['QUEUE']; ?>
&amp;fecha_ini=<?php echo $this->_tpl_vars['FECHA_INI']; ?>
&amp;fecha_fin=<?php echo $this->_tpl_vars['FECHA_FIN']; ?>
' />
            </td>
        </tr>
    </table>
