<?php /* Smarty version 2.6.26, created on 2012-01-03 14:49:10
         compiled from db:altsys_main_myblocksadmin_edit_4legacy.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:altsys_main_myblocksadmin_edit_4legacy.html', 36, false),array('function', 'xoops_dhtmltarea', 'db:altsys_main_myblocksadmin_edit_4legacy.html', 79, false),array('function', 'html_options', 'db:altsys_main_myblocksadmin_edit_4legacy.html', 98, false),)), $this); ?>
<a href="?mode=admin&amp;lib=altsys&amp;page=myblocksadmin&amp;dirname=<?php echo $this->_tpl_vars['target_dirname']; ?>
"><?php echo @_MD_A_MYBLOCKSADMIN_BLOCKADMIN; ?>
</a>&nbsp;<span style="font-weight:bold;">&raquo;&raquo;</span>&nbsp;<?php echo $this->_tpl_vars['form_title']; ?>
<br /><br />

<h3 style='text-align:<?php echo @_GLOBAL_LEFT; ?>
;'><?php echo $this->_tpl_vars['target_mname']; ?>
</h3>

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

<?php if ($this->_tpl_vars['common_fck_installed']): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/common/fckeditor/fckeditor.js"></script>
<script type="text/javascript"><!--
	function fckeditor_exec() {
		var oFCKeditor = new FCKeditor( "textarea_content" , "100%" , "500" , "Default" );
		oFCKeditor.BasePath = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/common/fckeditor/";
		oFCKeditor.ReplaceTextarea();
	}
// --></script>
<?php endif; ?>

<form name="blockform" id="blockform" action="?mode=admin&amp;lib=altsys&amp;page=myblocksadmin&amp;dirname=<?php echo $this->_tpl_vars['target_dirname']; ?>
&amp;bid=<?php echo $this->_tpl_vars['block']['bid']; ?>
" method="post">

<table class="outer">
	<tr>
		<th colspan="2"><?php echo $this->_tpl_vars['form_title']; ?>
</th>
	</tr>
	<tr>
		<td class="head"><?php echo @_MD_A_MYBLOCKSADMIN_NAME; ?>
</td>
		<td class="even">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['name_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</td>
	</tr>
	<tr>
		<td class="head"><?php echo @_MD_A_MYBLOCKSADMIN_TITLE; ?>
</td>
		<td class="even">
			<input type="text" name="titles[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['title_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" />
		</td>
	</tr>
	<tr>
		<td class="head"><?php echo @_MD_A_MYBLOCKSADMIN_SIDE; ?>
</td>
		<td class="even">
			<?php echo $this->_tpl_vars['block']['cell_position']; ?>

		</td>
	</tr>
	<tr>
		<td class="head"><?php echo @_MD_A_MYBLOCKSADMIN_WEIGHT; ?>
</td>
		<td class="even">
			<input type="text" name="weights[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" value="<?php echo $this->_tpl_vars['block']['weight']; ?>
" size="3" maxlength="5" style="text-align:<?php echo @_GLOBAL_RIGHT; ?>
;" />
		</td>
	</tr>
	<tr>
		<td class="head"><?php echo @_MD_A_MYBLOCKSADMIN_VISIBLEIN; ?>
</td>
		<td class="even">
			<?php echo $this->_tpl_vars['block']['cell_module_link']; ?>

			<?php echo $this->_tpl_vars['block']['cell_group_perm']; ?>

		</td>
	</tr>


	<?php if ($this->_tpl_vars['block']['is_custom']): ?>

		<tr>
			<td class="head"><?php echo @_MD_A_MYBLOCKSADMIN_CONTENT; ?>
</td>
			<td class="even">
				<?php if ($this->_tpl_vars['xoops_cube_legacy']): ?>
					<?php if ($this->_tpl_vars['block']['ctype'] == 'P'): ?>
						<textarea name="contents[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" id="textarea_content" cols="80" rows="20"><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['content_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
						<?php if (! $this->_tpl_vars['common_fck_installed']): ?><br /><?php echo @_MD_A_MYBLOCKSADMIN_NOTICE4COMMONFCK; ?>
<?php endif; ?>
					<?php elseif ($this->_tpl_vars['block']['ctype'] == 'H' && $this->_tpl_vars['common_fck_installed']): ?>
						<textarea name="contents[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" id="textarea_content"><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['content_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
						<script>fckeditor_exec();</script>
					<?php elseif ($this->_tpl_vars['block']['ctype'] == 'H' || empty ( $this->_tpl_vars['block']['ctype'] )): ?>
						<?php echo smarty_function_xoops_dhtmltarea(array('cols' => 74,'rows' => 15,'name' => "contents[".($this->_tpl_vars['block']['bid'])."]",'id' => 'textarea_content','value' => ($this->_tpl_vars['block']['content_raw']),'editor' => 'html'), $this);?>

					<?php else: ?>
						<?php echo smarty_function_xoops_dhtmltarea(array('cols' => 74,'rows' => 15,'name' => "contents[".($this->_tpl_vars['block']['bid'])."]",'id' => 'textarea_content','value' => ($this->_tpl_vars['block']['content_raw']),'myckeditor' => true,'editor' => 'bbcode'), $this);?>

					<?php endif; ?>
				<?php else: ?>
					<?php if ($this->_tpl_vars['block']['ctype'] == 'P' || ! $this->_tpl_vars['common_fck_installed']): ?>
						<textarea name="contents[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" id="textarea_content" cols="80" rows="20"><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['content_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
						<?php if (! $this->_tpl_vars['common_fck_installed']): ?><br /><?php echo @_MD_A_MYBLOCKSADMIN_NOTICE4COMMONFCK; ?>
<?php endif; ?>
					<?php else: ?>
						<textarea name="contents[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" id="textarea_content"><?php echo ((is_array($_tmp=$this->_tpl_vars['block']['content_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
						<script>fckeditor_exec();</script>
					<?php endif; ?>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="head"><?php echo @_MD_A_MYBLOCKSADMIN_CTYPE; ?>
</td>
			<td class="even">
				<select name="ctypes[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" size="1">
					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ctype_options'],'selected' => $this->_tpl_vars['block']['ctype']), $this);?>

				</select>
			</td>
		</tr>

	<?php else: ?>

		<?php if ($this->_tpl_vars['block']['template_tplset']): ?>
		<tr>
			<td class="head"><?php echo @_MD_A_MYBLOCKSADMIN_CONTENT; ?>
</td>
			<td class="even">
				<a href="?mode=admin&amp;lib=altsys&amp;page=mytplsform&amp;tpl_file=<?php echo $this->_tpl_vars['block']['template']; ?>
&amp;tpl_tplset=<?php echo $this->_tpl_vars['block']['template_tplset']; ?>
"><?php echo @_MD_A_MYBLOCKSADMIN_EDITTPL; ?>
</a>
			</td>
		</tr>
		<?php endif; ?>

		<tr>
			<td class="head"><?php echo @_MD_A_MYBLOCKSADMIN_OPTIONS; ?>
</td>
			<td class="even">
				<?php echo $this->_tpl_vars['block']['cell_options']; ?>

			</td>
		</tr>

	<?php endif; ?>

	<tr>
		<td class="head"><?php echo @_MD_A_MYBLOCKSADMIN_BCACHETIME; ?>
</td>
		<td class="even">
			<select name="bcachetimes[<?php echo $this->_tpl_vars['block']['bid']; ?>
]" size="1">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['cachetime_options'],'selected' => $this->_tpl_vars['block']['bcachetime']), $this);?>

			</select>
		</td>
	</tr>
	<tr>
		<td class="head"></td>
		<td class="even">
			<?php if ($this->_tpl_vars['block']['is_custom']): ?>
				<input type="submit" class="formButton" name="preview"  id="preview" value="<?php echo @_PREVIEW; ?>
" />
			<?php endif; ?>
			<input type="submit" class="formButton" name="submitblock"  id="submitblock" value="<?php echo $this->_tpl_vars['submit_button']; ?>
" />
		</td>
	</tr>
</table>
<?php echo $this->_tpl_vars['gticket_hidden']; ?>

<input type="hidden" name="op" value="<?php echo $this->_tpl_vars['op']; ?>
" />
</form>

<?php if ($this->_tpl_vars['block']['content_preview']): ?>
	<div class="myblocksadmin_preview">
		<?php echo $this->_tpl_vars['block']['content_preview']; ?>

	</div>
<?php endif; ?>