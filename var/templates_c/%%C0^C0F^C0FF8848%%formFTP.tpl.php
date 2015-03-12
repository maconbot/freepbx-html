<?php /* Smarty version 2.6.14, created on 2015-03-12 02:08:35
         compiled from file:/var/www/html/modules/backup_restore/themes/default/formFTP.tpl */ ?>


<table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
	<td align="left">
	    <input class="button" type="submit" name="save_new_FTP" value="<?php echo $this->_tpl_vars['SAVE']; ?>
">&nbsp;&nbsp;
	    <input class="button" type="submit" name="cancel" value="<?php echo $this->_tpl_vars['CANCEL']; ?>
">
	</td>
	<td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $this->_tpl_vars['REQUIRED_FIELD']; ?>
</span></td>
    </tr>
</table>

<div id="table_center" class="tabFormFTP">
    <div class="letra12">
        <b><br/>&nbsp;&nbsp;<?php echo $this->_tpl_vars['TITLE']; ?>
</b>
    </div>
    <div id="content">
        <div class="divs">
            <table style="font-size: 26px;" width="75%" >
                <tr class="letra12">
                    <td align="left"><b><?php echo $this->_tpl_vars['local']['LABEL']; ?>
: </b></td>
                    <td align="center"><b><?php echo $this->_tpl_vars['server_ftp']['LABEL']; ?>
: </b></td>
                </tr>
            </table>
        </div>
        <div id="home">
            <div id="lef">
                <ul id="sortable1" class='droptrue'>
                                <?php $_from = $this->_tpl_vars['local_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
                <li class='ui-state-default' id='inn_<?php echo $this->_tpl_vars['file']; ?>
'><b class='item'><?php echo $this->_tpl_vars['file']; ?>
</b></li>
                <?php endforeach; endif; unset($_from); ?>
                </ul>
            </div>
            <div id="med">
            </div>
            <div id="cen">
                <ul id="sortable2" class='droptrue2'>
                                <?php $_from = $this->_tpl_vars['remote_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
                <li class='ui-state-default' id='out_<?php echo $this->_tpl_vars['file']; ?>
'><b class='item'><?php echo $this->_tpl_vars['file']; ?>
</b></li>
                <?php endforeach; endif; unset($_from); ?>
                </ul>
            </div>
            <div id="rig">
                <table style="font-size: 16px;" width="25%" >
                    <tr class="letra12">
                        <td align="left"><b><?php echo $this->_tpl_vars['server']['LABEL']; ?>
: <span  class="required">*</span></b></td>
                    </tr>
                    <tr class="letra12">
                        <td align="left"><?php echo $this->_tpl_vars['server']['INPUT']; ?>
</td>
                    </tr>
                    <tr class="letra12">
                        <td align="left"><b><?php echo $this->_tpl_vars['port']['LABEL']; ?>
: <span  class="required">*</span></b></td>
                    </tr>
                    <tr class="letra12">
                        <td align="left"><?php echo $this->_tpl_vars['port']['INPUT']; ?>
</td>
                    </tr>
                    <tr class="letra12">
                        <td align="left"><b><?php echo $this->_tpl_vars['user']['LABEL']; ?>
: <span  class="required">*</span></b></td>
                    </tr>
                    <tr class="letra12">
                        <td align="left"><?php echo $this->_tpl_vars['user']['INPUT']; ?>
</td>
                    </tr>
                    <tr class="letra12">
                        <td align="left"><b><?php echo $this->_tpl_vars['password']['LABEL']; ?>
: <span  class="required">*</span></b></td>
                    </tr>
                    <tr class="letra12">
                        <td align="left"><?php echo $this->_tpl_vars['password']['INPUT']; ?>
</td>
                    </tr>
                    <tr class="letra12">
                        <td align="left"><b><?php echo $this->_tpl_vars['pathServer']['LABEL']; ?>
: <span  class="required">*</span></b></td>
                    </tr>
                    <tr class="letra12">
                        <td align="left"><?php echo $this->_tpl_vars['pathServer']['INPUT']; ?>
</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>