<?php /* Smarty version 2.6.26, created on 2012-01-02 18:01:34
         compiled from db:d3forum_main_category_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'db:d3forum_main_category_form.html', 100, false),)), $this); ?>
<!-- start module contents -->
<?php if ($this->_tpl_vars['mod_config']['show_breadcrumbs']): ?>
<div class="d3f_breadcrumbs"><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php"><?php echo @_MD_D3FORUM_TOP; ?>
</a>&nbsp;&gt;&nbsp;<?php echo @_MD_D3FORUM_CATEGORYMANAGER; ?>
</div>
<?php endif; ?>

<h1 class="d3f_title"><?php echo @_MD_D3FORUM_CATEGORYMANAGER; ?>
</h1>

<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
	<p><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=category_access&amp;cat_id=<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo @_MD_D3FORUM_LINK_CATEGORYACCESS; ?>
</a></p>
<?php endif; ?>

<h2 class="d3f_head"><?php echo $this->_tpl_vars['formtitle']; ?>
</h2>
<form name="categoryform" id="categoryform" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=<?php echo $this->_tpl_vars['page']; ?>
&amp;cat_id=<?php echo $this->_tpl_vars['category']['id']; ?>
" method="post" onsubmit="return xoopsFormValidate_categoryform();">


	<table class="outer d3f_form_table">
		<tr style="display:none;">
			<td><?php echo $this->_tpl_vars['gticket_hidden']; ?>
</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head"><label for="category_title"><?php echo @_MD_D3FORUM_TH_CATEGORYTITLE; ?>
</label></th>
			<td class="even">
				<input type="text" name="title" id="category_title" size="50" maxlength="255" value="<?php echo $this->_tpl_vars['category']['title']; ?>
" />
			</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head"><label for="category_desc"><?php echo @_MD_D3FORUM_TH_CATEGORYDESC; ?>
</label></th>
			<td class="even">
				<textarea name="desc" id="category_desc" cols="50" rows="10"><?php echo $this->_tpl_vars['category']['desc']; ?>
</textarea>
			</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head"><label for="category_pid"><?php echo @_MD_D3FORUM_TH_CATEGORYPARENT; ?>
</label></th>
			<td class="even">
				<select name="pid" id="category_pid">
					<option value="">(<?php echo @_MD_D3FORUM_TOP; ?>
)</option>
					<?php echo $this->_tpl_vars['cat_jumpbox_options']; ?>

				</select>
			</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head"><label for="category_weight"><?php echo @_MD_D3FORUM_TH_CATEGORYWEIGHT; ?>
</label></th>
			<td class="even">
				<input type="text" name="weight" id="category_weight" size="4" maxlength="4" value="<?php echo $this->_tpl_vars['category']['weight']; ?>
" />
			</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head">
				<?php echo @_MD_D3FORUM_TH_CATEGORYOPTIONS; ?>

			</th>
			<td class="even">
				<input type="checkbox" id="category_option_controller_onoff" onclick="if(this.checked){xoopsGetElementById('category_option_controller').style.display='block';}else{xoopsGetElementById('category_option_controller').style.display='none';};"  <?php if ($this->_tpl_vars['category']['options']): ?>checked="checked"<?php endif; ?> /><label for="category_option_controller_onoff"><?php echo @_MD_D3FORUM_ONOFF; ?>
</label>
				<div id="category_option_controller" <?php if (! $this->_tpl_vars['category']['options']): ?>style="display:none;"<?php endif; ?>>
					<textarea name="options" id="category_options" cols="50" rows="10"><?php echo $this->_tpl_vars['category']['options']; ?>
</textarea>
					<br />
					<?php echo @_MD_D3FORUM_HOWTO_OVERRIDEOPTIONS; ?>
:
					<br />
					<span class="categoryoptiondesc"><?php echo $this->_tpl_vars['category']['option_desc']; ?>
</span>
				</div>
			</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head">
				<?php echo @_MD_D3FORUM_CHILDREN_COUNT; ?>

			</th>
			<td class="even">
				<?php echo $this->_tpl_vars['children_count']; ?>

			</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head">
				<?php echo @_MD_D3FORUM_BATCH_ACTIONS; ?>

			</th>
			<td class="even">
				<input type="checkbox" name="batch_action_turnsolvedon" id="batch_action_turnsolvedon" value="1" onclick="if(this.checked){alert('<?php echo @_MD_D3FORUM_BA_MSG_CONFIRM; ?>
');}" /><label for="batch_action_turnsolvedon"><?php echo @_MD_D3FORUM_BA_TURNSOLVEDON; ?>
</label>
			</td>
		</tr>

	</table>

<p class="d3f_submit"><input type="submit" name="categoryman_post" value="<?php echo @_SUBMIT; ?>
" />
<?php if ($this->_tpl_vars['page'] == 'categorymanager' && $this->_tpl_vars['children_count'] == 0): ?>
<input type="submit" name="categoryman_delete" value="<?php echo @_DELETE; ?>
" onclick="return confirm('<?php echo @_MD_D3FORUM_MSG_CONFIRMDELETERECURSIVE; ?>
')" />
<?php endif; ?></p>

</form>

<!-- Start Form Vaidation JavaScript //-->
<script type="text/javascript">
<!--//
function xoopsFormValidate_categoryform() {
	myform = window.document.categoryform;
	if ( myform.title.value == "" ) { window.alert("<?php echo ((is_array($_tmp=@_MD_D3FORUM_TH_CATEGORYTITLE)) ? $this->_run_mod_handler('string_format', true, $_tmp, @_FORM_ENTER) : smarty_modifier_string_format($_tmp, @_FORM_ENTER)); ?>
"); myform.title.focus(); return false; }
	return true;
}
//--></script>
<!-- End Form Vaidation JavaScript //-->

<!-- end module contents -->