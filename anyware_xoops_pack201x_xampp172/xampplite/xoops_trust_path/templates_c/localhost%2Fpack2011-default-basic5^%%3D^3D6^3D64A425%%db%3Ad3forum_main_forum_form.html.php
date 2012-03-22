<?php /* Smarty version 2.6.26, created on 2012-01-02 18:03:26
         compiled from db:d3forum_main_forum_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'db:d3forum_main_forum_form.html', 100, false),array('function', 'html_options', 'db:d3forum_main_forum_form.html', 114, false),)), $this); ?>
<!-- start module contents -->
<?php if ($this->_tpl_vars['mod_config']['show_breadcrumbs']): ?>
<div class="d3f_breadcrumbs">
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?cat_id=<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo $this->_tpl_vars['category']['title']; ?>
</a> &gt; <?php echo @_MD_D3FORUM_FORUMMANAGER; ?>

</div>
<?php endif; ?>

<h1 class="d3f_title"><?php echo @_MD_D3FORUM_FORUMMANAGER; ?>
</h1>

<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
	<p><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=forum_access&amp;cat_id=<?php echo $this->_tpl_vars['forum']['id']; ?>
"><?php echo @_MD_D3FORUM_LINK_FORUMACCESS; ?>
</a></p>
<?php endif; ?>

<h2 class="d3f_head"><?php echo $this->_tpl_vars['formtitle']; ?>
</h2>
<form name="forumform" id="forumform" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=<?php echo $this->_tpl_vars['page']; ?>
&amp;cat_id=<?php echo $this->_tpl_vars['category']['id']; ?>
&amp;forum_id=<?php echo $this->_tpl_vars['forum']['id']; ?>
" method="post" onsubmit="return xoopsFormValidate_forumform();">

	<table width="100%" class="outer d3f_form_table" cellspacing="1">
		<tr style="display:none;">
			<td><?php echo $this->_tpl_vars['gticket_hidden']; ?>
</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head"><label for="forum_title"><?php echo @_MD_D3FORUM_TH_FORUMTITLE; ?>
</label></th>
			<td class="even">
				<input type="text" name="title" id="forum_title" size="50" maxlength="255" value="<?php echo $this->_tpl_vars['forum']['title']; ?>
" />
			</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head"><label for="forum_desc"><?php echo @_MD_D3FORUM_TH_FORUMDESC; ?>
</label></th>
			<td class="even">
				<textarea name="desc" id="forum_desc" cols="50" rows="10"><?php echo $this->_tpl_vars['forum']['desc']; ?>
</textarea>
			</td>
		</tr>

		<?php if ($this->_tpl_vars['xoops_isadmin']): ?>

		<tr valign="top" align="left">
			<th class="d3f_head"><label for="cat_id"><?php echo @_MD_D3FORUM_CATEGORY; ?>
</label></th>
			<td class="even">
				<?php if ($this->_tpl_vars['cat_jumpbox_options']): ?>
				<select name="cat_id" id="cat_id">
					<?php echo $this->_tpl_vars['cat_jumpbox_options']; ?>

				</select>
				<?php else: ?>
				<?php echo $this->_tpl_vars['category']['title']; ?>

				<input type="hidden" name="cat_id" value="<?php echo $this->_tpl_vars['category']['id']; ?>
" />
				<?php endif; ?>
			</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head"><label for="forum_weight"><?php echo @_MD_D3FORUM_TH_FORUMWEIGHT; ?>
</label></th>
			<td class="even">
				<input type="text" name="weight" id="forum_weight" size="4" maxlength="4" value="<?php echo $this->_tpl_vars['forum']['weight']; ?>
" />
			</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head"><label for="forum_external_link_format"><?php echo @_MD_D3FORUM_TH_EXTERNALLINKFORMAT; ?>
</label></th>
			<td class="even">
				<input type="text" name="external_link_format" id="forum_external_link_format" size="80" maxlength="255" value="<?php echo $this->_tpl_vars['forum']['external_link_format']; ?>
" />
				<br />
				<?php echo @_MD_D3FORUM_HELP_EXTERNALLINKFORMAT; ?>

			</td>
		</tr>

		<tr valign="top" align="left">
			<th class="d3f_head">
				<?php echo @_MD_D3FORUM_TH_FORUMOPTIONS; ?>

			</th>
			<td class="even">
				<input type="checkbox" id="forum_option_controller_onoff" onclick="if(this.checked){xoopsGetElementById('forum_option_controller').style.display='block';}else{xoopsGetElementById('forum_option_controller').style.display='none';};"  <?php if ($this->_tpl_vars['forum']['options']): ?>checked="checked"<?php endif; ?> /><label for="forum_option_controller_onoff"><?php echo @_MD_D3FORUM_ONOFF; ?>
</label>
				<div id="forum_option_controller" <?php if (! $this->_tpl_vars['forum']['options']): ?>style="display:none;"<?php endif; ?>>
					<textarea name="options" id="forum_options" cols="50" rows="10"><?php echo $this->_tpl_vars['forum']['options']; ?>
</textarea>
					<br />
					<?php echo @_MD_D3FORUM_HOWTO_OVERRIDEOPTIONS; ?>
:
					<br />
					<span class="forumoptiondesc"><?php echo $this->_tpl_vars['forum']['option_desc']; ?>
</span>
				</div>
			</td>
		</tr>

		<?php endif; ?>

	</table>

	<p class="d3f_submit"><input type="submit" name="forumman_post" value="<?php echo @_SUBMIT; ?>
" />
	<?php if ($this->_tpl_vars['page'] == 'forummanager'): ?>
	<input type="submit" name="forumman_delete" value="<?php echo @_DELETE; ?>
" onclick="return confirm('<?php echo @_MD_D3FORUM_MSG_CONFIRMDELETERECURSIVE; ?>
')" />
	<?php endif; ?></p>

</form>

<!-- Start Form Vaidation JavaScript //-->
<script type="text/javascript">
<!--//
function xoopsFormValidate_forumform() {
	myform = window.document.forumform;
	if ( myform.title.value == "" ) { window.alert("<?php echo ((is_array($_tmp=@_MD_D3FORUM_TH_FORUMTITLE)) ? $this->_run_mod_handler('string_format', true, $_tmp, @_FORM_ENTER) : smarty_modifier_string_format($_tmp, @_FORM_ENTER)); ?>
"); myform.title.focus(); return false; }
	return true;
}
//--></script>
<!-- End Form Vaidation JavaScript //-->



<?php if ($this->_tpl_vars['forum']['id'] > 0 && $this->_tpl_vars['xoops_isadmin']): ?>

<br />

<form name="forummanager_export" id="forummanager_export" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=<?php echo $this->_tpl_vars['page']; ?>
&amp;cat_id=<?php echo $this->_tpl_vars['category']['id']; ?>
&amp;forum_id=<?php echo $this->_tpl_vars['forum']['id']; ?>
" class="outer head" method="post">

	<select name="export_mid" id="export_mid" onchange="d3forum_showhide_category_select(this);"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['export_to_module_options']), $this);?>
</select>

	<select name="export_cat_id[0]" id="export_cat_id_0">
		<option value="0">----</option>
	</select>
	<?php $_from = $this->_tpl_vars['export_to_cat_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ex_cat_id'] => $this->_tpl_vars['ex_options']):
?>
		<select name="export_cat_id[<?php echo $this->_tpl_vars['ex_cat_id']; ?>
]" id="export_cat_id_<?php echo $this->_tpl_vars['ex_cat_id']; ?>
">
			<option value="0">----</option>
			<?php echo $this->_tpl_vars['ex_options']; ?>

		</select>
	<?php endforeach; endif; unset($_from); ?>

	<br />
	<input type="submit" name="forumman_export_move" value="<?php echo @_MD_D3FORUM_BTN_MOVEFORUMTOOTHERFORUM; ?>
" onclick="return confirm('<?php echo @_MD_D3FORUM_MSG_CONFIRMOK; ?>
')" />
	<input type="submit" name="forumman_export_copy" value="<?php echo @_MD_D3FORUM_BTN_COPYFORUMTOOTHERFORUM; ?>
" onclick="return confirm('<?php echo @_MD_D3FORUM_MSG_CONFIRMOK; ?>
')" />
	<?php echo $this->_tpl_vars['gticket_hidden']; ?>


</form>


<script type="text/javascript">
<!--//

d3forum_showhide_category_select( xoopsGetElementById("export_cat_id_0") ) ;

function d3forum_showhide_category_select(select)
{
	selected_val = select.options[select.selectedIndex].value ;
	form = select.form ;
	for( i = 0 ; i < form.elements.length ; i ++ ) {
		if( form.elements[i].name.match(/export_cat_id/) ) {
			if( form.elements[i].id == "export_cat_id_" + selected_val ) {
				form.elements[i].style.display = "inline" ;
			} else {
				form.elements[i].style.display = "none" ;
			}
		}
	}
}
//-->
</script>

<?php endif; ?>