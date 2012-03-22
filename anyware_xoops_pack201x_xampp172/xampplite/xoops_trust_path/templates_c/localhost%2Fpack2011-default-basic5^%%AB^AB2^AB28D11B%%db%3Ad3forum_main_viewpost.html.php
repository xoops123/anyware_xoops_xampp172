<?php /* Smarty version 2.6.26, created on 2012-01-02 22:43:59
         compiled from db:d3forum_main_viewpost.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:d3forum_main_viewpost.html', 9, false),array('modifier', 'replace', 'db:d3forum_main_viewpost.html', 39, false),)), $this); ?>
<!-- start module contents -->
<!-- breadcrumbs -->
<?php if ($this->_tpl_vars['mod_config']['show_breadcrumbs']): ?>
<div class="d3f_breadcrumbs">
	<?php echo '<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php">'; ?><?php echo @_MD_D3FORUM_TOP; ?><?php echo '</a>&nbsp;&gt;&nbsp;'; ?><?php $_from = $this->_tpl_vars['category']['paths_raw']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parent_id'] => $this->_tpl_vars['parent_title_raw']):
?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?cat_id='; ?><?php echo $this->_tpl_vars['parent_id']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['parent_title_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</a>&nbsp;&gt;'; ?><?php endforeach; endif; unset($_from); ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?forum_id='; ?><?php echo $this->_tpl_vars['forum']['id']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['forum']['title']; ?><?php echo '</a>&nbsp;&gt;<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?topic_id='; ?><?php echo $this->_tpl_vars['topic']['id']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['topic']['title']; ?><?php echo '</a>'; ?>

</div>
<?php endif; ?>

<h1 class="d3f_title"><?php echo $this->_tpl_vars['post']['subject']; ?>
</h1>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_d3comment_summary.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p class="d3f_topicinfo"><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?topic_id=<?php echo $this->_tpl_vars['topic']['id']; ?>
"><?php echo @_MD_D3FORUM_LINK_LISTPOSTS; ?>
</a></p>

<div class="d3f_wrap">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_eachpost.html", 'smarty_include_vars' => array('caller' => 'viewpost','inner_link_format' => ($this->_tpl_vars['mod_url'])."/index.php?post_id=%s")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<!-- quick reply form -->
<?php if ($this->_tpl_vars['post']['can_reply']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_post_form_quick.html", 'smarty_include_vars' => array('uname' => $this->_tpl_vars['xoops_uname'],'h2_title' => @_MD_D3FORUM_REPLYTHISPOST,'quick_form_mode' => 'reply','subject_raw' => $this->_tpl_vars['post']['subject_raw'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<!-- start post tree -->
<h2 class="head d3f_tree d3f_head"><?php echo @_MD_D3FORUM_POSTSTREE; ?>
</h2>

<?php $_from = $this->_tpl_vars['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eachpost']):
?>
<?php if ($this->_tpl_vars['eachpost']['id'] == $this->_tpl_vars['post']['id']): ?>
	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['eachpost']['ul_in'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<ul>", "<ul class='d3f_eachbranch'>\n\t") : smarty_modifier_replace($_tmp, "<ul>", "<ul class='d3f_eachbranch'>\n\t")))) ? $this->_run_mod_handler('replace', true, $_tmp, "<li>", "<li class='d3f_eachbranchitem d3f_currenttopic'><span style='padding-left:".($this->_tpl_vars['eachpost']['depth_in_tree'])."0px;'>") : smarty_modifier_replace($_tmp, "<li>", "<li class='d3f_eachbranchitem d3f_currenttopic'><span style='padding-left:".($this->_tpl_vars['eachpost']['depth_in_tree'])."0px;'>")); ?>

<?php else: ?>
	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['eachpost']['ul_in'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<ul>", "<ul class='d3f_eachbranch'>\n\t") : smarty_modifier_replace($_tmp, "<ul>", "<ul class='d3f_eachbranch'>\n\t")))) ? $this->_run_mod_handler('replace', true, $_tmp, "<li>", "<li class='d3f_eachbranchitem'><span style='padding-left:".($this->_tpl_vars['eachpost']['depth_in_tree'])."0px;'>") : smarty_modifier_replace($_tmp, "<li>", "<li class='d3f_eachbranchitem'><span style='padding-left:".($this->_tpl_vars['eachpost']['depth_in_tree'])."0px;'>")); ?>

<?php endif; ?>
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?post_id=<?php echo $this->_tpl_vars['eachpost']['id']; ?>
" id="post_path<?php echo $this->_tpl_vars['eachpost']['unique_path']; ?>
" name="post_path<?php echo $this->_tpl_vars['eachpost']['unique_path']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/posticon<?php echo $this->_tpl_vars['eachpost']['icon']; ?>
.gif" alt="<?php echo $this->_tpl_vars['icon_meanings'][$this->_tpl_vars['eachpost']['icon']]; ?>
" /> <?php echo $this->_tpl_vars['eachpost']['subject']; ?>
</a>
	(<?php echo $this->_tpl_vars['eachpost']['poster_uname']; ?>
, <?php echo $this->_tpl_vars['eachpost']['post_time_formatted']; ?>
)
	<?php if ($this->_tpl_vars['forum']['isadminormod']): ?><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=cutpasteposts&amp;post_id=<?php echo $this->_tpl_vars['eachpost']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/adminicon_cutpaste.gif" alt="<?php echo @_MD_D3FORUM_CUTPASTEPOSTS; ?>
" /></a><?php endif; ?></span>
<?php echo $this->_tpl_vars['eachpost']['ul_out']; ?>

<?php endforeach; endif; unset($_from); ?>
<!-- end topic tree -->
<!-- forum jump -->
<form name="forum_jump_box" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php" method="get" style="clear:both;">
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- end module contents -->