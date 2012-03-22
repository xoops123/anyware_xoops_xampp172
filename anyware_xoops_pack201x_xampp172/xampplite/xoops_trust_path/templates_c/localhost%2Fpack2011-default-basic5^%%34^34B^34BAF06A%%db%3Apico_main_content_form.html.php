<?php /* Smarty version 2.6.26, created on 2012-01-02 18:52:41
         compiled from db:pico_main_content_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:pico_main_content_form.html', 15, false),array('modifier', 'nl2br', 'db:pico_main_content_form.html', 124, false),array('modifier', 'string_format', 'db:pico_main_content_form.html', 341, false),array('modifier', 'number_format', 'db:pico_main_content_form.html', 361, false),array('function', 'html_options', 'db:pico_main_content_form.html', 27, false),array('function', 'xoopsdhtmltarea', 'db:pico_main_content_form.html', 142, false),)), $this); ?>
<div class="pico_container" id="<?php echo $this->_tpl_vars['mydirname']; ?>
_container">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_breadcrumbs.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h1 class="pico_title"><?php echo $this->_tpl_vars['formtitle']; ?>
: <?php echo $this->_tpl_vars['content']['subject']; ?>
</h1>

<?php if ($this->_tpl_vars['preview']): ?>
	<?php $_from = $this->_tpl_vars['preview']['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error_message']):
?><p onmouseover="document.contentform.vpath.focus();document.contentform.vpath.style.backgroundColor='#FFFFCC';"><em class="pico_notice"><?php echo $this->_tpl_vars['error_message']; ?>
</em></p><?php endforeach; endif; unset($_from); ?>
	<h2 class="pico_title"><?php echo @_PREVIEW; ?>
</h2>
	<div class="pico_body pico_preview" id="<?php echo $this->_tpl_vars['mydirname']; ?>
_body">
	<?php echo $this->_tpl_vars['preview']['body']; ?>

	</div>
<?php endif; ?>

<form name="contentform" id="contentform" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=<?php echo $this->_tpl_vars['page']; ?>
&amp;content_id=<?php echo $this->_tpl_vars['content']['id']; ?>
&amp;ret=<?php echo ((is_array($_tmp=$_GET['ret'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" method="post" onsubmit="return xoopsFormValidate_contentform();" enctype="multipart/form-data">
	<?php echo $this->_tpl_vars['gticket_hidden']; ?>

	<input type="hidden" name="content_id" value="<?php echo $this->_tpl_vars['content']['id']; ?>
" />
	<input type="hidden" name="body_editor" id="body_editor" value="" />

	<table class="outer pico_form_table">

		<!-- category -->
		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head"><label for="cat_id"><?php echo @_MD_PICO_CATEGORY; ?>
</label></th>
			<td class="even">
				<select name="cat_id" id="cat_id">
					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['categories_can_post'],'selected' => $this->_tpl_vars['category']['id']), $this);?>

				</select>
			</td>
		</tr>

		<!-- vpath -->
		<?php if ($this->_tpl_vars['mod_config']['use_wraps_mode'] || strstr ( $this->_tpl_vars['content']['filters'] , 'wraps' )): ?>
		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head"><label for="vpath"><?php echo @_MD_PICO_TH_VIRTUALPATH; ?>
</label></th>
			<td class="even">
				<input type="text" name="vpath" id="vpath" size="70" maxlength="255" value="<?php echo $this->_tpl_vars['content']['vpath']; ?>
" class="pico_ascii_only" />
				<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
					<br />
					<select name="wraps_target" onchange="xoopsGetElementById('vpath').value=this.value;">
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['content']['wraps_files'],'selected' => $this->_tpl_vars['content']['vpath']), $this);?>

					</select>
				<?php endif; ?>
			</td>
		</tr>
		<?php endif; ?>

		<!-- subject -->
		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head"><label for="subject"><?php echo @_MD_PICO_TH_SUBJECT; ?>
</label></th>
			<td class="even">
				<input type="text" name="subject" id="subject" size="80" maxlength="255" value="<?php echo $this->_tpl_vars['content']['subject']; ?>
" />
			</td>
		</tr>


		<!-- subject reference for a waiting content -->
		<?php if ($this->_tpl_vars['content']['subject_waiting'] && $this->_tpl_vars['page'] != 'makecontent'): ?>
		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head pico_waiting"><?php echo @_MD_PICO_TH_SUBJECT_WAITING; ?>
</th>
			<td class="even pico_waiting"><?php echo $this->_tpl_vars['content']['subject_waiting']; ?>
</td>
		</tr>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['mod_config']['allow_each_htmlheader'] || $this->_tpl_vars['content']['htmlheader']): ?>
			<!-- html header -->
			<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
				<th class="head"><label for="htmlheader"><?php echo @_MD_PICO_TH_HTMLHEADER; ?>
</label></th>
				<td class="even">
					<input type="checkbox" id="htmlheader_onoff" onclick="if(this.checked){xoopsGetElementById('htmlheader').style.display='block';}else{xoopsGetElementById('htmlheader').style.display='none';};"  <?php if ($this->_tpl_vars['content']['htmlheader']): ?>checked="checked"<?php endif; ?> /><label for="htmlheader_onoff"><?php echo @_MD_PICO_LABEL_HTMLHEADERONOFF; ?>
</label>
					<?php if (! $this->_tpl_vars['mod_config']['allow_each_htmlheader']): ?>
						<?php echo @_MD_PICO_LABEL_HTMLHEADERCONFIGALERT; ?>

					<?php endif; ?>
					<br />
					<textarea name="htmlheader" id="htmlheader" style="display:<?php if ($this->_tpl_vars['content']['htmlheader']): ?>block<?php else: ?>none<?php endif; ?>;width:480px;height:120px;"><?php echo $this->_tpl_vars['content']['htmlheader']; ?>
</textarea>
				</td>
			</tr>

			<!-- html header reference for a waiting content -->
			<?php if ($this->_tpl_vars['content']['htmlheader_waiting'] && $this->_tpl_vars['page'] != 'makecontent'): ?>
			<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
				<th class="head pico_waiting"><?php echo @_MD_PICO_TH_HTMLHEADER_WAITING; ?>
</th>
				<td class="even pico_waiting"><?php echo ((is_array($_tmp=$this->_tpl_vars['content']['htmlheader_waiting'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
			</tr>
			<?php endif; ?>
		<?php endif; ?>

		<!-- body -->
<?php 
$this->assign( 'common_fck_installed' , file_exists( XOOPS_ROOT_PATH.'/common/fckeditor/fckeditor.js' ) ) ;
 ?>
		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head"><label for="body"><?php echo @_MD_PICO_TH_BODY; ?>
</label>
			<?php if ($this->_tpl_vars['mod_config']['body_editor'] != 'common_fckeditor' && $this->_tpl_vars['common_fck_installed']): ?><input type="submit" class="formButton" name="contentman_preview"  id="contentman_swith_to_fckeditor" value="fckeditor" onclick="xoopsGetElementById('body_editor').value='common_fckeditor'" /><?php endif; ?>
			</th>
			<td class="even">
				<?php if ($this->_tpl_vars['body_wysiwyg'] && $this->_tpl_vars['common_fck_installed'] && ! $this->_tpl_vars['content']['filter_infos']['eval']['enabled']): ?>
					<?php echo $this->_tpl_vars['body_wysiwyg']; ?>

				<?php else: ?>
					<?php if ($this->_tpl_vars['content']['filter_infos']['eval']['enabled'] || $this->_tpl_vars['content']['filter_infos']['htmlspecialchars']['enabled'] || $this->_tpl_vars['content']['filter_infos']['wraps']['enabled'] || $this->_tpl_vars['content']['filter_infos']['textwiki']['enabled']): ?>
						<?php echo smarty_function_xoopsdhtmltarea(array('name' => 'body','cols' => '60','rows' => '20','value' => $this->_tpl_vars['content']['body'],'pre_style' => "display:none;",'post_style' => "display:none;"), $this);?>

					<?php elseif ($this->_tpl_vars['content']['filter_infos']['xcode']['enabled'] || $this->_tpl_vars['content']['filter_infos']['nl2br']['enabled'] || $this->_tpl_vars['content']['filter_infos']['smiley']['enabled']): ?>
						<?php 
							$_makescript = & xoops_getmodulehandler('makescript','myckeditor');
							$params = array('id'=>'body','editor'=>'bbcode','myckeditor'=>'on');
							if (@is_object( $_makescript )){
								$this->assign( 'common_myck_installed' , true ) ;
								$_makescript->makeheader($params);
							}
						 ?>
						<input type="checkbox" id="body_bbcode_onoff" onclick="if(this.checked){xoopsGetElementById('body_bbcode_buttons_pre').style.display='block';xoopsGetElementById('body_bbcode_buttons_post').style.display='block';body_myckeditor_remove()}else{xoopsGetElementById('body_bbcode_buttons_pre').style.display='none';xoopsGetElementById('body_bbcode_buttons_post').style.display='none'};" />
						<label for="body_bbcode_onoff"><?php echo @_MD_PICO_LABEL_INPUTHELPER; ?>
</label>
						<?php if ($this->_tpl_vars['common_myck_installed']): ?>
							<input type="button" class="formButton" value="CKEeditorON" name="myckeditorOn" onclick="if(this.value=='CKEeditorON'){this.value='CKEeditorOFF';body_myckeditor_exec();document.getElementById('body_bbcode_onoff').checked=false;document.getElementById('body_bbcode_buttons_pre').style.display='none';document.getElementById('body_bbcode_buttons_post').style.display='none';}else{this.value='CKEeditorON';body_myckeditor_remove();}"/>
							<br />
						<?php endif; ?>
						<?php echo smarty_function_xoopsdhtmltarea(array('name' => 'body','cols' => '60','rows' => '20','value' => $this->_tpl_vars['content']['body'],'pre_style' => "display:none;",'post_style' => "display:none;"), $this);?>

					<?php else: ?>
						<?php 
							$_makescript = & xoops_getmodulehandler('makescript','myckeditor');
							$params = array('id'=>'body','editor'=>'html','myckeditor'=>'on');
							if (@is_object( $_makescript )){
								$this->assign( 'common_myck_installed' , true ) ;
								$_makescript->makeheader($params);
							}
						 ?>
						<input type="checkbox" id="body_bbcode_onoff" onclick="if(this.checked){xoopsGetElementById('body_bbcode_buttons_pre').style.display='block';xoopsGetElementById('body_bbcode_buttons_post').style.display='block';body_myckeditor_remove()}else{xoopsGetElementById('body_bbcode_buttons_pre').style.display='none';xoopsGetElementById('body_bbcode_buttons_post').style.display='none'};" />
						<label for="body_bbcode_onoff"><?php echo @_MD_PICO_LABEL_INPUTHELPER; ?>
</label>
						<?php if ($this->_tpl_vars['common_myck_installed']): ?>
							<input type="button" class="formButton" value="CKEeditorON" name="myckeditorOn" onclick="if(this.value=='CKEeditorON'){this.value='CKEeditorOFF';body_myckeditor_exec();document.getElementById('body_bbcode_onoff').checked=false;document.getElementById('body_bbcode_buttons_pre').style.display='none';document.getElementById('body_bbcode_buttons_post').style.display='none';}else{this.value='CKEeditorON';body_myckeditor_remove();}"/>
							<br />
						<?php endif; ?>
						<?php echo smarty_function_xoopsdhtmltarea(array('name' => 'body','cols' => '60','rows' => '20','value' => $this->_tpl_vars['content']['body'],'pre_style' => "display:none;",'post_style' => "display:none;"), $this);?>

					<?php endif; ?>
				<?php endif; ?>
			</td>
		</tr>

		<!-- body reference for a waiting content -->
		<?php if ($this->_tpl_vars['content']['body_waiting'] && $this->_tpl_vars['page'] != 'makecontent'): ?>
		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head pico_waiting"><?php echo @_MD_PICO_TH_BODY_WAITING; ?>
</th>
			<td class="even pico_waiting"><?php echo ((is_array($_tmp=$this->_tpl_vars['content']['body_waiting'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
		</tr>
		<?php endif; ?>

		<!-- filters -->
		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head"><label for="filters"><?php echo @_MD_PICO_TH_FILTERS; ?>
</label></th>
			<td class="even">
				<ul>
				<?php $_from = $this->_tpl_vars['content']['filter_infos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['filter_name'] => $this->_tpl_vars['filter']):
?>
					<li title="<?php echo $this->_tpl_vars['filter']['desc']; ?>
"><input type="checkbox" name="filter_enabled_<?php echo $this->_tpl_vars['filter_name']; ?>
" id="filter_enabled_<?php echo $this->_tpl_vars['filter_name']; ?>
" value="1" <?php if ($this->_tpl_vars['filter']['enabled']): ?>checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['filter']['fixed']): ?>disabled="disabled"<?php endif; ?> /><input type="text" name="filter_weight_<?php echo $this->_tpl_vars['filter_name']; ?>
" id="filter_weight_<?php echo $this->_tpl_vars['filter_name']; ?>
" value="<?php echo $this->_tpl_vars['filter']['weight']; ?>
" size="3" class="pico_number_only"  /> <?php echo $this->_tpl_vars['filter']['title']; ?>
</li>
				<?php endforeach; endif; unset($_from); ?>
				</ul>
			</td>
		</tr>

		<!-- tags -->
		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head"><label for="tags"><?php echo @_MD_PICO_TH_TAGS; ?>
</label></th>
			<td class="even">
				<input type="text" name="tags" id="tags" size="60" maxlength="255" value="<?php echo $this->_tpl_vars['content']['tags']; ?>
" />
				<?php echo @_MD_PICO_TH_TAGSDSC; ?>

			</td>
		</tr>

		<!-- weight -->
		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head"><label for="weight"><?php echo @_MD_PICO_TH_WEIGHT; ?>
</label></th>
			<td class="even">
				<input type="text" name="weight" id="weight" size="5" maxlength="10" value="<?php echo $this->_tpl_vars['content']['weight']; ?>
" class="pico_number_only" />
			</td>
		</tr>

		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head">
				<?php echo @_MD_PICO_TH_CONTENTOPTIONS; ?>

			</th>

			<td class="even">

				<!-- visible -->
				<input type="checkbox" name="visible" id="visible" value="1" <?php if ($this->_tpl_vars['content']['visible']): ?>checked="checked"<?php endif; ?> />
				<label for="visible"><?php echo @_MD_PICO_LABEL_VISIBLE; ?>
</label>
				<br />

				<!-- show in navi -->
				<input type="checkbox" name="show_in_navi" id="show_in_navi" value="1" <?php if ($this->_tpl_vars['content']['show_in_navi']): ?>checked="checked"<?php endif; ?> />
				<label for="show_in_navi"><?php echo @_MD_PICO_LABEL_SHOWINNAVI; ?>
</label>
				<br />

				<!-- show in menu -->
				<input type="checkbox" name="show_in_menu" id="show_in_menu" value="1" <?php if ($this->_tpl_vars['content']['show_in_menu']): ?>checked="checked"<?php endif; ?> />
				<label for="show_in_menu"><?php echo @_MD_PICO_LABEL_SHOWINMENU; ?>
</label>
				<br />

				<!-- allow comment -->
				<input type="checkbox" name="allow_comment" id="allow_comment" value="1" <?php if ($this->_tpl_vars['content']['allow_comment']): ?>checked="checked"<?php endif; ?> />
				<label for="allow_comment"><?php echo @_MD_PICO_LABEL_ALLOWCOMMENT; ?>
</label>
				<br />

				<!-- use body cache -->
				<input type="checkbox" name="use_cache" id="use_cache" value="1" <?php if ($this->_tpl_vars['content']['use_cache']): ?>checked="checked"<?php endif; ?> />
				<label for="use_cache"><?php echo @_MD_PICO_LABEL_USECACHE; ?>
</label>
				<br />
				<?php echo @_MD_PICO_NOTE_USECACHEDSC; ?>

				<br />

				<?php if ($this->_tpl_vars['category']['isadminormod']): ?>
				<!-- locked -->
				<input type="checkbox" name="locked" id="locked" value="1" <?php if ($this->_tpl_vars['content']['locked']): ?>checked="checked"<?php endif; ?> />
				<label for="locked"><?php echo @_MD_PICO_LABEL_LOCKED; ?>
</label>
				<br />
				<?php endif; ?>

			</td>
		</tr>

		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head"><?php echo @_MD_PICO_CREATED; ?>
</th>
			<td class="even">
				<?php echo $this->_tpl_vars['content_base']['poster_uname']; ?>
(<?php echo $this->_tpl_vars['content_base']['poster_uid']; ?>
)
				<?php if ($this->_tpl_vars['category']['isadminormod'] && $this->_tpl_vars['page'] == 'contentmanager'): ?>
					<input type="text" name="poster_uid" id="poster_uid" size="4" value="<?php echo $this->_tpl_vars['content']['poster_uid']; ?>
" />
				<?php endif; ?>
				<br />
				<?php echo $this->_tpl_vars['content_base']['created_time_formatted']; ?>

				<?php if ($this->_tpl_vars['category']['isadminormod']): ?>
					<?php if ($this->_tpl_vars['content']['specify_created_time']): ?>
						<?php $this->assign('specify_created_time_checked', "checked='checked'"); ?>
					<?php else: ?>
						<?php $this->assign('created_time_style', "display:none;"); ?>
					<?php endif; ?>
					<input type="checkbox" name="specify_created_time" id="specify_created_time" value="1" onclick="if(this.checked){xoopsGetElementById('created_time').style.display='inline';}else{xoopsGetElementById('created_time').style.display='none'}" <?php echo $this->_tpl_vars['specify_created_time_checked']; ?>
 /><label for="specify_created_time" ><?php echo @_MD_PICO_LABEL_SPECIFY_DATETIME; ?>
</label>
					<input type="text" name="created_time" id="created_time" size="24" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['content']['created_time_formatted'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="<?php echo $this->_tpl_vars['created_time_style']; ?>
" />
				<?php endif; ?>
			</td>
		</tr>

		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head"><?php echo @_MD_PICO_MODIFIED; ?>
</th>
			<td class="even">
				<?php echo $this->_tpl_vars['content_base']['modifier_uname']; ?>
(<?php echo $this->_tpl_vars['content_base']['modifier_uid']; ?>
)
				<?php if ($this->_tpl_vars['category']['isadminormod'] && $this->_tpl_vars['page'] == 'contentmanager'): ?>
					<input type="text" name="modifier_uid" id="modifier_uid" size="4" value="<?php echo $this->_tpl_vars['content']['modifier_uid']; ?>
" />
				<?php endif; ?>
				<br />
				<?php echo $this->_tpl_vars['content_base']['modified_time_formatted']; ?>

				<?php if ($this->_tpl_vars['category']['isadminormod']): ?>
					<?php if ($this->_tpl_vars['content']['specify_modified_time']): ?>
						<?php $this->assign('specify_modified_time_checked', "checked='checked'"); ?>
					<?php else: ?>
						<?php $this->assign('modified_time_style', "display:none;"); ?>
					<?php endif; ?>
					<input type="checkbox" name="specify_modified_time" id="specify_modified_time" value="1" onclick="if(this.checked){xoopsGetElementById('modified_time').style.display='inline';}else{xoopsGetElementById('modified_time').style.display='none'}" <?php echo $this->_tpl_vars['specify_modified_time_checked']; ?>
 /><label for="specify_modified_time" ><?php echo @_MD_PICO_LABEL_SPECIFY_DATETIME; ?>
</label>
					<input type="text" name="modified_time" id="modified_time" size="24" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['content']['modified_time_formatted'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="<?php echo $this->_tpl_vars['modified_time_style']; ?>
 " />
				<?php endif; ?>
			</td>
		</tr>

		<?php if ($this->_tpl_vars['category']['isadminormod']): ?>
		<tr valign="top" align="<?php echo @_ALIGN_START; ?>
">
			<th class="head"><?php echo @_MD_PICO_EXPIRING; ?>
</th>
			<td class="even">
				<?php echo $this->_tpl_vars['content_base']['expiring_time_formatted']; ?>

					<?php if ($this->_tpl_vars['content']['specify_expiring_time']): ?>
						<?php $this->assign('specify_expiring_time_checked', "checked='checked'"); ?>
					<?php else: ?>
						<?php $this->assign('expiring_time_style', "display:none;"); ?>
					<?php endif; ?>
					<input type="checkbox" name="specify_expiring_time" id="specify_expiring_time" value="1" onclick="if(this.checked){xoopsGetElementById('expiring_time').style.display='inline';}else{xoopsGetElementById('expiring_time').style.display='none'}" <?php echo $this->_tpl_vars['specify_expiring_time_checked']; ?>
 /><label for="specify_expiring_time" ><?php echo @_MD_PICO_LABEL_SPECIFY_DATETIME; ?>
</label>
					<input type="text" name="expiring_time" id="expiring_time" size="24" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['content']['expiring_time_formatted'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="<?php echo $this->_tpl_vars['expiring_time_style']; ?>
 " />
			</td>
		</tr>
		<?php endif; ?>

	</table>

	<p class="pico_submit">
		<input type="submit" class="formButton" name="contentman_preview"  id="contentman_preview" value="<?php echo @_PREVIEW; ?>
" />
		<input type="submit" class="formButton" name="contentman_post"  id="contentman_post" value="<?php echo @_MD_PICO_BTN_SUBMITEDITING; ?>
" />
		<?php if (! $this->_tpl_vars['content']['approval'] && $this->_tpl_vars['category']['isadminormod'] && $this->_tpl_vars['page'] != 'makecontent'): ?>
			<input type="submit" name="contentman_copyfromwaiting" value="<?php echo @_MD_PICO_BTN_COPYFROMWAITING; ?>
" onclick="return confirm('<?php echo @_MD_PICO_MSG_CONFIRMCOPYFROMWAITING; ?>
')" />
		<?php elseif ($this->_tpl_vars['page'] == 'contentmanager'): ?>
			<input type="submit" class="formButton" name="contentman_post"  id="contentman_saveas" value="<?php echo @_MD_PICO_BTN_SUBMITSAVEAS; ?>
" onclick="document.contentform.action='<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=makecontent&amp;content_id=0';return confirm('<?php echo @_MD_PICO_MSG_CONFIRMSAVEASCONTENT; ?>
');" />
		<?php endif; ?>
		<?php if ($this->_tpl_vars['page'] == 'contentmanager' && $this->_tpl_vars['category']['can_delete']): ?>
			<input type="submit" name="contentman_delete" value="<?php echo @_DELETE; ?>
" onclick="return confirm('<?php echo @_MD_PICO_MSG_CONFIRMDELETECONTENT; ?>
')" />
		<?php endif; ?>
	</p>
</form>

<!-- Start Form Vaidation JavaScript //-->
<script type="text/javascript">
<!--//
function xoopsFormValidate_contentform() {
	myform = window.document.contentform;
	if ( myform.subject.value == "" ) {
		window.alert("<?php echo ((is_array($_tmp=@_MD_PICO_TH_SUBJECT)) ? $this->_run_mod_handler('string_format', true, $_tmp, @_FORM_ENTER) : smarty_modifier_string_format($_tmp, @_FORM_ENTER)); ?>
");
		myform.subject.focus();
		myform.subject.style.backgroundColor='#FFFFCC';
		return false;
	}
	return true;
}
//-->
</script>
<!-- End Form Vaidation JavaScript //-->

<?php if ($this->_tpl_vars['page'] != 'makecontent'): ?>

<h2 class="pico_title"><?php echo @_MD_PICO_HISTORY; ?>
</h2>
<ul class="pico_content_history_list">
	<?php $_from = $this->_tpl_vars['content_histories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['history']):
?>
		<li>
			<?php echo $this->_tpl_vars['history']['modified_time_formatted']; ?>

			-
			<?php echo $this->_tpl_vars['history']['modifier_uname']; ?>

			(<?php echo ((is_array($_tmp=$this->_tpl_vars['history']['body_size'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php echo @_MD_PICO_BYTE; ?>
)
			<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=viewhistory&amp;content_history_id=<?php echo $this->_tpl_vars['history']['id']; ?>
"><?php echo @_MD_PICO_REFERIT; ?>
</a>
			-
			<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=downloadhistory&amp;content_history_id=<?php echo $this->_tpl_vars['history']['id']; ?>
"><?php echo @_MD_PICO_DOWNLOADIT; ?>
</a>
			-
			<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=diffhistory&amp;older_history_id=<?php echo $this->_tpl_vars['history']['id']; ?>
&amp;newer_history_id=0"><?php echo @_MD_PICO_DIFF2NOW; ?>
</a>
			<?php if ($this->_tpl_vars['history']['prev_id']): ?>
				-
				<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=diffhistory&amp;older_history_id=<?php echo $this->_tpl_vars['history']['prev_id']; ?>
&amp;newer_history_id=<?php echo $this->_tpl_vars['history']['id']; ?>
"><?php echo @_MD_PICO_DIFFFROMPREV; ?>
</a>
			<?php endif; ?>
		</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<?php endif; ?>

</div>