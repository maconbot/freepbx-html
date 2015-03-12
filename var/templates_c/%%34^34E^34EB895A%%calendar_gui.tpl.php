<?php /* Smarty version 2.6.14, created on 2015-02-19 03:20:58
         compiled from /var/www/html/modules/calendar/themes/default/calendar_gui.tpl */ ?>
<form  method='POST' style='margin-bottom:0;' name='formCalendar' id='formCalendar'>
<br />
<table class="tabForm" style="font-size: 16px;" width="100%"><tr>
	<td id="calendar_toolbar" width="10%" align="left" valign="top" style="font-size:64%;">
	    <div id="calendar_buttonbox" style="margin: 0px 10px 6px 10px;" valign="middle">
	        <a href="#" id="calendar_newevent" ><?php echo $this->_tpl_vars['LBL_CREATE_EVENT']; ?>
</a>    
	    </div>
	    <div id="calendar_datepick">    
	    </div>
	    <div id="calendar_ical_links" class="ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
            <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all title_size"><?php echo $this->_tpl_vars['LBL_EXPORT_CALENDAR']; ?>
</div>
            <div class="content_ical">
                <a href="/rest.php/<?php echo $this->_tpl_vars['module_name']; ?>
/CalendarEvent?format=ical">
                    <span><?php echo $this->_tpl_vars['LBL_LINK_ICAL']; ?>
</span>
                </a>
            </div>
	    </div>
	</td>
	<td align="right" width="90%">
	   <div id="calendar_main"></div>
	</td>
</tr></table>
<input type="hidden" name="server_year" value="<?php echo $this->_tpl_vars['SERVER_YEAR']; ?>
" />
<input type="hidden" name="server_month" value="<?php echo $this->_tpl_vars['SERVER_MONTH']; ?>
" />
<input type="hidden" name="event_id" value="<?php echo $this->_tpl_vars['EVENT_ID']; ?>
" />
</form>

<div id="calendar_eventdialog" style="display: none;">
<?php echo $this->_tpl_vars['EVENT_DIALOG']; ?>

</div>

<script type="text/javascript">
var arrLang_main = <?php echo $this->_tpl_vars['ARRLANG_MAIN']; ?>
;
</script>