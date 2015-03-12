<?php /* Smarty version 2.6.14, created on 2015-02-18 20:47:51
         compiled from _common/_shortcut.tpl */ ?>
<div id='neo-bookmarkID' class='neo-historybox-tabon' <?php if (! $this->_tpl_vars['SHORTCUT_BOOKMARKS']): ?>style='display: none'<?php endif; ?>><?php echo $this->_tpl_vars['SHORTCUT_BOOKMARKS_LABEL']; ?>
</div>
<?php $_from = $this->_tpl_vars['SHORTCUT_BOOKMARKS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['shortcut'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['shortcut']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['shortcut']):
        $this->_foreach['shortcut']['iteration']++;
?>
<div class=<?php if (($this->_foreach['shortcut']['iteration'] == $this->_foreach['shortcut']['total'])): ?>'neo-historybox-tabmid'<?php else: ?>'neo-historybox-tab'<?php endif; ?> id='menu<?php echo $this->_tpl_vars['shortcut']['id_menu']; ?>
' >
    <a href='index.php?menu=<?php echo $this->_tpl_vars['shortcut']['namemenu']; ?>
'><?php echo $this->_tpl_vars['shortcut']['name']; ?>
</a>
    <div class='neo-bookmarks-equis neo-display-none' onclick='deleteBookmarkByEquis(this);'></div>
</div>
<?php endforeach; endif; unset($_from); ?>
<div id='neo-historyID' class='neo-historybox-tabon'><?php echo $this->_tpl_vars['SHORTCUT_HISTORY_LABEL']; ?>
</div>
<?php $_from = $this->_tpl_vars['SHORTCUT_HISTORY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['shortcut']):
?>
<div class='neo-historybox-tab'><a href='index.php?menu=<?php echo $this->_tpl_vars['shortcut']['namemenu']; ?>
'><?php echo $this->_tpl_vars['shortcut']['name']; ?>
</a></div>
<?php endforeach; endif; unset($_from); ?>