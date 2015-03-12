<table width="99%" border="0">
    <tr class="letra12" height="30px" >
        <td align="left" width="90px"><b>{$event.LABEL}: <span  class="required">*</span></b></td>
        <td align="left" colspan="2">{$event.INPUT}</td>
    </tr>
    <tr class="letra12" id="desc">
        <td align="left"><b>{$description.LABEL}: </b></td>
        <td align="left" colspan="2">{$description.INPUT}</td>
    </tr>
    <tr class="letra12" height="30px">
        <td align="left" width="90px"><b>{$date.LABEL}: <span  class="required">*</span></b></td>
        <td align="left" width="175px" nowrap="nowrap">{$date.INPUT}</td>
        <td align="left"><b>{$Color}:</b>
            <div id="colorSelector" style="padding-top: 11px; display: inline;">
                <div style="background-color: #3366CC"></div>
            </div>
        </td>
    </tr>
    <tr class="letra12">
        <td align="left" width="90px"><b>{$to.LABEL}: <span  class="required">*</span></b></td>
        <td align="left" width="175px" colspan="2" nowrap="nowrap">{$to.INPUT}</td>
    </tr>
    
    
    <tr id="rowReminderEvent">
        <td align="left" colspan="3">
            <div id="divReminder">
                <input id="CheckBoxRemi" type="checkbox" class="CheckBoxClass" />
                <label id="lblCheckBoxRemi" for="CheckBoxRemi" class="CheckBoxLabelClass">{$Call_alert}</label>
            </div>
        </td>
    </tr>
    <tr class="letra12 remin"  colspan="3">
        <td align="right" colspan="3"><div id="label_call"></td>
    </tr>
    <tr class="letra12 remin" height="30px" id="check">
        <td align="left"><b>{$call_to.LABEL}: <span  class="required">*</span></b></td>
        <td align="left" colspan="2">{$call_to.INPUT}&nbsp;&nbsp;
            <span id="add_phone"><a href="#">{$add_phone}</a></span>
        </td>
    </tr>
    <tr class="letra12 remin subElemento" height="30px">
        <td align="left"><b>{$ReminderTime.LABEL}: <span  class="required">*</span></b></td>
        <td align="left">{$ReminderTime.INPUT}&nbsp;&nbsp;</td>
    </tr>
    <tr class="letra12 remin subElemento" height="30px">
        <td align="left" colspan="3">
            <b>{$tts.LABEL}: <span  class="required">*</span>&nbsp;&nbsp;&nbsp;</b>
            <b><span class="counter">140</span></b>
            <a id="listenTTS" style="cursor: pointer;">
                <img src="modules/{$module_name}/images/speaker.png" style="position: relative; right: 0px;" alt="{$Listen}" title="{$Listen_here}"/>
            </a>
            <div>{$tts.INPUT}</div>
        </td>
    </tr>
    <tr id="rowNotificateEmail">
        <td align="left" colspan="3">
            <div id="divNotification">
                <input id="CheckBoxNoti" type="checkbox" class="CheckBoxClass" />
                <label id="lblCheckBoxNoti" for="CheckBoxNoti" class="CheckBoxLabelClass">{$Notification_Alert}</label>
            </div>
        </td>
    </tr>
    <tr class="letra12 notif" id="notification_email">
        <td align="left" colspan="3">
            <div>
                <b id="notification_email_label">{$notification_email}: <span  class="required">*</span></b>
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
	           <td class="letra12" align="center" style="color:#666666; font-weight:bold;font-size:12px;">{$LBL_CONTACT_NAME}</td>
               <td class="letra12" align="center" style="color:#666666; font-weight:bold;font-size:12px;">{$LBL_CONTACT_EMAIL}</td>
               <td>&nbsp;</td>
	       </tr>
	    </thead>
	    <tbody>
	    </tbody>
    </table>
</div>
