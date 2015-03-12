<?php /* Smarty version 2.6.14, created on 2015-02-18 21:44:27
         compiled from /var/www/html/modules/agent_console/themes/default/agent_console_formulario.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/var/www/html/modules/agent_console/themes/default/agent_console_formulario.tpl', 12, false),)), $this); ?>
<div id="elastix-callcenter-cejillas-formulario">
   <ul>
<?php $_from = $this->_tpl_vars['FORMS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ID_FORM'] => $this->_tpl_vars['FORM']):
?>   
       <li><a href="#elastix-callcenter-formulario-<?php echo $this->_tpl_vars['ID_FORM']; ?>
"><?php echo $this->_tpl_vars['FORM']['name']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>       
   </ul>
<?php $_from = $this->_tpl_vars['FORMS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ID_FORM'] => $this->_tpl_vars['FORM']):
?>   
   <div id="elastix-callcenter-formulario-<?php echo $this->_tpl_vars['ID_FORM']; ?>
">
    <table border="0" cellpadding="0">
            <tr>
                <th colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['FORM']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</th>
            </tr>
<?php $_from = $this->_tpl_vars['FORM']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FIELD']):
?>
            <tr>
<?php if ($this->_tpl_vars['FIELD']['type'] != 'LABEL'): ?>
                <td><label><?php echo ((is_array($_tmp=$this->_tpl_vars['FIELD']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
: </label></td>
<?php endif; ?>                
                <td <?php if ($this->_tpl_vars['FIELD']['type'] == 'LABEL'): ?>colspan="2"<?php endif; ?>>
<?php if ($this->_tpl_vars['FIELD']['type'] == 'LIST'): ?>
<select
    name="field-<?php echo $this->_tpl_vars['ID_FORM']; ?>
-<?php echo $this->_tpl_vars['FIELD']['id']; ?>
"
    id="field-<?php echo $this->_tpl_vars['ID_FORM']; ?>
-<?php echo $this->_tpl_vars['FIELD']['id']; ?>
"
    class="elastix-callcenter-field ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
<?php $_from = $this->_tpl_vars['FIELD']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['OPTION']):
?>
    <option <?php if (( $this->_tpl_vars['FIELD']['current_value'] == $this->_tpl_vars['OPTION'] ) || ( $this->_tpl_vars['FIELD']['current_value'] == '' && $this->_tpl_vars['FIELD']['default_value'] == $this->_tpl_vars['OPTION'] )): ?>selected="selected"<?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['OPTION'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['OPTION'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
<?php elseif ($this->_tpl_vars['FIELD']['type'] == 'DATE'): ?>
<input 
    type="text"
    name="field-<?php echo $this->_tpl_vars['ID_FORM']; ?>
-<?php echo $this->_tpl_vars['FIELD']['id']; ?>
"
    id="field-<?php echo $this->_tpl_vars['ID_FORM']; ?>
-<?php echo $this->_tpl_vars['FIELD']['id']; ?>
"
    class="elastix-callcenter-field elastix-callcenter-field-date ui-widget-content ui-corner-all"
    value="<?php if ($this->_tpl_vars['FIELD']['current_value'] == ''):  echo ((is_array($_tmp=$this->_tpl_vars['FIELD']['default_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  else:  echo ((is_array($_tmp=$this->_tpl_vars['FIELD']['current_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  endif; ?>" />
<?php elseif ($this->_tpl_vars['FIELD']['type'] == 'LABEL'): ?>
                <label><?php echo ((is_array($_tmp=$this->_tpl_vars['FIELD']['label'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</label>
<?php elseif ($this->_tpl_vars['FIELD']['type'] == 'TEXTAREA'): ?>
<textarea
    name="field-<?php echo $this->_tpl_vars['ID_FORM']; ?>
-<?php echo $this->_tpl_vars['FIELD']['id']; ?>
"
    id="field-<?php echo $this->_tpl_vars['ID_FORM']; ?>
-<?php echo $this->_tpl_vars['FIELD']['id']; ?>
"
    rows="3" cols="50"
    maxlength="<?php echo $this->_tpl_vars['FIELD']['maxsize']; ?>
"
    class="elastix-callcenter-field ui-widget-content ui-corner-all"><?php if ($this->_tpl_vars['FIELD']['current_value'] == ''):  echo ((is_array($_tmp=$this->_tpl_vars['FIELD']['default_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  else:  echo ((is_array($_tmp=$this->_tpl_vars['FIELD']['current_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  endif; ?></textarea>
<?php else: ?>
<input 
    type="text"
    name="field-<?php echo $this->_tpl_vars['ID_FORM']; ?>
-<?php echo $this->_tpl_vars['FIELD']['id']; ?>
"
    id="field-<?php echo $this->_tpl_vars['ID_FORM']; ?>
-<?php echo $this->_tpl_vars['FIELD']['id']; ?>
"
    size="<?php if ($this->_tpl_vars['FIELD']['maxsize'] > 64): ?>64<?php else:  echo $this->_tpl_vars['FIELD']['maxsize'];  endif; ?>"
    maxlength="<?php echo $this->_tpl_vars['FIELD']['maxsize']; ?>
"
    class="elastix-callcenter-field ui-widget-content ui-corner-all"
    value="<?php if ($this->_tpl_vars['FIELD']['current_value'] == ''):  echo ((is_array($_tmp=$this->_tpl_vars['FIELD']['default_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  else:  echo ((is_array($_tmp=$this->_tpl_vars['FIELD']['current_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html'));  endif; ?>" />
<?php endif; ?>
                </td>
            </tr>
<?php endforeach; endif; unset($_from); ?>        
    </table>
   </div>
<?php endforeach; endif; unset($_from); ?>       
</div><button id="btn_guardar_formularios"><?php echo $this->_tpl_vars['BTN_GUARDAR_FORMULARIOS']; ?>
</button>