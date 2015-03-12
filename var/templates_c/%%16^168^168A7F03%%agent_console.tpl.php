<?php /* Smarty version 2.6.14, created on 2015-02-18 21:44:19
         compiled from /var/www/html/modules/agent_console/themes/default/agent_console.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', '/var/www/html/modules/agent_console/themes/default/agent_console.tpl', 112, false),array('modifier', 'escape', '/var/www/html/modules/agent_console/themes/default/agent_console.tpl', 124, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['LISTA_JQUERY_CSS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CURR_ITEM']):
?>
    <?php if ($this->_tpl_vars['CURR_ITEM'][0] == 'css'): ?>
<link rel="stylesheet" href='<?php echo $this->_tpl_vars['CURR_ITEM'][1]; ?>
' />
    <?php endif; ?>
    <?php if ($this->_tpl_vars['CURR_ITEM'][0] == 'js'): ?>
<script type="text/javascript" src='<?php echo $this->_tpl_vars['CURR_ITEM'][1]; ?>
'></script>
    <?php endif;  endforeach; endif; unset($_from); ?>

<div
    id="elastix-callcenter-info-message"
    class="ui-state-highlight ui-corner-all">
    <p>
        <span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
        <span id="elastix-callcenter-info-message-text"></span>
    </p>
</div>
<div
    id="elastix-callcenter-error-message"
    class="ui-state-error ui-corner-all">
    <p>
        <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
        <span id="elastix-callcenter-error-message-text"></span>
    </p>
</div>
<div id="elastix-callcenter-area-principal">
    <?php if (! $this->_tpl_vars['FRAMEWORK_TIENE_TITULO_MODULO']): ?>
    <div id="elastix-callcenter-titulo-consola" class="moduleTitle">&nbsp;<img src="<?php echo $this->_tpl_vars['icon']; ?>
" border="0" align="absmiddle" alt="" />&nbsp;<?php echo $this->_tpl_vars['title']; ?>
</div>
<?php endif; ?>    
		<div id="elastix-callcenter-estado-agente" class="<?php echo $this->_tpl_vars['CLASS_ESTADO_AGENTE_INICIAL']; ?>
">
	    <span style="margin-left: 8pt;" id="elastix-callcenter-estado-agente-texto"><?php echo $this->_tpl_vars['TEXTO_ESTADO_AGENTE_INICIAL']; ?>
</span>
        <div id="elastix-callcenter-cronometro"><?php echo $this->_tpl_vars['CRONOMETRO']; ?>
</div>    </div>    <div id="elastix-callcenter-wrap">
	    	    <div id="elastix-callcenter-controles">
	        <button id="btn_hangup" class="elastix-callcenter-boton-activo"><?php echo $this->_tpl_vars['BTN_COLGAR_LLAMADA']; ?>
</button>
	        <button id="btn_togglebreak" class="<?php echo $this->_tpl_vars['CLASS_BOTON_BREAK']; ?>
" ><?php echo $this->_tpl_vars['BTN_BREAK']; ?>
</button>
	        <button id="btn_transfer" class="elastix-callcenter-boton-activo" ><?php echo $this->_tpl_vars['BTN_TRANSFER']; ?>
</button>
<?php if ($this->_tpl_vars['BTN_VTIGERCRM']): ?>
	        <button id="btn_vtigercrm" class="elastix-callcenter-boton-activo"><?php echo $this->_tpl_vars['BTN_VTIGERCRM']; ?>
</button>
<?php endif; ?>
	        <button id="btn_logout" class="elastix-callcenter-boton-activo"><?php echo $this->_tpl_vars['BTN_FINALIZAR_LOGIN']; ?>
</button>
	    </div> 	    	    <div id="elastix-callcenter-contenido">
						<div 
			  id="elastix-callcenter-cejillas-contenido"
			  class="<?php if ($this->_tpl_vars['CALLINFO_CALLTYPE'] == ''): ?>elastix-callcenter-cejillas-contenido-barra-oculta<?php else: ?>elastix-callcenter-cejillas-contenido-barra-visible<?php endif; ?>">
			   <ul>
			       <li><a href="#elastix-callcenter-llamada-info"><?php echo $this->_tpl_vars['TAB_LLAMADA_INFO']; ?>
</a></li>
		           <li><a href="#elastix-callcenter-llamada-script"><?php echo $this->_tpl_vars['TAB_LLAMADA_SCRIPT']; ?>
</a></li>
		           <li><a href="#elastix-callcenter-llamada-form"><?php echo $this->_tpl_vars['TAB_LLAMADA_FORM']; ?>
</a></li>
			   </ul>
		       <div id="elastix-callcenter-llamada-info">
	<?php echo $this->_tpl_vars['CONTENIDO_LLAMADA_INFORMACION']; ?>
           
		       </div>
		       <div id="elastix-callcenter-llamada-script">
	<?php echo $this->_tpl_vars['CONTENIDO_LLAMADA_SCRIPT']; ?>
           
		       </div>
		       <div id="elastix-callcenter-llamada-form">
	<?php echo $this->_tpl_vars['CONTENIDO_LLAMADA_FORMULARIO']; ?>
           
		       </div>
			</div>	        			<div 
			  id="elastix-callcenter-barra-llamada-entrante" 
			  class="elastix-callcenter-barra-llamada ui-widget-header ui-rounded-all"
			  <?php if ($this->_tpl_vars['CALLINFO_CALLTYPE'] != 'incoming'): ?>style="display: none;"<?php endif; ?>>
		      <label for="llamada_entrante_contacto_telefono"><?php echo $this->_tpl_vars['LBL_CONTACTO_TELEFONO']; ?>
: </label>
		      <span id="llamada_entrante_contacto_telefono"><?php echo $this->_tpl_vars['TEXTO_CONTACTO_TELEFONO']; ?>
</span>
		      <label for="llamada_entrante_contacto_id"><?php echo $this->_tpl_vars['LBL_CONTACTO_SELECT']; ?>
: </label>
		      <select
		          name="llamada_entrante_contacto_id"
		          id="llamada_entrante_contacto_id"
		          class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
		          <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['LISTA_CONTACTOS']), $this);?>

		      </select>
		      <button id="btn_confirmar_contacto"><?php echo $this->_tpl_vars['BTN_CONFIRMAR_CONTACTO']; ?>
</button>
			</div>	        	        <div 
	          id="elastix-callcenter-barra-llamada-saliente" 
	          class="elastix-callcenter-barra-llamada ui-widget-header ui-rounded-all"
	          <?php if ($this->_tpl_vars['CALLINFO_CALLTYPE'] != 'outgoing'): ?>style="display: none;"<?php endif; ?>>
	          <label for="llamada_saliente_contacto_telefono"><?php echo $this->_tpl_vars['LBL_CONTACTO_TELEFONO']; ?>
: </label>
	          <span id="llamada_saliente_contacto_telefono"><?php echo $this->_tpl_vars['TEXTO_CONTACTO_TELEFONO']; ?>
</span>
	          <label for="llamada_saliente_nombres"><?php echo $this->_tpl_vars['LBL_CONTACTO_NOMBRES']; ?>
: </label>
	          <span id="llamada_saliente_nombres"><?php echo ((is_array($_tmp=$this->_tpl_vars['TEXTO_CONTACTO_NOMBRES'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
	          <button id="btn_agendar_llamada"><?php echo $this->_tpl_vars['BTN_AGENDAR_LLAMADA']; ?>
</button>
	        </div>		</div>	</div>
</div><div id="elastix-callcenter-seleccion-break" title="<?php echo $this->_tpl_vars['TITLE_BREAK_DIALOG']; ?>
">
    <form>
        <select
            name="break_select"
            id="break_select"
            class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"
            style="width: 100%"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['LISTA_BREAKS']), $this);?>

        </select>
    </form>
</div><div id="elastix-callcenter-seleccion-transfer" title="<?php echo $this->_tpl_vars['TITLE_TRANSFER_DIALOG']; ?>
">
    <form>
        <div style="display: table; width: 100%">
            <div style="display: table-row;">
	        <input 
	            name="transfer_extension"
	            id="transfer_extension"
	            class="ui-widget-content ui-corner-all" 
	            style="width: 100%" />
	        </div>
	        <div align="center" id="transfer_type_radio" style="display: table-row; width: 100%">
	            <input type="radio" id="transfer_type_blind" name="transfer_type" value="blind" checked="checked"/><label for="transfer_type_blind"><?php echo $this->_tpl_vars['LBL_TRANSFER_BLIND']; ?>
</label>
	            <input type="radio" id="transfer_type_attended" name="transfer_type" value="attended" /><label for="transfer_type_attended"><?php echo $this->_tpl_vars['LBL_TRANSFER_ATTENDED']; ?>
</label>
	        </div>
        </div>
    </form>
</div><div id="elastix-callcenter-agendar-llamada" title="<?php echo $this->_tpl_vars['TITLE_SCHEDULE_CALL']; ?>
">
	<div
	    id="elastix-callcenter-agendar-llamada-error-message"
	    class="ui-state-error ui-corner-all">
	    <p>
	        <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
	        <span id="elastix-callcenter-agendar-llamada-error-message-text"></span>
	    </p>
	</div>
    <form>
        <div style="display: table; width: 100%">
	        <div style="display: table-row;">
	            <label style="display: table-cell;" for="schedule_new_phone"><?php echo $this->_tpl_vars['LBL_CONTACTO_TELEFONO']; ?>
:&nbsp;</label>
	            <input 
		            name="schedule_new_phone"
		            id="schedule_new_phone"
		            class="ui-widget-content ui-corner-all"
		            maxlength="64"
		            style="display: table-cell; width: 100%;"
		            value="<?php echo ((is_array($_tmp=$this->_tpl_vars['TEXTO_CONTACTO_TELEFONO'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
	        </div>
	        <div style="display: table-row;">
	            <label style="display: table-cell;" for="schedule_new_name"><?php echo $this->_tpl_vars['LBL_CONTACTO_NOMBRES']; ?>
:&nbsp;</label>
	            <input 
		            name="schedule_new_name"
		            id="schedule_new_name"
		            class="ui-widget-content ui-corner-all"
		            maxlength="250"
		            style="display: table-cell; width: 100%;"
		            value="<?php echo ((is_array($_tmp=$this->_tpl_vars['TEXTO_CONTACTO_NOMBRES'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
	        </div>
        </div>
        <hr />
        <div align="center" id="schedule_radio" style="width: 100%">
            <input type="radio" id="schedule_type_campaign_end" name="schedule_type" value="campaign_end" checked="checked"/><label for="schedule_type_campaign_end"><?php echo $this->_tpl_vars['LBL_SCHEDULE_CAMPAIGN_END']; ?>
</label>
            <input type="radio" id="schedule_type_bydate" name="schedule_type" value="bydate" /><label for="schedule_type_bydate"><?php echo $this->_tpl_vars['LBL_SCHEDULE_BYDATE']; ?>
</label>
        </div>
        <br/>
        <div id="schedule_date" style="display: table; width: 100%">
            <div style="display: table-row">
	            <div style="position: relative; display: table-cell;">
		            <label for="schedule_date_start"><?php echo $this->_tpl_vars['LBL_SCHEDULE_DATE_START']; ?>
:&nbsp;</label>
		            <input type="text" class="ui-widget-content ui-corner-all" name="schedule_date_start" id="schedule_date_start" />
	            </div>
	            <div style="position: relative; display: table-cell;">
		            <label for="schedule_date_end"><?php echo $this->_tpl_vars['LBL_SCHEDULE_DATE_END']; ?>
:&nbsp;</label>
		            <input type="text" class="ui-widget-content ui-corner-all" name="schedule_date_end" id="schedule_date_end" />
	            </div>
            </div>
            <div style="display: table-row">
	            <div style="position: relative; display: table-cell;">
	                <label><?php echo $this->_tpl_vars['LBL_SCHEDULE_TIME_START']; ?>
:&nbsp;</label><select
			            name="schedule_time_start_hh"
			            id="schedule_time_start_hh"
			            class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['SCHEDULE_TIME_HH']), $this);?>

	                </select>:<select
			            name="schedule_time_start_mm"
			            id="schedule_time_start_mm"
			            class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['SCHEDULE_TIME_MM']), $this);?>

	                </select>
	            </div>
	            <div style="position: relative; display: table-cell;">
	                <label><?php echo $this->_tpl_vars['LBL_SCHEDULE_TIME_END']; ?>
:&nbsp;</label><select
	                    name="schedule_time_end_hh"
	                    id="schedule_time_end_hh"
	                    class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['SCHEDULE_TIME_HH']), $this);?>

	                </select>:<select
	                    name="schedule_time_end_mm"
	                    id="schedule_time_end_mm"
	                    class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['SCHEDULE_TIME_MM']), $this);?>

	                </select>
	            </div>
            </div>
            <input type="checkbox" id="schedule_same_agent" name="schedule_same_agent" /><label for="schedule_same_agent"><?php echo $this->_tpl_vars['LBL_SCHEDULE_SAME_AGENT']; ?>
</label>
        </div>
    </form>
</div>
<?php echo '
<script type="text/javascript">
// Aplicar temas de jQueryUI a diversos elementos
$(function() {
'; ?>

    apply_ui_styles(<?php echo $this->_tpl_vars['APPLY_UI_STYLES']; ?>
);
    initialize_client_state(<?php echo $this->_tpl_vars['INITIAL_CLIENT_STATE']; ?>
);
<?php echo '
});
</script>
'; ?>
