<?php /* Smarty version 2.6.26, created on 2012-01-03 14:49:10
         compiled from db:d3pipes_blockedit_async.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'implode', 'db:d3pipes_blockedit_async.html', 7, false),array('modifier', 'escape', 'db:d3pipes_blockedit_async.html', 7, false),array('function', 'html_options', 'db:d3pipes_blockedit_async.html', 9, false),)), $this); ?>
<input type="hidden" name="options[0]" value="<?php echo $this->_tpl_vars['mydirname']; ?>
" />

<input type="hidden" name="options[1]" value="<?php echo $this->_tpl_vars['uniqid']; ?>
" />

<p>
	<label for="pipe_id"><?php echo @_MB_D3PIPES_PIPE_ID; ?>
</label>:
	<input type="text" name="options[2]" id="pipe_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=",")) ? $this->_run_mod_handler('implode', true, $_tmp, $this->_tpl_vars['pipe_ids']) : implode($_tmp, $this->_tpl_vars['pipe_ids'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="16" />
	<select name="pipe_select" id="pipe_select" onchange="if(this.value){xoopsGetElementById('pipe_id').value=xoopsGetElementById('pipe_id').value?xoopsGetElementById('pipe_id').value+','+this.value:this.value;}">
		<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['pipe_options']), $this);?>

	</select>
	<blockquote>
		<?php echo @_MB_D3PIPES_PIPE_ID_NOTICE; ?>

		<br />
		<?php echo @_MB_D3PIPES_PIPE_ID_NOTICE2; ?>

	</blockquote>
</p>

<p>
	<label for="max_entries"><?php echo @_MB_D3PIPES_MAX_ENTRIES; ?>
</label>:
	<input type="text" name="options[3]" id="max_entries" value="<?php echo $this->_tpl_vars['max_entries']; ?>
" size="4" />
	<blockquote>
		<?php echo @_MB_D3PIPES_MAX_ENTRIES_NOTICE; ?>

	</blockquote>
</p>

<p>
	<label for="this_template"><?php echo @_MB_D3PIPES_THISTEMPLATE; ?>
</label>:
	<input type="text" size="60" name="options[4]" id="this_template" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['this_template'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['mydirname']; ?>
/admin/index.php?mode=admin&amp;lib=altsys&amp;page=mytplsform&amp;tpl_file=<?php echo ((is_array($_tmp=$this->_tpl_vars['this_template'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo @_EDIT; ?>
</a>
	<?php if ($this->_tpl_vars['type'] == 'sync'): ?>
		<blockquote>
			<?php echo @_MB_D3PIPES_THISTEMPLATE_NOTICE; ?>
<br />
			db:<?php echo $this->_tpl_vars['mydirname']; ?>
_block_sync.html<br />
			db:<?php echo $this->_tpl_vars['mydirname']; ?>
_block_sync_big.html<br />
		</blockquote>
	<?php endif; ?>
</p>

<p>
	<label for="union_class"><?php echo @_MB_D3PIPES_UNIONCLASS; ?>
</label>:
	<select name="options[5]" id="union_class">
		<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['union_options'],'selected' => $this->_tpl_vars['union_class']), $this);?>

	</select>
</p>

<p>
	<?php echo @_MB_D3PIPES_LINK2CLIPPING; ?>
:
	<label for="link2clipping_yes"><?php echo @_YES; ?>
</label>
	<input type="radio" name="options[6]" id="link2clipping_yes" value="1" <?php if ($this->_tpl_vars['link2clipping']): ?>checked="checked"<?php endif; ?> />
	<label for="link2clipping_no"><?php echo @_NO; ?>
</label>
	<input type="radio" name="options[6]" id="link2clipping_no" value="0" <?php if (! $this->_tpl_vars['link2clipping']): ?>checked="checked"<?php endif; ?> />
</p>

<p>
	<?php echo @_MB_D3PIPES_KEEP_PIPEINFO; ?>
:
	<label for="keep_pipeinfo_yes"><?php echo @_YES; ?>
</label>
	<input type="radio" name="options[7]" id="keep_pipeinfo_yes" value="1" <?php if ($this->_tpl_vars['keep_pipeinfo']): ?>checked="checked"<?php endif; ?> />
	<label for="keep_pipeinfo_no"><?php echo @_NO; ?>
</label>
	<input type="radio" name="options[7]" id="keep_pipeinfo_no" value="0" <?php if (! $this->_tpl_vars['keep_pipeinfo']): ?>checked="checked"<?php endif; ?> />
</p>