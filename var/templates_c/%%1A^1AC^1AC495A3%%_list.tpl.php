<?php /* Smarty version 2.6.14, created on 2015-02-18 20:49:03
         compiled from _common/_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', '_common/_list.tpl', 36, false),)), $this); ?>
<form id="idformgrid" method="POST" style="margin-bottom:0;" action="<?php echo $this->_tpl_vars['url']; ?>
">
    <div class="neo-table-header-row">
        <?php $_from = $this->_tpl_vars['arrActions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['actions'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['actions']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['accion']):
        $this->_foreach['actions']['iteration']++;
?>
            <?php if ($this->_tpl_vars['accion']['type'] == 'link'): ?>
                <a href="<?php echo $this->_tpl_vars['accion']['task']; ?>
" class="neo-table-action" <?php if (! empty ( $this->_tpl_vars['accion']['onclick'] )): ?> onclick="<?php echo $this->_tpl_vars['accion']['onclick']; ?>
" <?php endif; ?> >
                    <div class="neo-table-header-row-filter">
                        <?php if (! empty ( $this->_tpl_vars['accion']['icon'] )): ?>
                            <img border="0" src="<?php echo $this->_tpl_vars['accion']['icon']; ?>
" align="absmiddle"  />&nbsp;
                        <?php endif; ?>
                        <?php echo $this->_tpl_vars['accion']['alt']; ?>

                    </div>
                </a>
            <?php elseif ($this->_tpl_vars['accion']['type'] == 'button'): ?>
                <div class="neo-table-header-row-filter">
                    <?php if (! empty ( $this->_tpl_vars['accion']['icon'] )): ?>
                        <img border="0" src="<?php echo $this->_tpl_vars['accion']['icon']; ?>
" align="absmiddle"  />
                    <?php endif; ?>
                    <input type="button" name="<?php echo $this->_tpl_vars['accion']['task']; ?>
" value="<?php echo $this->_tpl_vars['accion']['alt']; ?>
" <?php if (! empty ( $this->_tpl_vars['accion']['onclick'] )): ?> onclick="<?php echo $this->_tpl_vars['accion']['onclick']; ?>
" <?php endif; ?> class="neo-table-action" />
                </div>
            <?php elseif ($this->_tpl_vars['accion']['type'] == 'submit'): ?>
                <div class="neo-table-header-row-filter">
                    <?php if (! empty ( $this->_tpl_vars['accion']['icon'] )): ?>
                        <input type="image" src="<?php echo $this->_tpl_vars['accion']['icon']; ?>
" align="absmiddle" name="<?php echo $this->_tpl_vars['accion']['task']; ?>
" value="<?php echo $this->_tpl_vars['accion']['alt']; ?>
" <?php if (! empty ( $this->_tpl_vars['accion']['onclick'] )): ?> onclick="<?php echo $this->_tpl_vars['accion']['onclick']; ?>
" <?php endif; ?> class="neo-table-action" />
                    <?php endif; ?>
                    <input type="submit" name="<?php echo $this->_tpl_vars['accion']['task']; ?>
" value="<?php echo $this->_tpl_vars['accion']['alt']; ?>
" <?php if (! empty ( $this->_tpl_vars['accion']['onclick'] )): ?> onclick="<?php echo $this->_tpl_vars['accion']['onclick']; ?>
" <?php endif; ?> class="neo-table-action" />
                </div>
            <?php elseif ($this->_tpl_vars['accion']['type'] == 'text'): ?>
                <div class="neo-table-header-row-filter" style="cursor:default">
                    <input type="text"   id="<?php echo $this->_tpl_vars['accion']['name']; ?>
" name="<?php echo $this->_tpl_vars['accion']['name']; ?>
" value="<?php echo $this->_tpl_vars['accion']['value']; ?>
" <?php if (! empty ( $this->_tpl_vars['accion']['onkeypress'] )): ?> onkeypress="<?php echo $this->_tpl_vars['accion']['onkeypress']; ?>
" <?php endif; ?> style="height:22px" />
                    <input type="submit" name="<?php echo $this->_tpl_vars['accion']['task']; ?>
" value="<?php echo $this->_tpl_vars['accion']['alt']; ?>
" class="neo-table-action" />
                </div>
            <?php elseif ($this->_tpl_vars['accion']['type'] == 'combo'): ?>
                <div class="neo-table-header-row-filter" style="cursor:default">
                    <select name="<?php echo $this->_tpl_vars['accion']['name']; ?>
" id="<?php echo $this->_tpl_vars['accion']['name']; ?>
" <?php if (! empty ( $this->_tpl_vars['accion']['onchange'] )): ?> onchange="<?php echo $this->_tpl_vars['accion']['onchange']; ?>
" <?php endif; ?>>
                        <?php if (! empty ( $this->_tpl_vars['accion']['selected'] )): ?>
                            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['accion']['arrOptions'],'selected' => $this->_tpl_vars['accion']['selected']), $this);?>

                        <?php else: ?>
                            <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['accion']['arrOptions']), $this);?>

                        <?php endif; ?>
                    </select>
                    <?php if (! empty ( $this->_tpl_vars['accion']['task'] )): ?>
                        <input type="submit" name="<?php echo $this->_tpl_vars['accion']['task']; ?>
" value="<?php echo $this->_tpl_vars['accion']['alt']; ?>
" class="neo-table-action" />
                    <?php endif; ?>
                </div>
            <?php elseif ($this->_tpl_vars['accion']['type'] == 'html'): ?>
                <div class="neo-table-header-row-filter">
                    <?php echo $this->_tpl_vars['accion']['html']; ?>

                </div>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>

        <?php if (! empty ( $this->_tpl_vars['contentFilter'] )): ?>
            <div class="neo-table-header-row-filter" id="neo-tabla-header-row-filter-1">
                <?php if ($this->_tpl_vars['AS_OPTION'] == 0): ?> <img src="images/filter.png" align="absmiddle" /> <?php endif; ?>
                <label id="neo-table-label-filter" style="cursor:pointer"><?php if ($this->_tpl_vars['AS_OPTION']): ?> <?php echo $this->_tpl_vars['MORE_OPTIONS']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['FILTER_GRID_SHOW']; ?>
 <?php endif; ?></label>
                <img src="images/icon_arrowdown2.png" align="absmiddle" id="neo-tabla-img-arrow" />
            </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['enableExport'] == true): ?>
            <div class="neo-table-header-row-filter" id="export_button" role="button" act="10" tabindex="0" class="exportButton exportShadow" aria-expanded="false" aria-haspopup="true" aria-activedescendant="" >
                <img src="images/download2.png" align="absmiddle" /> <?php echo $this->_tpl_vars['DOWNLOAD_GRID']; ?>
 <img src="images/icon_arrowdown2.png" align="absmiddle" />
            </div>
            <div id="subMenuExport" class="subMenu neo-display-none" role="menu" aria-haspopup="true" aria-activedescendant="">
                 <div class="items">
                    <a href="<?php echo $this->_tpl_vars['url']; ?>
&exportcsv=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="CSV" aria-disabled="false">
			    <div>
				<img src="images/csv.gif" border="0" align="absmiddle" title="CSV" />&nbsp;&nbsp;CSV
			    </div>
			</div>
		    </a>
		    <a href="<?php echo $this->_tpl_vars['url']; ?>
&exportspreadsheet=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="Spread_Sheet" aria-disabled="false">
			    <div>
				<img src="images/spreadsheet.gif" border="0" align="absmiddle" title="SPREAD SHEET" />&nbsp;&nbsp;Spreadsheet
			    </div>
			</div>
		    </a>
		    <a href="<?php echo $this->_tpl_vars['url']; ?>
&exportpdf=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="PDF" aria-disabled="false">
			    <div>
				<img src="images/pdf.png" border="0" align="absmiddle" title="PDF" />&nbsp;&nbsp;PDF
			    </div>
			</div>
		    </a>
                </div>
            </div>
        <?php endif; ?>

        <div class="neo-table-header-row-navigation">
            <?php if ($this->_tpl_vars['pagingShow']): ?>
                <?php if ($this->_tpl_vars['start'] <= 1): ?>
                    <img src='images/table-arrow-first.gif' alt='<?php echo $this->_tpl_vars['lblStart']; ?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                    <img src='images/table-arrow-previous.gif' alt='<?php echo $this->_tpl_vars['lblPrevious']; ?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                <?php else: ?>
                    <a href="<?php echo $this->_tpl_vars['url']; ?>
&nav=start&start=<?php echo $this->_tpl_vars['start']; ?>
"><img src='images/table-arrow-first.gif' alt='<?php echo $this->_tpl_vars['lblStart']; ?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer;" /></a>
                    <a href="<?php echo $this->_tpl_vars['url']; ?>
&nav=previous&start=<?php echo $this->_tpl_vars['start']; ?>
"><img src='images/table-arrow-previous.gif' alt='<?php echo $this->_tpl_vars['lblPrevious']; ?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer;" /></a>
                <?php endif; ?>
                &nbsp;<?php echo $this->_tpl_vars['lblPage']; ?>
&nbsp;
                <input type="text"  value="<?php echo $this->_tpl_vars['currentPage']; ?>
" size="2" align="absmiddle" name="page" id="pageup" />&nbsp;<?php echo $this->_tpl_vars['lblof']; ?>
&nbsp;<?php echo $this->_tpl_vars['numPage']; ?>

                <input type="hidden" value="bypage" name="nav" />
                <?php if ($this->_tpl_vars['end'] == $this->_tpl_vars['total']): ?>
                    <img src='images/table-arrow-next.gif' alt='<?php echo $this->_tpl_vars['lblNext']; ?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                    <img src='images/table-arrow-last.gif' alt='<?php echo $this->_tpl_vars['lblEnd']; ?>
' align='absmiddle' border='0' width='16' height='16' style="opacity: 0.3;" />
                <?php else: ?>
                    <a href="<?php echo $this->_tpl_vars['url']; ?>
&nav=next&start=<?php echo $this->_tpl_vars['start']; ?>
"><img src='images/table-arrow-next.gif' alt='<?php echo $this->_tpl_vars['lblNext']; ?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer;" /></a>
                    <a href="<?php echo $this->_tpl_vars['url']; ?>
&nav=end&start=<?php echo $this->_tpl_vars['start']; ?>
"><img src='images/table-arrow-last.gif' alt='<?php echo $this->_tpl_vars['lblEnd']; ?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer;" /></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php if (! empty ( $this->_tpl_vars['contentFilter'] )): ?>
        <div id="neo-table-header-filterrow" class="neo-display-none">
            <?php echo $this->_tpl_vars['contentFilter']; ?>

        </div>
    <?php endif; ?>

    <?php if (! empty ( $this->_tpl_vars['arrFiltersControl'] )): ?>
        <div class="neo-table-filter-controls">
            <?php $_from = $this->_tpl_vars['arrFiltersControl']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['filtersctrl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filtersctrl']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['filterc']):
        $this->_foreach['filtersctrl']['iteration']++;
?>
                <div class="neo-filter-control"><?php echo $this->_tpl_vars['filterc']['msg']; ?>
&nbsp;
				<?php if ($this->_tpl_vars['filterc']['defaultFilter'] == no): ?>
					<a href="<?php echo $this->_tpl_vars['url']; ?>
&name_delete_filters=<?php echo $this->_tpl_vars['filterc']['filters']; ?>
"><img src='themes/elastixneo/images/bookmarks_equis.png' width="18" height="16" align='absmiddle' border="0" /></a>
				<?php endif; ?>
				</div>
            <?php endforeach; endif; unset($_from); ?>
        </div>
    <?php endif; ?>

    <div id="neo-table-ref-table">
        <table align="center" cellspacing="0" cellpadding="0" width="100%" id="neo-table1" >
            <tr class="neo-table-title-row">
                <?php unset($this->_sections['columnNum']);
$this->_sections['columnNum']['name'] = 'columnNum';
$this->_sections['columnNum']['loop'] = is_array($_loop=$this->_tpl_vars['numColumns']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['columnNum']['start'] = (int)0;
$this->_sections['columnNum']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['columnNum']['show'] = true;
$this->_sections['columnNum']['max'] = $this->_sections['columnNum']['loop'];
if ($this->_sections['columnNum']['start'] < 0)
    $this->_sections['columnNum']['start'] = max($this->_sections['columnNum']['step'] > 0 ? 0 : -1, $this->_sections['columnNum']['loop'] + $this->_sections['columnNum']['start']);
else
    $this->_sections['columnNum']['start'] = min($this->_sections['columnNum']['start'], $this->_sections['columnNum']['step'] > 0 ? $this->_sections['columnNum']['loop'] : $this->_sections['columnNum']['loop']-1);
if ($this->_sections['columnNum']['show']) {
    $this->_sections['columnNum']['total'] = min(ceil(($this->_sections['columnNum']['step'] > 0 ? $this->_sections['columnNum']['loop'] - $this->_sections['columnNum']['start'] : $this->_sections['columnNum']['start']+1)/abs($this->_sections['columnNum']['step'])), $this->_sections['columnNum']['max']);
    if ($this->_sections['columnNum']['total'] == 0)
        $this->_sections['columnNum']['show'] = false;
} else
    $this->_sections['columnNum']['total'] = 0;
if ($this->_sections['columnNum']['show']):

            for ($this->_sections['columnNum']['index'] = $this->_sections['columnNum']['start'], $this->_sections['columnNum']['iteration'] = 1;
                 $this->_sections['columnNum']['iteration'] <= $this->_sections['columnNum']['total'];
                 $this->_sections['columnNum']['index'] += $this->_sections['columnNum']['step'], $this->_sections['columnNum']['iteration']++):
$this->_sections['columnNum']['rownum'] = $this->_sections['columnNum']['iteration'];
$this->_sections['columnNum']['index_prev'] = $this->_sections['columnNum']['index'] - $this->_sections['columnNum']['step'];
$this->_sections['columnNum']['index_next'] = $this->_sections['columnNum']['index'] + $this->_sections['columnNum']['step'];
$this->_sections['columnNum']['first']      = ($this->_sections['columnNum']['iteration'] == 1);
$this->_sections['columnNum']['last']       = ($this->_sections['columnNum']['iteration'] == $this->_sections['columnNum']['total']);
?>
                    <?php if ($this->_sections['columnNum']['first']): ?>
                        <td class="neo-table-title-row" style="background:none;"><?php echo $this->_tpl_vars['header'][$this->_sections['columnNum']['index']]['name']; ?>
&nbsp;</td>
                    <?php else: ?>
                        <td class="neo-table-title-row"><?php echo $this->_tpl_vars['header'][$this->_sections['columnNum']['index']]['name']; ?>
&nbsp;</td>
                    <?php endif; ?>
                <?php endfor; endif; ?>
            </tr>
            <?php if ($this->_tpl_vars['numData'] > 0): ?>
                <?php $_from = $this->_tpl_vars['arrData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['filas'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filas']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['data']):
        $this->_foreach['filas']['iteration']++;
?>
                <?php if ($this->_tpl_vars['data']['ctrl'] == 'separator_line'): ?>
                    <tr class="neo-table-data-row">
                        <?php if ($this->_tpl_vars['data']['start'] > 0): ?>
                            <td class="neo-table-data-row" colspan="<?php echo $this->_tpl_vars['data']['start']; ?>
"></td>
                        <?php endif; ?>
                        <?php $this->assign('data_start', ($this->_tpl_vars['data']['start'])); ?>
                        <td class="neo-table-data-row" colspan="<?php echo $this->_tpl_vars['numColumns']-$this->_tpl_vars['data']['start']; ?>
" style='background-color:#AAAAAA;height:1px;'></td>
                    </tr>
                <?php else: ?>
                    <tr class="neo-table-data-row">
                        <?php if (($this->_foreach['filas']['iteration'] == $this->_foreach['filas']['total'])): ?>
                            <?php unset($this->_sections['columnNum']);
$this->_sections['columnNum']['name'] = 'columnNum';
$this->_sections['columnNum']['loop'] = is_array($_loop=$this->_tpl_vars['numColumns']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['columnNum']['start'] = (int)0;
$this->_sections['columnNum']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['columnNum']['show'] = true;
$this->_sections['columnNum']['max'] = $this->_sections['columnNum']['loop'];
if ($this->_sections['columnNum']['start'] < 0)
    $this->_sections['columnNum']['start'] = max($this->_sections['columnNum']['step'] > 0 ? 0 : -1, $this->_sections['columnNum']['loop'] + $this->_sections['columnNum']['start']);
else
    $this->_sections['columnNum']['start'] = min($this->_sections['columnNum']['start'], $this->_sections['columnNum']['step'] > 0 ? $this->_sections['columnNum']['loop'] : $this->_sections['columnNum']['loop']-1);
if ($this->_sections['columnNum']['show']) {
    $this->_sections['columnNum']['total'] = min(ceil(($this->_sections['columnNum']['step'] > 0 ? $this->_sections['columnNum']['loop'] - $this->_sections['columnNum']['start'] : $this->_sections['columnNum']['start']+1)/abs($this->_sections['columnNum']['step'])), $this->_sections['columnNum']['max']);
    if ($this->_sections['columnNum']['total'] == 0)
        $this->_sections['columnNum']['show'] = false;
} else
    $this->_sections['columnNum']['total'] = 0;
if ($this->_sections['columnNum']['show']):

            for ($this->_sections['columnNum']['index'] = $this->_sections['columnNum']['start'], $this->_sections['columnNum']['iteration'] = 1;
                 $this->_sections['columnNum']['iteration'] <= $this->_sections['columnNum']['total'];
                 $this->_sections['columnNum']['index'] += $this->_sections['columnNum']['step'], $this->_sections['columnNum']['iteration']++):
$this->_sections['columnNum']['rownum'] = $this->_sections['columnNum']['iteration'];
$this->_sections['columnNum']['index_prev'] = $this->_sections['columnNum']['index'] - $this->_sections['columnNum']['step'];
$this->_sections['columnNum']['index_next'] = $this->_sections['columnNum']['index'] + $this->_sections['columnNum']['step'];
$this->_sections['columnNum']['first']      = ($this->_sections['columnNum']['iteration'] == 1);
$this->_sections['columnNum']['last']       = ($this->_sections['columnNum']['iteration'] == $this->_sections['columnNum']['total']);
?>
                                <td class="neo-table-data-row table_data_last_row"><?php if ($this->_tpl_vars['data'][$this->_sections['columnNum']['index']] == ''): ?>&nbsp;<?php endif;  echo $this->_tpl_vars['data'][$this->_sections['columnNum']['index']]; ?>
</td>
                            <?php endfor; endif; ?>
                        <?php else: ?>
                            <?php unset($this->_sections['columnNum']);
$this->_sections['columnNum']['name'] = 'columnNum';
$this->_sections['columnNum']['loop'] = is_array($_loop=$this->_tpl_vars['numColumns']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['columnNum']['start'] = (int)0;
$this->_sections['columnNum']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['columnNum']['show'] = true;
$this->_sections['columnNum']['max'] = $this->_sections['columnNum']['loop'];
if ($this->_sections['columnNum']['start'] < 0)
    $this->_sections['columnNum']['start'] = max($this->_sections['columnNum']['step'] > 0 ? 0 : -1, $this->_sections['columnNum']['loop'] + $this->_sections['columnNum']['start']);
else
    $this->_sections['columnNum']['start'] = min($this->_sections['columnNum']['start'], $this->_sections['columnNum']['step'] > 0 ? $this->_sections['columnNum']['loop'] : $this->_sections['columnNum']['loop']-1);
if ($this->_sections['columnNum']['show']) {
    $this->_sections['columnNum']['total'] = min(ceil(($this->_sections['columnNum']['step'] > 0 ? $this->_sections['columnNum']['loop'] - $this->_sections['columnNum']['start'] : $this->_sections['columnNum']['start']+1)/abs($this->_sections['columnNum']['step'])), $this->_sections['columnNum']['max']);
    if ($this->_sections['columnNum']['total'] == 0)
        $this->_sections['columnNum']['show'] = false;
} else
    $this->_sections['columnNum']['total'] = 0;
if ($this->_sections['columnNum']['show']):

            for ($this->_sections['columnNum']['index'] = $this->_sections['columnNum']['start'], $this->_sections['columnNum']['iteration'] = 1;
                 $this->_sections['columnNum']['iteration'] <= $this->_sections['columnNum']['total'];
                 $this->_sections['columnNum']['index'] += $this->_sections['columnNum']['step'], $this->_sections['columnNum']['iteration']++):
$this->_sections['columnNum']['rownum'] = $this->_sections['columnNum']['iteration'];
$this->_sections['columnNum']['index_prev'] = $this->_sections['columnNum']['index'] - $this->_sections['columnNum']['step'];
$this->_sections['columnNum']['index_next'] = $this->_sections['columnNum']['index'] + $this->_sections['columnNum']['step'];
$this->_sections['columnNum']['first']      = ($this->_sections['columnNum']['iteration'] == 1);
$this->_sections['columnNum']['last']       = ($this->_sections['columnNum']['iteration'] == $this->_sections['columnNum']['total']);
?>
                                <td class="neo-table-data-row table_data"><?php if ($this->_tpl_vars['data'][$this->_sections['columnNum']['index']] == ''): ?>&nbsp;<?php endif;  echo $this->_tpl_vars['data'][$this->_sections['columnNum']['index']]; ?>
</td>
                            <?php endfor; endif; ?>
                        <?php endif; ?>
                    </tr>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            <?php else: ?>
                <tr class="neo-table-data-row">
                    <td class="neo-table-data-row table_data" colspan="<?php echo $this->_tpl_vars['numColumns']; ?>
" align="center"><?php echo $this->_tpl_vars['NO_DATA_FOUND']; ?>
</td>
                </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['numData'] > 3): ?>
                <tr class="neo-table-title-row">
                    <?php unset($this->_sections['columnNum']);
$this->_sections['columnNum']['name'] = 'columnNum';
$this->_sections['columnNum']['loop'] = is_array($_loop=$this->_tpl_vars['numColumns']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['columnNum']['start'] = (int)0;
$this->_sections['columnNum']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['columnNum']['show'] = true;
$this->_sections['columnNum']['max'] = $this->_sections['columnNum']['loop'];
if ($this->_sections['columnNum']['start'] < 0)
    $this->_sections['columnNum']['start'] = max($this->_sections['columnNum']['step'] > 0 ? 0 : -1, $this->_sections['columnNum']['loop'] + $this->_sections['columnNum']['start']);
else
    $this->_sections['columnNum']['start'] = min($this->_sections['columnNum']['start'], $this->_sections['columnNum']['step'] > 0 ? $this->_sections['columnNum']['loop'] : $this->_sections['columnNum']['loop']-1);
if ($this->_sections['columnNum']['show']) {
    $this->_sections['columnNum']['total'] = min(ceil(($this->_sections['columnNum']['step'] > 0 ? $this->_sections['columnNum']['loop'] - $this->_sections['columnNum']['start'] : $this->_sections['columnNum']['start']+1)/abs($this->_sections['columnNum']['step'])), $this->_sections['columnNum']['max']);
    if ($this->_sections['columnNum']['total'] == 0)
        $this->_sections['columnNum']['show'] = false;
} else
    $this->_sections['columnNum']['total'] = 0;
if ($this->_sections['columnNum']['show']):

            for ($this->_sections['columnNum']['index'] = $this->_sections['columnNum']['start'], $this->_sections['columnNum']['iteration'] = 1;
                 $this->_sections['columnNum']['iteration'] <= $this->_sections['columnNum']['total'];
                 $this->_sections['columnNum']['index'] += $this->_sections['columnNum']['step'], $this->_sections['columnNum']['iteration']++):
$this->_sections['columnNum']['rownum'] = $this->_sections['columnNum']['iteration'];
$this->_sections['columnNum']['index_prev'] = $this->_sections['columnNum']['index'] - $this->_sections['columnNum']['step'];
$this->_sections['columnNum']['index_next'] = $this->_sections['columnNum']['index'] + $this->_sections['columnNum']['step'];
$this->_sections['columnNum']['first']      = ($this->_sections['columnNum']['iteration'] == 1);
$this->_sections['columnNum']['last']       = ($this->_sections['columnNum']['iteration'] == $this->_sections['columnNum']['total']);
?>
                        <?php if ($this->_sections['columnNum']['first']): ?>
                            <td class="neo-table-title-row" style="background:none;"><?php echo $this->_tpl_vars['header'][$this->_sections['columnNum']['index']]['name']; ?>
&nbsp;</td>
                        <?php else: ?>
                            <td class="neo-table-title-row"><?php echo $this->_tpl_vars['header'][$this->_sections['columnNum']['index']]['name']; ?>
&nbsp;</td>
                        <?php endif; ?>
                    <?php endfor; endif; ?>
                </tr>
            <?php endif; ?>
        </table>
    </div>

    <?php if ($this->_tpl_vars['numData'] > 3): ?>
        <div class="neo-table-footer-row">
            <div class="neo-table-header-row-navigation">
                <?php if ($this->_tpl_vars['pagingShow']): ?>
                    <?php if ($this->_tpl_vars['start'] <= 1): ?>
                        <img src='images/table-arrow-first.gif' alt='<?php echo $this->_tpl_vars['lblStart']; ?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                        <img src='images/table-arrow-previous.gif' alt='<?php echo $this->_tpl_vars['lblPrevious']; ?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                    <?php else: ?>
                        <a href="<?php echo $this->_tpl_vars['url']; ?>
&nav=start&start=<?php echo $this->_tpl_vars['start']; ?>
"><img src='images/table-arrow-first.gif' alt='<?php echo $this->_tpl_vars['lblStart']; ?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer" /></a>
                        <a href="<?php echo $this->_tpl_vars['url']; ?>
&nav=previous&start=<?php echo $this->_tpl_vars['start']; ?>
"><img src='images/table-arrow-previous.gif' alt='<?php echo $this->_tpl_vars['lblPrevious']; ?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer" /></a>
                    <?php endif; ?>
                    &nbsp;<?php echo $this->_tpl_vars['lblPage']; ?>
&nbsp;
                    <input  type=text  value="<?php echo $this->_tpl_vars['currentPage']; ?>
" size="2" align="absmiddle" name="page" id="pagedown" />&nbsp;<?php echo $this->_tpl_vars['lblof']; ?>
&nbsp;<?php echo $this->_tpl_vars['numPage']; ?>
&nbsp;(<?php echo $this->_tpl_vars['total']; ?>
&nbsp;<?php echo $this->_tpl_vars['lblrecords']; ?>
)
                    <?php if ($this->_tpl_vars['end'] == $this->_tpl_vars['total']): ?>
                        <img src='images/table-arrow-next.gif' alt='<?php echo $this->_tpl_vars['lblNext']; ?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                        <img src='images/table-arrow-last.gif' alt='<?php echo $this->_tpl_vars['lblEnd']; ?>
' align='absmiddle' border='0' width='16' height='16' style="opacity: 0.3;" />
                    <?php else: ?>
                        <a href="<?php echo $this->_tpl_vars['url']; ?>
&nav=next&start=<?php echo $this->_tpl_vars['start']; ?>
"><img src='images/table-arrow-next.gif' alt='<?php echo $this->_tpl_vars['lblNext']; ?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer" /></a>
                        <a href="<?php echo $this->_tpl_vars['url']; ?>
&nav=end&start=<?php echo $this->_tpl_vars['start']; ?>
"><img src='images/table-arrow-last.gif' alt='<?php echo $this->_tpl_vars['lblEnd']; ?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer" /></a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</form>

<?php echo '
<script type="text/Javascript">
    $(function(){
        $("#neo-table1").colResizable({
            liveDrag:true,
            marginLeft:"1px",
            onDrag: onDrag
        });
    });

    var onDrag = function(){

    }

    $("[id^=page]").keyup(function(event) {
        var id  = $(this).attr("id");
        var val = $(this).val();

        if(id == "pageup")
            $("#pagedown").val(val);
        else if(id == "pagedown")
            $("#pageup").val(val);
    });

    $("#neo-tabla-header-row-filter-1").click(function() {
'; ?>

    <?php if ($this->_tpl_vars['AS_OPTION']): ?>
        var filter_show = "<?php echo $this->_tpl_vars['MORE_OPTIONS']; ?>
";
        var filter_hide = "<?php echo $this->_tpl_vars['MORE_OPTIONS']; ?>
";
    <?php else: ?>
        var filter_show = "<?php echo $this->_tpl_vars['FILTER_GRID_SHOW']; ?>
";
        var filter_hide = "<?php echo $this->_tpl_vars['FILTER_GRID_HIDE']; ?>
";
    <?php endif;  echo '

        if($("#neo-table-header-filterrow").data("neo-table-header-filterrow-status")=="visible") {
            $("#neo-table-header-filterrow").addClass("neo-display-none");
            $("#neo-tabla-img-arrow").attr("src","images/icon_arrowdown2.png");
            $("#neo-table-label-filter").text(filter_show);
            $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "hidden");
            $("#neo-tabla-header-row-filter-1").removeClass("exportBackground");
        } else {
            $("#neo-table-header-filterrow").removeClass("neo-display-none");
            $("#neo-tabla-img-arrow").attr("src","images/icon_arrowup2.png");
            $("#neo-table-label-filter").text(filter_hide);
            $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "visible");
            $("#neo-tabla-header-row-filter-1").addClass("exportBackground");
        }
    });
</script>
'; ?>
