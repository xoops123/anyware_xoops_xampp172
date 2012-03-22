<?php /* Smarty version 2.6.26, created on 2012-01-03 14:34:19
         compiled from db:d3pipes_admin_pipe_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:d3pipes_admin_pipe_list.html', 32, false),)), $this); ?>
<div class="d3pipes_admin_pipe_list" id="<?php echo $this->_tpl_vars['mydirname']; ?>
_admin_pipe_list">

	<h2><?php echo $this->_tpl_vars['mod_name']; ?>
 - <?php echo @_MD_A_D3PIPES_H2_PIPEADMINLIST; ?>
</h2>

	<p>
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=wizard_fetch"><?php echo @_MD_A_D3PIPES_LINK_WIZARDFETCH; ?>
</a>
		|
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=wizard_inner"><?php echo @_MD_A_D3PIPES_LINK_WIZARDINNER; ?>
</a>
		|
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=pipe&amp;pipe_id=-1"><?php echo @_MD_A_D3PIPES_LINK_MAKENEWPIPE; ?>
</a>
	</p>
	
	<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=pipe" method="post">

		<table class="outer">
			<tr>
				<th><?php echo @_MD_A_D3PIPES_TH_PIPEID; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_PIPETYPE; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_PIPENAME; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_PIPEWEIGHT; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_MAINDISP; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_MAINLIST; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_MAINAGGR; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_MAINRSS; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_BLOCKDISP; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_INSUBMENU; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_MODIFIED; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_LASTFETCH; ?>
</th>
				<th><?php echo @_MD_A_D3PIPES_TH_ACTIONS; ?>
</th>
			</tr>
		<?php $_from = $this->_tpl_vars['pipes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pipe']):
?>
			<tr class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
				<td><?php echo $this->_tpl_vars['pipe']['id']; ?>
</td>
				<td><?php echo $this->_tpl_vars['pipe']['type']; ?>
</td>
				<td><input type="text" name="name[<?php echo $this->_tpl_vars['pipe']['id']; ?>
]" value="<?php echo $this->_tpl_vars['pipe']['name4xml']; ?>
" size="16" /></td>
				<td><input type="text" name="weight[<?php echo $this->_tpl_vars['pipe']['id']; ?>
]" value="<?php echo $this->_tpl_vars['pipe']['weight']; ?>
" size="2" style="text-align:right;" /></td>
				<td><input type="checkbox" name="main_disp[<?php echo $this->_tpl_vars['pipe']['id']; ?>
]" value="1" <?php if ($this->_tpl_vars['pipe']['main_disp']): ?>checked="checked"<?php endif; ?> title="<?php echo @_MD_A_D3PIPES_TITLE_MAINDISP; ?>
" /></td>
				<td><input type="checkbox" name="main_list[<?php echo $this->_tpl_vars['pipe']['id']; ?>
]" value="1" <?php if ($this->_tpl_vars['pipe']['main_list']): ?>checked="checked"<?php endif; ?> title="<?php echo @_MD_A_D3PIPES_TITLE_MAINLIST; ?>
" /></td>
				<td><input type="checkbox" name="main_aggr[<?php echo $this->_tpl_vars['pipe']['id']; ?>
]" value="1" <?php if ($this->_tpl_vars['pipe']['main_aggr']): ?>checked="checked"<?php endif; ?> title="<?php echo @_MD_A_D3PIPES_TITLE_MAINAGGR; ?>
" /></td>
				<td><input type="checkbox" name="main_rss[<?php echo $this->_tpl_vars['pipe']['id']; ?>
]" value="1" <?php if ($this->_tpl_vars['pipe']['main_rss']): ?>checked="checked"<?php endif; ?> title="<?php echo @_MD_A_D3PIPES_TITLE_MAINRSS; ?>
" /></td>
				<td><input type="checkbox" name="block_disp[<?php echo $this->_tpl_vars['pipe']['id']; ?>
]" value="1" <?php if ($this->_tpl_vars['pipe']['block_disp']): ?>checked="checked"<?php endif; ?> title="<?php echo @_MD_A_D3PIPES_TITLE_BLOCKDISP; ?>
" /></td>
				<td><input type="checkbox" name="in_submenu[<?php echo $this->_tpl_vars['pipe']['id']; ?>
]" value="1" <?php if ($this->_tpl_vars['pipe']['in_submenu']): ?>checked="checked"<?php endif; ?> title="<?php echo @_MD_A_D3PIPES_TITLE_INSUBMENU; ?>
" /></td>
				<td><?php echo $this->_tpl_vars['pipe']['modified_time_formatted']; ?>
</td>
				<td><?php echo $this->_tpl_vars['pipe']['lastfetch_time_formatted']; ?>
</td>
				<td style="white-space: nowrap;">
					<div style="float:left;padding:2px;"><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=pipe&amp;pipe_id=<?php echo $this->_tpl_vars['pipe']['id']; ?>
"><?php echo @_EDIT; ?>
</a></div>
					<div style="float:left;padding:2px;"><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=eachpipe&amp;pipe_id=<?php echo $this->_tpl_vars['pipe']['id']; ?>
"><?php echo @_MD_A_D3PIPES_TH_MAINDISP; ?>
</a></div>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>

		<div align="center" style="margin: 12px;">
			<input type="submit" name="do_batchupdate" value="<?php echo @_MD_A_D3PIPES_BTN_UPDATE; ?>
" />
			<input type="reset" value="<?php echo @_MD_A_D3PIPES_BTN_RESET; ?>
" />
			<?php echo $this->_tpl_vars['gticket_hidden']; ?>

		</div>

	</form>

</div>