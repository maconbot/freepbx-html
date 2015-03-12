<?php /* Smarty version 2.6.14, created on 2015-02-19 03:50:51
         compiled from file:/var/www/html/modules/sec_advanced_settings/themes/default/form.tpl */ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <?php if ($this->_tpl_vars['mode'] == 'input'): ?>
        <td align="left">
            <input class="button" type="submit" name="update_advanced_security_settings" value="<?php echo $this->_tpl_vars['SAVE']; ?>
">&nbsp;&nbsp;
        </td>
        <?php endif; ?>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="100%" >
    <tr>
	<td  width="50%" valign='top'>
	    <table>
		<tr class="letra12">
		    <td align="left"><b style ="color:#E35332; font-weigth:bold;font-size:13px;font-family:'Lucida Console';"><?php echo $this->_tpl_vars['subtittle1']; ?>
</b></td>
		</tr>
		<tr class="letra12">
		    <td align="left" >
                        <b><?php echo $this->_tpl_vars['status_fpbx_frontend']['LABEL']; ?>
:</b><a href="#" title="<?php echo $this->_tpl_vars['FreePBX_copy_right']; ?>
">?</a>
                    </td>
		    <td align="left" ><input type="hidden" name="oldstatus_fpbx_frontend" id="oldstatus_fpbx_frontend" value="<?php if ($this->_tpl_vars['value_fpbx_frontend']): ?>1<?php else: ?>0<?php endif; ?>" /><input type="checkbox" name="status_fpbx_frontend" id="status_fpbx_frontend" <?php if ($this->_tpl_vars['value_fpbx_frontend']): ?>checked="checked"<?php endif; ?> /></td>
		</tr>
        <tr class="letra12">
            <td align="left" ><b><?php echo $this->_tpl_vars['status_anonymous_sip']['LABEL']; ?>
:</b></td>
            <td align="left" ><input type="hidden" name="oldstatus_anonymous_sip" id="oldstatus_anonymous_sip" value="<?php if ($this->_tpl_vars['value_anonymous_sip']): ?>1<?php else: ?>0<?php endif; ?>" /><input type="checkbox" name="status_anonymous_sip" id="status_anonymous_sip" <?php if ($this->_tpl_vars['value_anonymous_sip']): ?>checked="checked"<?php endif; ?> /></td>
        </tr>
	    </table>
	</td>
	<td width="50%" valign='top'>
	    <table>
		<tr class="letra12">
		    <td align="left"><b style ="color:#E35332; font-weigth:bold;font-size:13px;font-family:'Lucida Console';"><?php echo $this->_tpl_vars['subtittle2']; ?>
</b></td>
		</tr>
		<tr class="letra12">
		    <td align="left" >
                        <b><?php echo $this->_tpl_vars['fpbx_password']['LABEL']; ?>
:</b><a href="#" title="<?php echo $this->_tpl_vars['FreePBX_copy_right']; ?>
">?</a>                        
                    </td>
		    <td align="left" ><?php echo $this->_tpl_vars['fpbx_password']['INPUT']; ?>
</td>
		</tr>
		<tr class="letra12">
		    <td align="left" ><b><?php echo $this->_tpl_vars['fpbx_confir_password']['LABEL']; ?>
:</b></td>
		    <td align="left" ><?php echo $this->_tpl_vars['fpbx_confir_password']['INPUT']; ?>
</td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
                