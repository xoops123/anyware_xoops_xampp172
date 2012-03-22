<?php /* Smarty version 2.6.26, created on 2012-01-02 18:37:32
         compiled from db:d3forum_main_listposts.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:d3forum_main_listposts.html', 8, false),)), $this); ?>
<!-- start module contents -->
<div id="main_listposts" class="clearfix">
<div class="d3f_breadcrumbs">
	<?php if ($this->_tpl_vars['mod_config']['show_breadcrumbs']): ?>
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php"><?php echo @_MD_D3FORUM_TOP; ?>
</a>
	&nbsp;&gt;&nbsp;
	<?php $_from = $this->_tpl_vars['category']['paths_raw']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parent_id'] => $this->_tpl_vars['parent_title_raw']):
?>
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?cat_id=<?php echo $this->_tpl_vars['parent_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['parent_title_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
		&nbsp;&gt;&nbsp;
	<?php endforeach; endif; unset($_from); ?>
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?forum_id=<?php echo $this->_tpl_vars['forum']['id']; ?>
"><?php echo $this->_tpl_vars['forum']['title']; ?>
</a>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['prev_topic']['id'] || $this->_tpl_vars['next_topic']['id']): ?>
		(<?php if ($this->_tpl_vars['prev_topic']['id']): ?>
			<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?topic_id=<?php echo $this->_tpl_vars['prev_topic']['id']; ?>
" title="<?php echo $this->_tpl_vars['prev_topic']['title']; ?>
"><?php echo @_MD_D3FORUM_LINK_PREVTOPIC; ?>
</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['prev_topic']['id'] && $this->_tpl_vars['next_topic']['id']): ?>
		 | 
		<?php endif; ?>
		<?php if ($this->_tpl_vars['next_topic']['id']): ?>
			<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?topic_id=<?php echo $this->_tpl_vars['next_topic']['id']; ?>
" title="<?php echo $this->_tpl_vars['next_topic']['title']; ?>
"><?php echo @_MD_D3FORUM_LINK_NEXTTOPIC; ?>
</a>
		<?php endif; ?>)
	<?php endif; ?>
</div>

<h1 class="d3f_title" style="clear:both"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/s001.png"><?php echo $this->_tpl_vars['topic']['title']; ?>
</h1>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_topicbar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_d3comment_summary.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_postorder_links.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- top of posts -->
<div class="d3f_wrap">
<?php $_from = $this->_tpl_vars['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['post']):
?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_eachpost.html", 'smarty_include_vars' => array('post' => $this->_tpl_vars['post'],'caller' => 'listposts','inner_link_format' => "#post_id%s")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; endif; unset($_from); ?>
</div>
<!-- bottom of posts -->


<!-- quick reply form -->
<?php if ($this->_tpl_vars['first_post']['can_reply']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_post_form_quick.html", 'smarty_include_vars' => array('uname' => $this->_tpl_vars['xoops_uname'],'h2_title' => @_MD_D3FORUM_POSTASSAMETOPIC,'quick_form_mode' => 'sametopic','subject_raw' => $this->_tpl_vars['first_post']['subject_raw'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<!-- forum jump -->
<div class="forum_jump">
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
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- end module contents -->