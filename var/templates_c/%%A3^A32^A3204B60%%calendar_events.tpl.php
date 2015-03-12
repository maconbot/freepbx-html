<?php /* Smarty version 2.6.14, created on 2015-02-19 03:20:46
         compiled from /var/www/html/modules/dashboard/applets/Calendar/tpl/calendar_events.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/var/www/html/modules/dashboard/applets/Calendar/tpl/calendar_events.tpl', 2, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['EVENTOS_DIAS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['evento']):
?>
<a href='?menu=calendar&amp;action=display&amp;id=<?php echo $this->_tpl_vars['evento']['id']; ?>
&amp;event_date=<?php echo $this->_tpl_vars['evento']['dateshort']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['evento']['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['tag_date']; ?>
: <?php echo $this->_tpl_vars['evento']['date']; ?>
 - <?php echo $this->_tpl_vars['tag_call']; ?>
: <?php echo $this->_tpl_vars['evento']['call']; ?>
<br/>
<?php endforeach; else: ?>
<p><?php echo $this->_tpl_vars['NO_EVENTOS']; ?>
</p>
<?php endif; unset($_from); ?>