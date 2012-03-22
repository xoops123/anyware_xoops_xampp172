<?php /* Smarty version 2.6.26, created on 2012-01-02 18:11:54
         compiled from db:altsys_main_myblocksadmin_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:altsys_main_myblocksadmin_list.html', 27, false),array('function', 'html_options', 'db:altsys_main_myblocksadmin_list.html', 45, false),array('modifier', 'escape', 'db:altsys_main_myblocksadmin_list.html', 29, false),)), $this); ?>
<h3 style='text-align:<?php echo @_GLOBAL_LEFT; ?>
;'><?php echo $this->_tpl_vars['target_mname']; ?>
</h3>

<h4 style="text-align:<?php echo @_GLOBAL_LEFT; ?>
;"><?php echo @_MD_A_MYBLOCKSADMIN_BLOCKADMIN; ?>
</h4>
<style>
	td.blockposition	{width:135px;white-space:nowrap;}
	div.blockposition	{float:<?php echo @_GLOBAL_LEFT; ?>
;border:solid 1px #333333;padding:1px;}
	div.unselected		{background-color:#FFFFFF;}
	div.selected		{background-color:#00FF00;}
	div.disabled		{background-color:#FF0000;}
	input[type='radio'] {margin:2px;}
	input[type='text'] {min-width:0%;}
	label				{display:inline;}
</style>

<form action="?mode=admin&amp;lib=altsys&amp;page=myblocksadmin&amp;dirname=<?php echo $this->_tpl_vars['target_dirname']; ?>
" name="blockadmin" method="post">
	<table width="95%" class="outer" cellpadding="4" cellspacing="1">
	<tr valign="middle">
		<th><?php echo @_MD_A_MYBLOCKSADMIN_TITLE; ?>
</th>
		<th align="center" nowrap="nowrap"><?php echo @_MD_A_MYBLOCKSADMIN_SIDE; ?>
</th>
		<th align="center"><?php echo @_MD_A_MYBLOCKSADMIN_WEIGHT; ?>
</th>
		<th align="center"><?php echo @_MD_A_MYBLOCKSADMIN_VISIBLEIN; ?>
</th>
		<th align="center"><?php echo @_MD_A_MYBLOCKSADMIN_BCACHETIME; ?>
</th>
		<th align="<?php echo @_GLOBAL_RIGHT; ?>
"><?php echo @_MD_A_MYBLOCKSADMIN_ACTION; ?>
</th>
	</tr>

	<?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
		<tr valign="middle" class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
			<td>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['name_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

				<br />
				<input type="text" name="titles[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" />
			</td>
			<td class="blockposition" align="center">
				<?php echo $this->_tpl_vars['block']['cell_position']; ?>

			</td>
			<td align="center">
				<input type="text" name="weights[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" value="<?php echo $this->_tpl_vars['block']['weight']; ?>
" size="3" maxlength="5" style="text-align:<?php echo @_GLOBAL_RIGHT; ?>
;" />
			</td>
			<td align="center">
				<?php echo $this->_tpl_vars['block']['cell_module_link']; ?>

				<?php echo $this->_tpl_vars['block']['cell_group_perm']; ?>

			</td>
			<td align="center">
				<select name="bcachetimes[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" size="1">
					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['cachetime_options'],'selected' => $this->_tpl_vars['block']['bcachetime']), $this);?>

				</select>
			</td>
			<td align="<?php echo @_GLOBAL_RIGHT; ?>
">
				<?php if ($this->_tpl_vars['block']['can_edit']): ?>
					<a href="?mode=admin&amp;lib=altsys&amp;page=myblocksadmin&amp;dirname=<?php echo $this->_tpl_vars['target_dirname']; ?>
&amp;op=edit&amp;bid=<?php echo $this->_tpl_vars['block']['bid']; ?>
"><?php echo @_EDIT; ?>
</a>
				<?php endif; ?>
				<br />
				<?php if ($this->_tpl_vars['block']['can_delete']): ?>
					<a href="?mode=admin&amp;lib=altsys&amp;page=myblocksadmin&amp;dirname=<?php echo $this->_tpl_vars['target_dirname']; ?>
&amp;op=delete&amp;bid=<?php echo $this->_tpl_vars['block']['bid']; ?>
"><?php echo @_DELETE; ?>
</a>
				<?php endif; ?>
				<br />
				<?php if ($this->_tpl_vars['block']['can_clone']): ?>
					<a href="?mode=admin&amp;lib=altsys&amp;page=myblocksadmin&amp;dirname=<?php echo $this->_tpl_vars['target_dirname']; ?>
&amp;op=clone&amp;bid=<?php echo $this->_tpl_vars['block']['bid']; ?>
"><?php if ($this->_tpl_vars['block']['can_clone'] == 2): ?><?php echo @_CLONE; ?>
<?php else: ?><?php echo @_MD_A_MYBLOCKSADMIN_LINK_FORCECLONE; ?>
<?php endif; ?></a>
				<?php endif; ?>
			</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>

	<tr>
		<td class="foot" align="center" colspan="6">
			<input type="hidden" name="fct" value="blocksadmin" />
			<input type="hidden" name="op" value="order" />
			<?php echo $this->_tpl_vars['gticket_hidden']; ?>

			<input type="submit" name="submit" value="<?php echo @_SUBMIT; ?>
" />
		</td>
	</tr>
	</table>
</form>