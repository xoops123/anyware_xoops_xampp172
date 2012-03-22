<?php /* Smarty version 2.6.26, created on 2012-01-02 18:51:23
         compiled from db:d3forum_main_post_form.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:d3forum_main_post_form.html', 36, false),array('modifier', 'string_format', 'db:d3forum_main_post_form.html', 53, false),array('function', 'html_options', 'db:d3forum_main_post_form.html', 101, false),array('function', 'xoopsdhtmltarea', 'db:d3forum_main_post_form.html', 113, false),)), $this); ?>
<!-- start module contents -->
<div id="main_post_form">
<?php if ($this->_tpl_vars['mod_config']['show_breadcrumbs']): ?>
<div class="d3f_breadcrumbs">
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php"><?php echo @_MD_D3FORUM_TOP; ?>
</a>
	&nbsp;&gt;&nbsp;
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?cat_id=<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo $this->_tpl_vars['category']['title']; ?>
</a>
	&nbsp;&gt;&nbsp;<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?forum_id=<?php echo $this->_tpl_vars['forum']['id']; ?>
"><?php echo $this->_tpl_vars['forum']['title']; ?>
</a>
	&nbsp;&gt;&nbsp;<?php if ($this->_tpl_vars['topic']['id']): ?><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?topic_id=<?php echo $this->_tpl_vars['topic']['id']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a><?php endif; ?>
</div>
<?php endif; ?>

<h2 class="d3f_title"><?php echo $this->_tpl_vars['formtitle']; ?>
: <?php echo $this->_tpl_vars['forum']['title']; ?>
</h2>

<?php if ($this->_tpl_vars['mode'] == 'edit'): ?>
<p style="background-color:#900;color:#fff;"><strong><?php echo @_MD_D3FORUM_NOTICE_YOUAREEDITING; ?>
</strong></p>
<?php endif; ?>

<?php if ($this->_tpl_vars['ispreview']): ?>
<dl id="post_preview" class="outer">
	<dt class="head"><?php echo $this->_tpl_vars['preview_subject']; ?>
</dt>
	<dd class="odd"><?php echo $this->_tpl_vars['preview_message']; ?>
</dd>
</dl>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_d3comment_summary.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="postform" id="postform" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=post" method="post">

	<p style="display:none;">
	<input type="hidden" name="mode" id="mode" value="<?php echo $this->_tpl_vars['mode']; ?>
" />
	<input type="hidden" name="pid" id="pid" value="<?php echo $this->_tpl_vars['pid']; ?>
" />
	<input type="hidden" name="post_id" id="post_id" value="<?php echo $this->_tpl_vars['post_id']; ?>
" />
	<input type="hidden" name="topic_id" id="topic_id" value="<?php echo $this->_tpl_vars['topic_id']; ?>
" />
	<input type="hidden" name="forum_id" id="forum_id" value="<?php echo $this->_tpl_vars['forum']['id']; ?>
" />
	<input type="hidden" name="external_link_id" id="external_link_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['external_link_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="reference_quote" id="reference_quote" value="<?php echo $this->_tpl_vars['reference_quote']; ?>
" />
	</p>

	<table class="outer d3f_form_table">
		<tr valign="top" align="left">
			<th class="d3f_head"><label for="subject"><?php echo @_MD_D3FORUM_SUBJECT; ?>
</label></th>
			<td class="even">
				<input type="text" name="subject" id="subject" maxlength="255" value="<?php echo $this->_tpl_vars['subject']; ?>
" />
			</td>
		</tr>

		<?php if ($this->_tpl_vars['post']['poster_uid']): ?>
		<!-- begin edit USER's post -->
		<tr valign="top" align="left">
			<th class="d3f_head"><?php echo @_MD_D3FORUM_TH_UNAME; ?>
</th>
			<td class="even">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['post']['poster_uname'])) ? $this->_run_mod_handler('string_format', true, $_tmp, @_MD_D3FORUM_FMT_UNAME) : smarty_modifier_string_format($_tmp, @_MD_D3FORUM_FMT_UNAME)); ?>

			</td>
		</tr>
		<!-- end edit USER's post -->
		<?php elseif ($this->_tpl_vars['uid'] && ! $this->_tpl_vars['post']['id']): ?>
		<!-- begin post by USER newly -->
		<tr valign="top" align="left">
			<th class="d3f_head"><?php echo @_MD_D3FORUM_TH_UNAME; ?>
</th>
			<td class="even">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['uname'])) ? $this->_run_mod_handler('string_format', true, $_tmp, @_MD_D3FORUM_FMT_UNAME) : smarty_modifier_string_format($_tmp, @_MD_D3FORUM_FMT_UNAME)); ?>

			</td>
		</tr>
		<!-- end post by USER newly -->
		<?php else: ?>
		<!-- begin GUEST's new post or edit GUEST's post by somebody -->
		<tr valign="top" align="left">
			<th class="d3f_head"><label for="guest_name"><?php echo @_MD_D3FORUM_TH_GUESTNAME; ?>
</label></th>
			<td class="even">
				<input type="text" name="guest_name" id="guest_name" value="<?php echo $this->_tpl_vars['guest_name']; ?>
" size="25" maxlength="30" />
			</td>
		</tr>
		<tr valign="top" align="left">
			<th class="d3f_head"><label for="guest_pass"><?php echo @_MD_D3FORUM_TH_GUESTPASSWORD; ?>
</label></th>
			<td class="even">
				<input type="password" name="guest_pass" id="guest_pass" value="<?php echo $this->_tpl_vars['guest_pass']; ?>
" size="20" maxlength="20" />
			</td>
		</tr>
		<!-- end GUEST's new post or edit GUEST's post by somebody -->
		<?php endif; ?>

		<tr valign="top" align="left">
			<th class="d3f_head"><label for="message_icon"><?php echo @_MD_D3FORUM_MESSAGEICON; ?>
</label></th>
			<td class="even">
				<select name="icon" id="message_icon">
					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['icon_options'],'selected' => $this->_tpl_vars['icon_selected']), $this);?>

				</select>
			</td>
		</tr>
		<tr valign="top" align="left">
			<th class="d3f_head"><label for="message"><?php echo @_MD_D3FORUM_TH_BODY; ?>
</label></th>
			<td class="even">
				<?php if ($this->_tpl_vars['body_wysiwyg']): ?>
					<?php echo $this->_tpl_vars['body_wysiwyg']; ?>

				<?php else: ?>
					<input type="checkbox" id="message_bbcode_onoff" onclick="if(this.checked){xoopsGetElementById('message_bbcode_buttons_pre').style.display='block';xoopsGetElementById('message_bbcode_buttons_post').style.display='block'}else{xoopsGetElementById('message_bbcode_buttons_pre').style.display='none';xoopsGetElementById('message_bbcode_buttons_post').style.display='none'};" /><label for="message_bbcode_onoff"><?php echo @_MD_D3FORUM_LABEL_INPUTHELPER; ?>
</label>
					<br />
					<?php echo smarty_function_xoopsdhtmltarea(array('name' => 'message','rows' => '15','value' => $this->_tpl_vars['message'],'pre_style' => "display:none;",'post_style' => "display:none;"), $this);?>

				<?php endif; ?>
				<?php if ($this->_tpl_vars['reference_quote']): ?>
					<br />
					<input type="button" name="quote" id="quote" onclick="d3forum_quote_message();" value="<?php echo @_MD_D3FORUM_BTN_QUOTE; ?>
" />
				<?php endif; ?>
			</td>
		</tr>
		<tr valign="top" align="left">
			<th class="d3f_head"><?php echo @_MD_D3FORUM_OPTIONS; ?>
</th>
			<td class="even">

				<!-- approval -->
				<?php if ($this->_tpl_vars['forum']['isadminormod'] && $this->_tpl_vars['mode'] == 'edit' && ! $this->_tpl_vars['post']['approval']): ?>
				<input type="checkbox" name="approval" id="approval" value="1" <?php echo $this->_tpl_vars['approval_checked']; ?>
 /><label for="approval"><?php echo @_MD_D3FORUM_LABEL_DOAPPROVAL; ?>
</label>
				<br />
				<?php endif; ?>

				<!-- solve or not -->
				<?php if ($this->_tpl_vars['can_change_solved']): ?>
				<input type="checkbox" name="solved" id="solved" value="1" <?php echo $this->_tpl_vars['solved_checked']; ?>
 /><label for="solved"><?php echo @_MD_D3FORUM_TH_SOLVED; ?>
</label>
				<br />
				<?php endif; ?>

				<!-- mark -->
				<?php if ($this->_tpl_vars['allow_mark']): ?>
				<input type="checkbox" name="u2t_marked" id="u2t_marked" value="1" <?php echo $this->_tpl_vars['u2t_marked_checked']; ?>
 /><label for="u2t_marked"><?php echo @_MD_D3FORUM_MARK_TURNON; ?>
</label>
				<br />
				<?php endif; ?>

				<!-- html -->
				<?php if ($this->_tpl_vars['allow_html']): ?>
				<input type="checkbox" name="html" id="html" value="1" <?php echo $this->_tpl_vars['html_checked']; ?>
 /><label for="html"><?php echo @_MD_D3FORUM_ENABLEHTML; ?>
</label>
				<br />
				<?php endif; ?>

				<fieldset>
				<legend>
					<input type="checkbox" id="d3f_post_advanced_options_onoff" onclick="if(this.checked){xoopsGetElementById('d3f_post_advanced_options').style.display='block';}else{xoopsGetElementById('d3f_post_advanced_options').style.display='none';};" /><label for="d3f_post_advanced_options_onoff"><?php echo @_MD_D3FORUM_LABEL_ADVANCEDOPTIONS; ?>
</label>
				</legend>

				<div id="d3f_post_advanced_options" style="display:none;">

					<!-- smiley -->
					<input type="checkbox" name="smiley" id="smiley" value="1" <?php echo $this->_tpl_vars['smiley_checked']; ?>
 /><label for="smiley"><?php echo @_MD_D3FORUM_ENABLESMILEY; ?>
</label>
					<br />
	
					<!-- xcode -->
					<input type="checkbox" name="xcode" id="xcode" value="1" <?php echo $this->_tpl_vars['xcode_checked']; ?>
 /><label for="xcode"><?php echo @_MD_D3FORUM_ENABLEXCODE; ?>
</label>
					<br />
	
					<!-- br -->
					<input type="checkbox" name="br" id="br" value="1" <?php echo $this->_tpl_vars['br_checked']; ?>
 /><label for="br"><?php echo @_MD_D3FORUM_ENABLEBR; ?>
</label>
					<br />
	
					<!-- number_entity -->
					<input type="checkbox" name="number_entity" id="number_entity" value="1" <?php echo $this->_tpl_vars['number_entity_checked']; ?>
 /><label for="number_entity"><?php echo @_MD_D3FORUM_ENABLENUMBERENTITY; ?>
</label>
					<br />
	
					<!-- special_entity -->
					<input type="checkbox" name="special_entity" id="special_entity" value="1" <?php echo $this->_tpl_vars['special_entity_checked']; ?>
 /><label for="special_entity"><?php echo @_MD_D3FORUM_ENABLESPECIALENTITY; ?>
</label>
					<br />
	
					<!-- hide_uid -->
					<?php if ($this->_tpl_vars['allow_hideuid']): ?>
					<input type="checkbox" name="hide_uid" id="hide_uid" value="1" <?php echo $this->_tpl_vars['hide_uid_checked']; ?>
 /><label for="hide_uid"><?php echo @_MD_D3FORUM_LABEL_HIDEUID; ?>
</label>
					<br />
					<?php endif; ?>
	
					<!-- signature -->
					<?php if ($this->_tpl_vars['allow_sig']): ?>
					<input type="checkbox" name="attachsig" id="attachsig" value="1" <?php echo $this->_tpl_vars['attachsig_checked']; ?>
 /><label for="attachsig"><?php echo @_MD_D3FORUM_LABEL_ATTACHSIG; ?>
</label>
					<br />
					<?php endif; ?>
	
					<!-- notification thread-new_post -->
					<?php if ($this->_tpl_vars['allow_notify']): ?>
					<input type="checkbox" name="notify" id="notify" value="1" <?php echo $this->_tpl_vars['notify_checked']; ?>
 /><label for="notify"><?php echo @_MD_D3FORUM_LABEL_NEWPOSTNOTIFY; ?>
</label>
					<br />
					<?php endif; ?>
	
					<!-- invisible -->
					<?php if ($this->_tpl_vars['forum']['isadminormod']): ?>
					<input type="checkbox" name="invisible" id="invisible" value="1" <?php echo $this->_tpl_vars['invisible_checked']; ?>
 /><label for="invisible"><?php echo @_MD_D3FORUM_LABEL_POSTINVISIBLE; ?>
</label>
					<br />
					<?php endif; ?>

				</div>
				</fieldset>

			</td>
		</tr>
	</table>

	<?php echo $this->_tpl_vars['antispam']['html_in_form']; ?>


	<p class="d3f_submit"><input type="submit" class="formButton" name="contents_preview"  id="contents_preview" value="<?php echo @_PREVIEW; ?>
" />
	<input type="submit" class="formButton" name="contents_submit"  id="contents_submit" value="<?php echo @_SUBMIT; ?>
" onclick="return xoopsFormValidate_postform();" /></p>

</form>

<!-- Start Form Vaidation JavaScript //-->
<script type="text/javascript">
<!--//
<?php echo $this->_tpl_vars['antispam']['js_global']; ?>


function xoopsFormValidate_postform() {
	myform = window.document.postform;
	if ( myform.subject.value.replace(/^\s+|\s+$/g,"") == "" ) { window.alert("<?php echo ((is_array($_tmp=@_MD_D3FORUM_SUBJECT)) ? $this->_run_mod_handler('string_format', true, $_tmp, @_FORM_ENTER) : smarty_modifier_string_format($_tmp, @_FORM_ENTER)); ?>
"); myform.subject.focus(); return false; }
	<?php if (! $this->_tpl_vars['body_wysiwyg']): ?>
	if ( myform.message.value.replace(/^\s+|\s+$/g,"") == "" ) { window.alert("<?php echo @_MD_D3FORUM_ERR_NOMESSAGE; ?>
"); myform.message.focus(); return false; }
	<?php endif; ?>
	<?php echo $this->_tpl_vars['antispam']['js_in_validate_function']; ?>

	return true;
}
function d3forum_quote_message() {
	xoopsGetElementById("message").value = xoopsGetElementById("message").value + xoopsGetElementById("reference_quote").value ;
}
//-->
</script>
<!-- End Form Vaidation JavaScript //-->

<?php if ($this->_tpl_vars['mode'] == 'reply'): ?>
<p><a href="javascript:void(0);" onclick="if(xoopsGetElementById('post_reference').style.display=='none'){xoopsGetElementById('post_reference').style.display='block'}else{xoopsGetElementById('post_reference').style.display='none'};"><?php echo @_MD_D3FORUM_REFERENCEPOST; ?>
</a></p>
<dl id="post_reference" class="outer" <?php if ($this->_tpl_vars['ispreview']): ?>style="display:none;"<?php endif; ?>>
	<dt class="head"><?php echo $this->_tpl_vars['reference_subject']; ?>
</dt>
	<dd class="even"><?php echo @_MD_D3FORUM_BY; ?>
: <?php echo $this->_tpl_vars['reference_name']; ?>
 <?php echo @_MD_D3FORUM_ON; ?>
: <?php echo $this->_tpl_vars['reference_time_formatted']; ?>
</dd>
	<dd class="odd"><?php echo $this->_tpl_vars['reference_message']; ?>
</dd>
</dl>
<?php endif; ?>
</div>
<!-- end module contents -->