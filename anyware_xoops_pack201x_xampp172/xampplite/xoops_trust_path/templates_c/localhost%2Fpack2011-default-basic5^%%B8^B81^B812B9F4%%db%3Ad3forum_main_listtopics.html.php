<?php /* Smarty version 2.6.26, created on 2012-01-02 18:36:44
         compiled from db:d3forum_main_listtopics.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:d3forum_main_listtopics.html', 9, false),array('modifier', 'string_format', 'db:d3forum_main_listtopics.html', 82, false),array('function', 'html_options', 'db:d3forum_main_listtopics.html', 66, false),array('function', 'cycle', 'db:d3forum_main_listtopics.html', 106, false),)), $this); ?>
<!-- start module contents -->
<div id="main_listtopics" class="clearfix">
<!-- breadcrumbs -->
<?php if ($this->_tpl_vars['mod_config']['show_breadcrumbs']): ?>
<div class="d3f_breadcrumbs">
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php"><?php echo @_MD_D3FORUM_TOP; ?>
</a>
	<?php $_from = $this->_tpl_vars['category']['paths_raw']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parent_id'] => $this->_tpl_vars['parent_title_raw']):
?>
	&nbsp;&gt;&nbsp;
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?cat_id=<?php echo $this->_tpl_vars['parent_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['parent_title_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>

<!-- marine modifi -->

<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/fk2.png"><?php echo $this->_tpl_vars['forum']['desc']; ?>
(<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_moderators.html", 'smarty_include_vars' => array('target' => $this->_tpl_vars['forum'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>)
<?php if ($this->_tpl_vars['forum']['external_link_format']): ?>
<?php elseif ($this->_tpl_vars['forum']['can_post']): ?>
<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=newtopic&forum_id=<?php echo $this->_tpl_vars['forum']['id']; ?>
" target="_self"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/b001.png" class="d3f_main_listtopics_button"></a>
<?php endif; ?>

<!-- forum controller -->
<ul class="d3f_ctrl">
	<!-- new topic -->
	<?php if ($this->_tpl_vars['forum']['external_link_format']): ?>
		<li><?php echo @_MD_D3FORUM_FORUMASCOMMENT_DESC; ?>
</li>
	<?php elseif ($this->_tpl_vars['forum']['can_post']): ?>
		<li><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=newtopic&amp;forum_id=<?php echo $this->_tpl_vars['forum']['id']; ?>
"><?php echo @_MD_D3FORUM_POSTASNEWTOPICTOTHISFORUM; ?>
</a></li>
	<?php else: ?>
		<li><?php echo @_MD_D3FORUM_CANTCREATENEWTOPICTHISFORUM; ?>
</li>
	<?php endif; ?>

	<!-- guest can post or not -->
	<?php if (! $this->_tpl_vars['xoops_isuser']): ?>
		<?php if ($this->_tpl_vars['forum']['can_post']): ?>
			<li><?php echo @_MD_D3FORUM_GUESTSCANPOST_DESC; ?>
</li>
		<?php else: ?>
			<li><?php echo @_MD_D3FORUM_GUESTSCANNOTPOST_DESC; ?>
</li>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['forum']['isadminormod']): ?>
	<!-- edit forum -->
		<li><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=forummanager&amp;forum_id=<?php echo $this->_tpl_vars['forum']['id']; ?>
"><?php echo @_MD_D3FORUM_LINK_FORUMMANAGER; ?>
</a></li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
		<li><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=forum_access&amp;forum_id=<?php echo $this->_tpl_vars['forum']['id']; ?>
"><?php echo @_MD_D3FORUM_LINK_FORUMACCESS; ?>
</a></li>
	<?php endif; ?>

	<!-- rss -->
	<li><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=rss&amp;forum_id=<?php echo $this->_tpl_vars['forum']['id']; ?>
&amp;odr=1"><?php echo @_MD_D3FORUM_LINK_FORUMRSS; ?>
</a></li>
</ul>

<h2 class="d3f_head"><?php echo $this->_tpl_vars['forum']['title']; ?>
</h2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_d3comment_summary.html", 'smarty_include_vars' => array('topic' => $this->_tpl_vars['d3comment_info'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="d3f_bbsviewctrl">
	<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php" method="get">
	<?php echo $this->_tpl_vars['forum_selection_sort']; ?>

		<input type="hidden" name="forum_id" value="<?php echo $this->_tpl_vars['forum']['id']; ?>
" />
		<input type="hidden" name="external_link_id" value="<?php echo $this->_tpl_vars['query']['external_link_id']; ?>
" />
		<input type="text" size="12" name="txt" value="<?php echo $this->_tpl_vars['query']['txt']; ?>
" />
		<?php if ($this->_tpl_vars['mod_config']['use_solved']): ?>
		<select name="solved">
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['solved_options'],'selected' => $this->_tpl_vars['query']['solved']), $this);?>

		</select>
		<?php endif; ?>
		<select name="odr">
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['odr_options'],'selected' => $this->_tpl_vars['query']['odr']), $this);?>

		</select>
		<input type="submit" value="<?php echo @_MD_D3FORUM_BTN_REFRESHTOPICS; ?>
" title="<?php echo @_MD_D3FORUM_BTN_REFRESHTOPICS; ?>
" />
	</form>
</div>

<?php if ($this->_tpl_vars['pagenav']): ?><div class="d3f_pagenav"><?php echo $this->_tpl_vars['pagenav']; ?>
</div><?php endif; ?>

<!-- start forum main table -->
<table class="outer d3f_table">
<thead>
<tr class="head">
	<th colspan="2" abbr="<?php echo @_MD_D3FORUM_TOPIC; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['topic_hits'])) ? $this->_run_mod_handler('string_format', true, $_tmp, @_MD_D3FORUM_FMT_TOPICHITS) : smarty_modifier_string_format($_tmp, @_MD_D3FORUM_FMT_TOPICHITS)); ?>
</th>
	<th abbr="<?php echo @_MD_D3FORUM_REPLIES; ?>
"><?php echo @_MD_D3FORUM_REPLIES; ?>
</th>
	<th abbr="<?php echo @_MD_D3FORUM_VIEWS; ?>
"><?php echo @_MD_D3FORUM_VIEWS; ?>
</th>
	<?php if ($this->_tpl_vars['mod_config']['use_vote']): ?>
	<th abbr="<?php echo @_MD_D3FORUM_VOTECOUNT; ?>
"><?php echo @_MD_D3FORUM_VOTECOUNT; ?>
</th>
	<th abbr="<?php echo @_MD_D3FORUM_VOTEPOINTAVG; ?>
"><?php echo @_MD_D3FORUM_VOTEPOINTAVG; ?>
</th>
	<?php endif; ?>
	<th abbr="<?php echo @_MD_D3FORUM_FIRSTPOST; ?>
"><?php echo @_MD_D3FORUM_FIRSTPOST; ?>
</th>
	<th abbr="<?php echo @_MD_D3FORUM_LASTPOST; ?>
"><?php echo @_MD_D3FORUM_LASTPOST; ?>
</th>
</tr>
</thead>

<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
<?php if ($this->_tpl_vars['topic']['sticky']): ?>
	<?php $this->assign('topic_icon_src', ($this->_tpl_vars['mod_imageurl'])."/topic_sticky".($this->_tpl_vars['topic']['bit_new']).".gif"); ?>
	<?php $this->assign('topic_icon_alt', @_MD_D3FORUM_TOPICSTICKY); ?>
<?php elseif ($this->_tpl_vars['topic']['invisible']): ?>
	<?php $this->assign('topic_icon_src', ($this->_tpl_vars['mod_imageurl'])."/topic_invisible.gif"); ?>
	<?php $this->assign('topic_icon_alt', @_MD_D3FORUM_ALT_INVISIBLE); ?>
<?php else: ?>
	<?php $this->assign('topic_icon_src', ($this->_tpl_vars['mod_imageurl'])."/topic_".($this->_tpl_vars['topic']['bit_new']).($this->_tpl_vars['topic']['bit_hot']).".gif"); ?>
	<?php $this->assign('topic_icon_alt', ""); ?>
<?php endif; ?>
<!-- start forum topic -->
<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
	<td class="d3f_mainicon"><img src="<?php echo $this->_tpl_vars['topic_icon_src']; ?>
" alt="<?php echo $this->_tpl_vars['topic_icon_alt']; ?>
" /></td>
	<td class="d3f_topictitle"><?php if ($this->_tpl_vars['topic']['locked']): ?>
		<img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_status_locked1.gif" alt="<?php echo @_MD_D3FORUM_TOPICLOCKED; ?>
" />
	<?php endif; ?>
	<?php if ($this->_tpl_vars['mod_config']['use_solved'] && ! $this->_tpl_vars['topic']['solved']): ?>
		<?php if ($this->_tpl_vars['forum']['isadminormod']): ?>
			<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=update_topic_solved&amp;topic_id=<?php echo $this->_tpl_vars['topic']['id']; ?>
&amp;ret_name=forum_id&amp;ret_val=<?php echo $this->_tpl_vars['forum']['id']; ?>
" title="<?php echo @_MD_D3FORUM_SOLVED_TURNON; ?>
"><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_status_solved0.gif" alt="<?php echo @_MD_D3FORUM_ALT_SOLVEDNO; ?>
" /></a>
		<?php else: ?>
			<img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_status_solved0.gif" alt="<?php echo @_MD_D3FORUM_ALT_SOLVEDNO; ?>
" />
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['mod_config']['allow_mark'] && $this->_tpl_vars['uid'] && $this->_tpl_vars['topic']['u2t_marked']): ?>
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=update_u2t_marked&amp;topic_id=<?php echo $this->_tpl_vars['topic']['id']; ?>
&amp;ret_name=forum_id&amp;ret_val=<?php echo $this->_tpl_vars['forum']['id']; ?>
" title="<?php echo @_MD_D3FORUM_MARK_TURNOFF; ?>
"><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_status_marked1.gif" alt="<?php echo @_MD_D3FORUM_ALT_MARKEDYES; ?>
" /></a>
	<?php endif; ?>
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?topic_id=<?php echo $this->_tpl_vars['topic']['id']; ?>
"><?php echo $this->_tpl_vars['topic']['title']; ?>
</a><?php echo $this->_tpl_vars['topic']['topic_page_jump']; ?>
</td>
	<td><?php echo $this->_tpl_vars['topic']['replies']; ?>
</td>
	<td><?php echo $this->_tpl_vars['topic']['views']; ?>
</td>
	<?php if ($this->_tpl_vars['mod_config']['use_vote']): ?>
	<td><?php echo $this->_tpl_vars['topic']['votes_count']; ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['topic']['votes_avg'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
	<?php endif; ?>
	<td class="d3f_posters"><?php echo $this->_tpl_vars['topic']['first_post_time_formatted']; ?>
<br />
	<?php echo $this->_tpl_vars['topic']['first_post_uname']; ?>
 <a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?post_id=<?php echo $this->_tpl_vars['topic']['first_post_id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/posticon<?php echo $this->_tpl_vars['topic']['first_post_icon']; ?>
.gif" alt="<?php echo $this->_tpl_vars['topic']['first_post_subject']; ?>
" /></a></td>
	<td class="d3f_posters"><?php if ($this->_tpl_vars['topic']['replies'] > 0): ?><?php echo $this->_tpl_vars['topic']['last_post_time_formatted']; ?>
<br />
	<?php echo $this->_tpl_vars['topic']['last_post_uname']; ?>
 <a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?post_id=<?php echo $this->_tpl_vars['topic']['last_post_id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/posticon<?php echo $this->_tpl_vars['topic']['last_post_icon']; ?>
.gif" alt="<?php echo $this->_tpl_vars['topic']['last_post_subject']; ?>
" /></a><?php endif; ?></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<!-- end forum topic -->
</table>
</form>
<!-- end forum main table -->

<?php if ($this->_tpl_vars['pagenav']): ?><div class="d3f_pagenav"><?php echo $this->_tpl_vars['pagenav']; ?>
</div><?php endif; ?>

<div class="d3f_iconexps">
<ul class="d3f_iconexp">
	<li><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_11.gif" alt="" width="18"  height="18" /> = <?php echo @_MD_D3FORUM_TOPICNEWPOSTS; ?>
</li>
	<li><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_01.gif" alt="" width="18"  height="18" /> = <?php echo @_MD_D3FORUM_TOPICNONEWPOSTS; ?>
</li>
	<li><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_invisible.gif" alt="" width="18"  height="18" /> = <?php echo @_MD_D3FORUM_TOPICINVISIBLE; ?>
</li>
	<li><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_sticky0.gif" alt="" width="18"  height="18" /> = <?php echo @_MD_D3FORUM_TOPICSTICKY; ?>
</li>
</ul>
<ul class="d3f_iconexp">
	<li><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_status_locked1.gif" alt="" width="18"  height="18" /> = <?php echo @_MD_D3FORUM_TOPICLOCKED; ?>
</li>
<?php if ($this->_tpl_vars['mod_config']['use_solved'] && ! $this->_tpl_vars['topic']['solved']): ?><!-- marine modifi -->
	<li><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_status_solved0.gif" alt="" width="18"  height="18" /> = <?php echo @_MD_D3FORUM_ALT_SOLVEDNO; ?>
</li>
<?php endif; ?><!-- marine modifi -->
<?php if ($this->_tpl_vars['mod_config']['allow_mark'] && $this->_tpl_vars['uid'] && $this->_tpl_vars['topic']['u2t_marked']): ?><!-- marine modifi -->
	<li><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/topic_status_marked1.gif" alt="" width="18"  height="18" /> = <?php echo @_MD_D3FORUM_ALT_MARKEDYES; ?>
</li>
<?php endif; ?><!-- marine modifi -->
</ul>
</div>

<!-- forum jumpbox -->
<form name="forum_jump_box" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php" method="get" style="clear:both;" class="d3f_form">
	<p>
		<select name="forum_id"><?php echo $this->_tpl_vars['forum_jumpbox_options']; ?>
</select>
		<input type="submit" value="<?php echo @_MD_D3FORUM_BTN_JUMPTOFORUM; ?>
" />
		&nbsp;
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=search"><?php echo @_MD_D3FORUM_LINK_ADVSEARCH; ?>
</a>
	</p>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- end module contents -->
