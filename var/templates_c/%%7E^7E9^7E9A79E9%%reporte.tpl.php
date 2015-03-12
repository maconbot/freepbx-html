<?php /* Smarty version 2.6.14, created on 2015-02-19 03:41:09
         compiled from /var/www/html/modules/control_panel/themes/default/reporte.tpl */ ?>
<div id="controlPanelApplication">

<script type="text/x-handlebars" data-template-name="desktop">
<div style="float: left">
<div class="statusbar">
<!-- TODO: i18n -->
<?php echo '
{{#if connected}}
<span style="color: green; font-weight: bold;">Connected</span>
{{else}}
<span style="color: red; font-weight: bold;">Connecting...</span>
{{/if}}
'; ?>

</div>
<?php echo '{{#view App.BaseSortableView }}'; ?>


<?php echo '
{{#view App.PBXPanelView controllerBinding="extensions" }}
	';  echo $this->_tpl_vars['AREA_DESCR_EXTENSION'];  echo '
	{{#if finishedloading}}
	{{#view App.SortablePanelView }}
		{{#each }}
		{{view App.ExtensionView }}
		{{else}}
		<br/>
		{{/each}}
	{{/view}}
	{{else}}
	<img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/loading.gif"/>
	{{/if}}
{{/view}}
'; ?>


<?php echo '
{{#view App.PBXPanelView controllerBinding="dahdi" }}
    ';  echo $this->_tpl_vars['AREA_DESCR_TRUNKS'];  echo '
    {{#if finishedloading}}
	<div>
		{{#each }}
		{{view App.DAHDISpanView }}
		{{else}}
		<br/>
		{{/each}}
    </div>
    {{else}}
    <img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/loading.gif"/>
    {{/if}}
{{/view}}
'; ?>


<?php echo '
{{#view App.PBXPanelView controllerBinding="iptrunks" }}
	';  echo $this->_tpl_vars['AREA_DESCR_TRUNKSSIP'];  echo '
	{{#if finishedloading}}
	<div>
		{{#each }}
		{{view App.IPTrunkView }}
		{{else}}
		<br/>
		{{/each}}
	</div>
    {{else}}
    <img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/loading.gif"/>
    {{/if}}
{{/view}}
'; ?>


<?php echo '{{/view}}'; ?>
</div>


<?php echo '{{#view App.FAQView }}'; ?>

<?php echo '{{#view App.BaseSortableView }}'; ?>


<?php echo '
{{#view App.PBXPanelView controllerBinding="area1" }}
	{{view App.EditableTitleView }}
	<dd>
	{{#if finishedloading}}
	{{#view App.SortablePanelView }}
		{{#each }}
		{{view App.ExtensionView}}
		{{else}}
		<br/>
		{{/each}}
	{{/view}}
    {{else}}
    <img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}
'; ?>


<?php echo '
{{#view App.PBXPanelView controllerBinding="area2" }}
	{{view App.EditableTitleView }}
	<dd>
	{{#if finishedloading}}
	{{#view App.SortablePanelView }}
		{{#each }}
		{{view App.ExtensionView}}
		{{else}}
		<br/>
		{{/each}}
	{{/view}}
    {{else}}
    <img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}
'; ?>


<?php echo '
{{#view App.PBXPanelView controllerBinding="area3" }}
	{{view App.EditableTitleView }}
	<dd>
	{{#if finishedloading}}
	{{#view App.SortablePanelView }}
		{{#each }}
		{{view App.ExtensionView}}
		{{else}}
		<br/>
		{{/each}}
	{{/view}}
    {{else}}
    <img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}
'; ?>


<?php echo '
{{#view App.PBXPanelView controllerBinding="conferences" }}
	<dt>{{description}}</dt>
	<dd>
	{{#if finishedloading}}
	<div>
		{{#each }}
		{{view App.ConferenceView}}
		{{else}}
		<br/>
		{{/each}}
	</div>
    {{else}}
    <img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}
'; ?>


<?php echo '
{{#view App.PBXPanelView controllerBinding="parkinglots" }}
	<dt>{{description}}</dt>
	<dd>
	{{#if finishedloading}}
	<div>
		{{#each }}
		{{view App.ParkinglotView}}
		{{else}}
		<br/>
		{{/each}}
	</div>
    {{else}}
    <img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}
'; ?>


<?php echo '
{{#view App.PBXPanelView controllerBinding="queues" }}
	<dt>{{description}}</dt>
	<dd>
	{{#if finishedloading}}
	<div>
		{{#each }}
		{{view App.QueueView}}
		{{else}}
		<br/>
		{{/each}}
	</div>
    {{else}}
    <img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}
'; ?>


<?php echo '{{/view }}'; ?>
 <?php echo '{{/view}}'; ?>
 </script><!-- data-template-name="desktop"  -->

<script type="text/x-handlebars" data-template-name="extension">
<div style="float:left; border: black solid 0px;">
	<a class="pbxtooltip" href="#">
	<img src="modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/info.png"/>
	<div>
		<?php echo '
		{{extension}}: {{channel}} - {{description}} {{#if registered}}({{ip}}){{/if}}<br/>
		{{#if active }}
		<ul>
	    {{#each active}}
	    <li>{{formatSince}}: {{remoteExten}}</li>
	    {{/each}}
	    </ul>
	    {{/if}}
		'; ?>

	</div>
	</a>
</div>
<div style="float:left; width:115px; text-align:left; padding-left:4px;">
	<?php echo '
	<b>{{extension}}:</b> {{view.truncatedDescription}}<br/>
	{{#each active}}
	<span class="monitor">{{formatSince}}: {{remoteExten}}</span><br/>
	{{/each}}
	'; ?>

</div>
<?php echo '
<div style="float: right; border: black solid 0px;">
	{{view App.DraggablePhoneIconView iconBinding="view.extensionIcon" }}
</div>
{{#if unreadMail }}
<div style="float: right; border: black solid 0px;">
	<a class="pbxtooltip" href="#" {{action "dialvoicemail" this on="doubleClick"}}>
		<img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/mail.png"/>
		<div>';  echo $this->_tpl_vars['LBL_NEW'];  echo ': {{NewMessages}}, ';  echo $this->_tpl_vars['LBL_OLD'];  echo ': {{OldMessages}}</div>
    </a>
</div>
{{/if}}
'; ?>

</script>


<script type="text/x-handlebars" data-template-name="iptrunk">
<div style="float:left; border: black solid 0px;">
    <a class="pbxtooltip" href="#">
    <img src="modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/info.png"/>
    <div>
        <?php echo '
        {{channel}} {{#if registered}}({{ip}}){{/if}}<br/>
        {{#if active}}
        <ul>
	    {{#each active}}
	    <li>{{formatSince}}: {{CallerIDNum}}</li>
	    {{/each}}
	    </ul>
	    {{/if}}
        '; ?>

    </div>
    </a>
</div>
<div style="float:left; width:115px; text-align:left; padding-left:4px;">
    <?php echo '
    <b>{{view.truncatedDescription}}</b><br/>
    {{#each active}}
    <span class="monitor">{{formatSince}}: {{CallerIDNum}}</span><br/>
    {{/each}}
    '; ?>

</div>
<?php echo '
<div style="float: right; border: black solid 0px;">
    <img class="icon" src="modules/';  echo $this->_tpl_vars['module_name'];  echo '/images/icon_trunk2.png"/>
</div>
'; ?>

</script>


<script type="text/x-handlebars" data-template-name="dahdispan">
<div style="float:left; border: black solid 0px;">
    <a class="pbxtooltip" href="#">
    <img src="modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/info.png"/>
    <div>
        <?php echo '
        DAHDI/{{span}}: {{formatChanRange}}<br/>

        <!-- Mostrar los números de los canales en la alarma -->
        {{#each chan}}<span {{bindAttr style="alarmstyle"}}>{{chan}}</span>{{/each}}
        
        <!-- Mostrar las llamadas activas no clasificadas en un canal canal -->
        {{#if active}}
        <ul>
        {{#each active}}
        <li>{{formatSince}}: {{CallerIDNum}}</li>
        {{/each}}
        </ul>
        {{/if}}

        <!-- Mostrar las llamadas activas en cada canal -->
        <ul>
        {{#each chan}}
            {{#if active }}
	            <li>{{chan}}:
	            {{#each active}}
	                {{formatSince}}: {{CallerIDNum}}
	            {{else}}
	                (idle)
	            {{/each}}
	            </li>
            {{/if}}
        {{/each}}
        </ul>
        '; ?>

    </div>
    </a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
    <?php echo '
    <b>DAHDI/{{span}}:</b> {{formatChanRange}}<br/>
    '; ?>

</div>
<div style="float: right; border: black solid 0px;">
    <img class="icon" src="modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/icon_trunk2.png"/>
</div>
</script>


<script type="text/x-handlebars" data-template-name="queue">
<div style="float:left; border: black solid 0px;">
	<a class="pbxtooltip" href="#">
	<img src="modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/info.png"/>
	<div>
		<?php echo '
		{{extension}}: {{description}}<br/>
		{{#if members}}
		';  echo $this->_tpl_vars['LBL_QUEUE_MEMBERS'];  echo ':<br/>
		<ul>
		{{#each members}}<li>{{shortchannel}}</li>{{/each}}
		</ul>
		{{else}}
		';  echo $this->_tpl_vars['LBL_QUEUE_NO_MEMBERS'];  echo '
		{{/if}}
		<br/>
		{{#if callers}}
		';  echo $this->_tpl_vars['LBL_QUEUE_CALLERS'];  echo ':<br/>
		<ul>
		{{#each callers}}
		<li>{{CallerIDName}} &lt;{{CallerIDNum}}&gt;</li>
		{{/each}}
		</ul>
		{{else}}
		';  echo $this->_tpl_vars['LBL_QUEUE_NO_CALLERS'];  echo '
		{{/if}}
		'; ?>

	</div>
	</a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
	<?php echo '
	<b>{{extension}}:</b> {{view.truncatedDescription}}<br/>
	{{#if callers }}
	<span class="monitor">{{callers.length}}</span><br/>
	{{/if}}
	'; ?>

</div>
<div style="float: right; border: black solid 0px;">
    <?php echo '{{view App.DroppableIconView icon="'; ?>
modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/queue.png<?php echo '" }}'; ?>

</div>
</script>


<script type="text/x-handlebars" data-template-name="conference">
<div style="float:left; border: black solid 0px;">
	<a class="pbxtooltip" href="#">
	<img src="modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/info.png"/>
	<div>
		<?php echo '
		{{extension}}: {{description}}<br/>
		{{#if callers}}
		';  echo $this->_tpl_vars['LBL_QUEUE_CALLERS'];  echo ':<br/>
		<ul>
		{{#each callers}}
		<li>{{CallerIDName}} &lt;{{CallerIDNum}}&gt;</li>
		{{/each}}
		</ul>
		{{else}}
		';  echo $this->_tpl_vars['LBL_QUEUE_NO_CALLERS'];  echo '
		{{/if}}
		'; ?>

	</div>
	</a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
	<?php echo '
	<b>{{extension}}:</b> {{view.truncatedDescription}}<br/>
	{{#if callers }}
	<span class="monitor">';  echo $this->_tpl_vars['LBL_CONF_PARTICIPANTS'];  echo ': {{callers.length}} - {{formatSince}}</span><br/>
	{{/if}}
	'; ?>

</div>
<div style="float: right; border: black solid 0px;">
    <?php echo '{{view App.DroppableIconView icon="'; ?>
modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/conference.png<?php echo '" }}'; ?>

</div>
</script>


<script type="text/x-handlebars" data-template-name="parkinglot">
<div style="float:left; border: black solid 0px;">
	<a class="pbxtooltip" href="#">
	<img src="modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/info.png"/>
	<div>
		<?php echo '
		{{extension}}
		'; ?>

	</div>
	</a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
	<?php echo '
	<b>';  echo $this->_tpl_vars['LBL_PARKED'];  echo ' ({{extension}})</b><br/>
	{{#if shortchannel }}
	<span class="monitor">{{shortchannel}}: {{formatTimeout}}</span><br/>
	{{/if}}
	'; ?>

</div>
<div style="float: right; border: black solid 0px;">
	<?php echo '{{view App.DroppableIconView icon="'; ?>
modules/<?php echo $this->_tpl_vars['module_name']; ?>
/images/parking.png<?php echo '" }}'; ?>

</div>
</script>


<script type="text/x-handlebars" data-template-name="editable-title">
<?php echo '
{{#if editing }}
{{view Ember.TextField valueBinding="description" }}
<button {{action "save" bubbles=false }}>';  echo $this->_tpl_vars['LBL_SAVE_NAME'];  echo '</button>
{{else}}
{{description}} -- {{length}} ext
<span class="paneledittitle" {{action "edit" bubbles=false }}>[';  echo $this->_tpl_vars['LBL_EDIT_NAME'];  echo ']</span>
{{/if}}
'; ?>

</script>

</div>
<script type="text/javascript">
var arrLang_main = <?php echo $this->_tpl_vars['ARRLANG_MAIN']; ?>
;
var var_init = <?php echo $this->_tpl_vars['VAR_INIT']; ?>

</script>