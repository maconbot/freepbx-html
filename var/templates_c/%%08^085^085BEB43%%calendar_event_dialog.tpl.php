<?php /* Smarty version 2.6.14, created on 2015-02-19 03:20:58
         compiled from file:/var/www/html/modules/calendar/themes/default/calendar_event_dialog.tpl */ ?>
<table width="99%" border="0">
    <tr class="letra12" height="30px" >
        <td align="left" width="90px"><b><?php echo $this->_tpl_vars['event']['LABEL']; ?>
: <span  class="required">*</span></b></td>
        <td align="left" colspan="2"><?php echo $this->_tpl_vars['event']['INPUT']; ?>
</td>
    </tr>
    <tr class="letra12" id="desc">
        <td align="left"><b><?php echo $this->_tpl_vars['description']['LABEL']; ?>
: </b></td>
        <td align="left" colspan="2"><?php echo $this->_tpl_vars['description']['INPUT']; ?>
</td>
    </tr>
    <tr class="letra12" height="30px">
        <td align="left" width="90px"><b><?php echo $this->_tpl_vars['date']['LABEL']; ?>
: <span  class="required">*</span></b></td>
        <td align="left" width="175px" nowrap="nowrap"><?php echo $this->_tpl_vars['date']['INPUT']; ?>
</td>
        <td align="left"><b><?php echo $this->_tpl_vars['Color']; ?>
:</b>
            <div id="colorSelector" style="padding-top: 11px; display: inline;">
                <div style="background-color: #3366CC"></div>
            </div>
        </td>
    </tr>
    <tr class="letra12">
        <td align="left" width="90px"><b><?php echo $this->_tpl_vars['to']['LABEL']; ?>
: <span  class="required">*</span></b></td>
        <td align="left" width="175px" colspan="2" nowrap="nowrap"><?php echo $this->_tpl_vars['to']['INPUT']; ?>
</td>
    </tr>
    
    
    <tr id="rowReminderEvent">
        <td align="left" colspan="3">
            <div id="divReminder">
                <input id="CheckBoxRemi" type="checkbox" class="CheckBoxClass" />
                <label id="lblCheckBoxRemi" for="CheckBoxRemi" class="CheckBoxLabelClass"><?php echo $this->_tpl_vars['Call_alert']; ?>
</label>
            </div>
        </td>
    </tr>
    <tr class="letra12 remin"  colspan="3">
        <td align="right" colspan="3"><div id="label_call"></td>
    </tr>
    <tr class="letra12 remin" height="30px" id="check">
        <td align="left"><b><?php echo $this->_tpl_vars['call_to']['LABEL']; ?>
: <span  class="required">*</span></b></td>
        <td align="left" colspan="2"><?php echo $this->_tpl_vars['call_to']['INPUT']; ?>
&nbsp;&nbsp;
            <span id="add_phone"><a href="#"><?php echo $this->_tpl_vars['add_phone']; ?>
</a></span>
        </td>
    </tr>
    <tr class="letra12 remin subElemento" height="30px">
        <td align="left"><b><?php echo $this->_tpl_vars['ReminderTime']['LABEL']; ?>
: <span  class="required">*</span></b></td>
        <td align="left"><?php echo $this->_tpl_vars['ReminderTime']['INPUT']; ?>
&nbsp;&nbsp;</td>
    </tr>
    <tr class="letra12 remin subElemento" height="30px">
        <td align="left" colspan="3">
            <b><?php echo $this->_tpl_vars['tts']['LABEL']; ?>
: <span  class="required">*</span>&nbsp;&nbsp;&nbsp;</b>
            <b><span class="counter">140</span></b>
            <a id="listenTTS" style="cursor: pointer;">
                <img src="modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/speaker.png" style="position: relative; right: 0px;" alt="<?php echo $this->_tpl_vars['Listen']; ?>
" title="<?php echo $this->_tpl_vars['Listen_here']; ?>
"/>
            </a>
            <div><?php echo $this->_tpl_vars['tts']['INPUT']; ?>
</div>
        </td>
    </tr>
    <tr id="rowNotificateEmail">
        <td align="left" colspan="3">
            <div id="divNotification">
                <input id="CheckBoxNoti" type="checkbox" class="CheckBoxClass" />
                <label id="lblCheckBoxNoti" for="CheckBoxNoti" class="CheckBoxLabelClass"><?php echo $this->_tpl_vars['Notification_Alert']; ?>
</label>
            </div>
        </td>
    </tr>
    <tr class="letra12 notif" id="notification_email">
        <td align="left" colspan="3">
            <div>
                <b id="notification_email_label"><?php echo $this->_tpl_vars['notification_email']; ?>
: <span  class="required">*</span></b>
            </div>
            <div class="ui-widget">
                <textarea id="tags" cols="48px" rows="2" style="color: #333333; font-size:12px; width: 365px; height: 36px; "></textarea>
            </div>
        </td>
    </tr>
</table>
<div class="letra12 notif" id="email_to" align="center">
    <table id="grilla" style="font-size: 16px;" width="90%" border="0">
	    <thead>
	       <tr>
	           <td>&nbsp;</td>
	           <td class="letra12" align="center" style="color:#666666; font-weight:bold;font-size:12px;"><?php echo $this->_tpl_vars['LBL_CONTACT_NAME']; ?>
</td>
               <td class="letra12" align="center" style="color:#666666; font-weight:bold;font-size:12px;"><?php echo $this->_tpl_vars['LBL_CONTACT_EMAIL']; ?>
</td>
               <td>&nbsp;</td>
	       </tr>
	    </thead>
	    <tbody>
	    </tbody>
    </table>
</div>