<?php /* Smarty version 2.6.14, created on 2015-02-18 20:50:36
         compiled from /var/www/html/modules/pbxadmin/themes/default/main.tpl */ ?>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr>
    <td valign="top" width="220"><div id="nav"><div id="nav-setup" class="tabs-container">
      <ul>
        <li class="category category-header"><?php echo $this->_tpl_vars['Basic']; ?>
</li>
        <li><a class="current" href="/?menu=pbxconfig&amp;type=setup&amp;display=extensions"  ><?php echo $this->_tpl_vars['Extensions']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=featurecodeadmin"  ><?php echo $this->_tpl_vars['Feature_Codes']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=routing"  ><?php echo $this->_tpl_vars['Outbound_Routes']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=trunks"  ><?php echo $this->_tpl_vars['Trunks']; ?>
</a></li>
        <li><?php echo $this->_tpl_vars['Inbound_Call_Control']; ?>
</li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=did"  ><?php echo $this->_tpl_vars['Inbound_Routes']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=dahdichandids"  ><?php echo $this->_tpl_vars['DAHDI_Channel_DIDs']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=announcement"  ><?php echo $this->_tpl_vars['Announcements']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=blacklist"  ><?php echo $this->_tpl_vars['Blacklist']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=cidlookup"  ><?php echo $this->_tpl_vars['CallerID_Lookup_Sources']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=daynight"  ><?php echo $this->_tpl_vars['Call_Flow_Control']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=findmefollow"  ><?php echo $this->_tpl_vars['Follow_Me']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=ivr"  ><?php echo $this->_tpl_vars['IVR']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=queueprio"  ><?php echo $this->_tpl_vars['Queue_Priorities']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=queues"  ><?php echo $this->_tpl_vars['Queues']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=ringgroups"  ><?php echo $this->_tpl_vars['Ring_Groups']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=timeconditions"  ><?php echo $this->_tpl_vars['Time_Conditions']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=timegroups"  ><?php echo $this->_tpl_vars['Time_Groups']; ?>
</a></li>
        <li><?php echo $this->_tpl_vars['Internal_Options_Configuration']; ?>
</li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=conferences"  ><?php echo $this->_tpl_vars['Conferences']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=languages"  ><?php echo $this->_tpl_vars['Languages']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=miscapps"  ><?php echo $this->_tpl_vars['Misc_Applications']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=miscdests"  ><?php echo $this->_tpl_vars['Misc_Destinations']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=music"  ><?php echo $this->_tpl_vars['Music_on_Hold']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=pinsets"  ><?php echo $this->_tpl_vars['PIN_Sets']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=paging"  ><?php echo $this->_tpl_vars['Paging_Intercom']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=parking"  ><?php echo $this->_tpl_vars['Parking_Lot']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=recordings"  ><?php echo $this->_tpl_vars['System_Recordings']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=vmblast"  ><?php echo $this->_tpl_vars['VoiceMail_Blasting']; ?>
</a></li>
        <li><?php echo $this->_tpl_vars['Remote_Access']; ?>
</li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=callback"  ><?php echo $this->_tpl_vars['Callback']; ?>
</a></li>
        <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=disa"  ><?php echo $this->_tpl_vars['DISA']; ?>
</a></li>
        <li><?php echo $this->_tpl_vars['Option']; ?>
</li>
        <li style="float:left;border-right:0px"><a href="/admin/" target="_blank"><?php echo $this->_tpl_vars['Unembedded_freePBX']; ?>
</a></li>
        <div style="height:0px">
            <a href="#" class="info"><span style='margin-left:0.2cm; margin-top:-1.8cm; width:303px'><?php echo $this->_tpl_vars['INFO']; ?>
</span></a>
        </div>
      </ul>
        <br /> <br /> <br /> <br />
    </td>
<td id="content_pbx" valign="top"><?php echo $this->_tpl_vars['htmlFPBX']; ?>
</td>
</tr>
<tr>
	<td></td>
	<td valign="bottom">
		<div align="center">
			<a href="http://www.freepbx.org" target="_blank" style="color: #444; text-decoration: none;">FreePBX®</a>
			<a style="color: #444; text-decoration: none;"><?php echo $this->_tpl_vars['footer_FreePBX']; ?>
</a>
			<a href="http://www.schmoozecom.com/" target="_blank" style="color: #444; text-decoration: none;">Schmooze Com, Inc.</a>
		</div>
	</td>
</tr>
</table>