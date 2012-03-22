<?php /* Smarty version 2.6.26, created on 2012-01-02 18:02:34
         compiled from db:d3forum_main_listforums.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:d3forum_main_listforums.html', 13, false),array('function', 'cycle', 'db:d3forum_main_listforums.html', 67, false),)), $this); ?>
<!-- start module contents -->
<div id="main_listforums">
<!-- breadcrumbs -->
<div class="d3f_breadcrumbs">
	<?php echo '<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?cat_ids='; ?><?php echo $this->_tpl_vars['category']['id']; ?><?php echo '">'; ?><?php echo @_MD_D3FORUM_LISTTOPICSINCATEGORY; ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['mod_config']['show_breadcrumbs']): ?><?php echo '|<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php">'; ?><?php echo @_MD_D3FORUM_TOP; ?><?php echo '</a>'; ?><?php $_from = $this->_tpl_vars['category']['paths_raw']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['catgorybreadcrumbs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['catgorybreadcrumbs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['parent_id'] => $this->_tpl_vars['parent_title_raw']):
        $this->_foreach['catgorybreadcrumbs']['iteration']++;
?><?php echo ''; ?><?php if (! ($this->_foreach['catgorybreadcrumbs']['iteration'] == $this->_foreach['catgorybreadcrumbs']['total'])): ?><?php echo '&nbsp;&gt;&nbsp;<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?cat_id='; ?><?php echo $this->_tpl_vars['parent_id']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['parent_title_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</a>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

</div>

<h1 class="d3f_title"><?php echo $this->_tpl_vars['category']['title']; ?>
</h1>
<?php if ($this->_tpl_vars['category']['desc']): ?><p class="d3f_welcome"><?php echo $this->_tpl_vars['category']['desc']; ?>
</p><?php endif; ?>

<?php if ($this->_tpl_vars['category']['isadminormod']): ?>
<!-- category controller -->
<ul class="d3f_ctrl">
	<li><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=makeforum&amp;cat_id=<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo @_MD_D3FORUM_LINK_MAKEFORUM; ?>
</a><?php echo @_MD_D3FORUM_SUFFIX_UNDERTHISCATEGORY; ?>
</li>
	<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
	<?php echo '<li><a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?page=makecategory&amp;cat_id='; ?><?php echo $this->_tpl_vars['category']['id']; ?><?php echo '">'; ?><?php echo @_MD_D3FORUM_LINK_MAKESUBCATEGORY; ?><?php echo '</a>'; ?><?php echo @_MD_D3FORUM_SUFFIX_UNDERTHISCATEGORY; ?><?php echo '</li><li><a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?page=categorymanager&amp;cat_id='; ?><?php echo $this->_tpl_vars['category']['id']; ?><?php echo '">'; ?><?php echo @_MD_D3FORUM_LINK_CATEGORYMANAGER; ?><?php echo '<img src="'; ?><?php echo $this->_tpl_vars['mod_imageurl']; ?><?php echo '/icon_pencil22.gif" alt="'; ?><?php echo @_EDIT; ?><?php echo '" width="16" height="16" /></a></li>'; ?>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['xoops_isadmin']): ?>
		<li><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=category_access&amp;cat_id=<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo @_MD_D3FORUM_LINK_CATEGORYACCESS; ?>
</a></li>
	<?php endif; ?>
	<li><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=rss&amp;cat_ids=<?php echo $this->_tpl_vars['category']['id']; ?>
&amp;odr=1"><?php echo @_MD_D3FORUM_LINK_CATEGORYRSS; ?>
<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/icon_rss.png" alt="RSS" width="16" height="16" /></a></li>
</ul>
<?php endif; ?>

<?php if ($this->_tpl_vars['subcategories']): ?>
<h2 class="d3f_head"><?php echo @_MD_D3FORUM_SUBCATEGORIES; ?>
</h2>
<ul class="d3f_subcategories">
<?php $_from = $this->_tpl_vars['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subcategory']):
?>
	<li>
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?cat_id=<?php echo $this->_tpl_vars['subcategory']['id']; ?>
"<?php if ($this->_tpl_vars['subcategory']['desc']): ?> title="<?php echo $this->_tpl_vars['subcategory']['desc']; ?>
"<?php endif; ?>><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/category_<?php echo $this->_tpl_vars['subcategory']['bit_new']; ?>
.gif" alt="<?php echo $this->_tpl_vars['subcategory']['title']; ?>
" width="16" height="16" /> <?php echo $this->_tpl_vars['subcategory']['title']; ?>
</a> (<?php echo @_MD_D3FORUM_TOTALTOPICSCOUNT; ?>
: <?php echo $this->_tpl_vars['subcategory']['topics_count_in_tree']; ?>
, <?php echo @_MD_D3FORUM_TOTALPOSTSCOUNT; ?>
: <?php echo $this->_tpl_vars['subcategory']['posts_count_in_tree']; ?>
)
		<?php if ($this->_tpl_vars['xoops_isadmin']): ?><a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=categorymanager&amp;cat_id=<?php echo $this->_tpl_vars['subcategory']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/icon_pencil22.gif" alt="<?php echo @_EDIT; ?>
" title="<?php echo @_MD_D3FORUM_LINK_CATEGORYMANAGER; ?>
" width="16" height="16" /></a><?php endif; ?>
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=rss&amp;cat_ids=<?php echo $this->_tpl_vars['subcategory']['id']; ?>
&amp;odr=1"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/icon_rss.png" alt="RSS" title="<?php echo @_MD_D3FORUM_LINK_CATEGORYRSS; ?>
" width="16" height="16" /></a>
	</li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<?php endif; ?>

<?php if ($this->_tpl_vars['forums']): ?>
<h2 class="d3f_head"><?php echo @_MD_D3FORUM_FORUM; ?>
</h2>
<table class="outer d3f_table">
<thead>
<tr class="head">
	<th colspan="2" abbr="<?php echo @_MD_D3FORUM_FORUM; ?>
"><?php echo @_MD_D3FORUM_FORUM; ?>
</th>
	<th abbr="<?php echo @_MD_D3FORUM_TOPICSCOUNT; ?>
"><?php echo @_MD_D3FORUM_TOPICSCOUNT; ?>
</th>
	<th abbr="<?php echo @_MD_D3FORUM_POSTSCOUNT; ?>
"><?php echo @_MD_D3FORUM_POSTSCOUNT; ?>
</th>
	<th abbr="<?php echo @_MD_D3FORUM_LASTPOST; ?>
"><?php echo @_MD_D3FORUM_LASTPOST; ?>
</th>
</tr>
</thead>

<!-- start forums -->
<?php $_from = $this->_tpl_vars['forums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['forum']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
<?php echo '<td class="d3f_mainicon"><img src="'; ?><?php echo $this->_tpl_vars['mod_imageurl']; ?><?php echo '/forum_'; ?><?php echo $this->_tpl_vars['forum']['bit_new']; ?><?php echo '.gif" alt="'; ?><?php echo $this->_tpl_vars['forum']['title']; ?><?php echo '" /></td><td><dl><dt><a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?forum_id='; ?><?php echo $this->_tpl_vars['forum']['id']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['forum']['title']; ?><?php echo '</a>&nbsp;'; ?><?php if ($this->_tpl_vars['forum']['isadminormod']): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?page=forummanager&amp;forum_id='; ?><?php echo $this->_tpl_vars['forum']['id']; ?><?php echo '"><img src="'; ?><?php echo $this->_tpl_vars['mod_imageurl']; ?><?php echo '/icon_pencil22.gif" alt="'; ?><?php echo @_EDIT; ?><?php echo '" title="'; ?><?php echo @_MD_D3FORUM_LINK_FORUMMANAGER; ?><?php echo '" width="16" height="16" /></a>'; ?><?php endif; ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?page=rss&amp;forum_id='; ?><?php echo $this->_tpl_vars['forum']['id']; ?><?php echo '"><img src="'; ?><?php echo $this->_tpl_vars['xoops_imageurl']; ?><?php echo 'images/icon_rss.png" alt="RSS" title="'; ?><?php echo @_MD_D3FORUM_LINK_FORUMRSS; ?><?php echo '" width="16" height="16" /></a></dt><dd>'; ?><?php echo $this->_tpl_vars['forum']['desc']; ?><?php echo '</dd><dd class="d3f_td_topicinfo">'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_moderators.html", 'smarty_include_vars' => array('target' => $this->_tpl_vars['forum'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php if ($this->_tpl_vars['forum']['external_link_format']): ?><?php echo '['; ?><?php echo @_MD_D3FORUM_FORUMASCOMMENT; ?><?php echo ']'; ?><?php elseif ($this->_tpl_vars['forum']['can_post']): ?><?php echo '[<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?page=newtopic&amp;forum_id='; ?><?php echo $this->_tpl_vars['forum']['id']; ?><?php echo '">'; ?><?php echo @_MD_D3FORUM_POSTASNEWTOPIC; ?><?php echo '</a>]'; ?><?php endif; ?><?php echo '</dd></dl></td><td>'; ?><?php echo $this->_tpl_vars['forum']['topics_count']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['forum']['posts_count']; ?><?php echo '</td><td class="d3f_posters">'; ?><?php if ($this->_tpl_vars['forum']['last_post_time']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['forum']['last_post_time_formatted']; ?><?php echo '<br />'; ?><?php echo $this->_tpl_vars['forum']['last_post_uname']; ?><?php echo ' <a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?post_id='; ?><?php echo $this->_tpl_vars['forum']['last_post_id']; ?><?php echo '"><img src="'; ?><?php echo $this->_tpl_vars['mod_imageurl']; ?><?php echo '/posticon'; ?><?php echo $this->_tpl_vars['forum']['last_post_icon']; ?><?php echo '.gif" alt="'; ?><?php echo $this->_tpl_vars['forum']['last_post_subject']; ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['forum']['last_post_subject']; ?><?php echo '" /></a>'; ?><?php endif; ?><?php echo '</td>'; ?>

</tr>
<?php endforeach; endif; unset($_from); ?>
<!-- end forums -->
</table>

<div class="d3f_iconexps">
<ul class="d3f_iconexp">
	<li><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/forum_1.gif" alt="" width="18" height="18" /> = <?php echo @_MD_D3FORUM_ALT_NEWPOSTS; ?>
</li>
</ul>
<ul class="d3f_iconexp">
	<li><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/forum_0.gif" alt="" width="18" height="18" /> = <?php echo @_MD_D3FORUM_ALT_NONEWPOSTS; ?>
</li>
</ul>
</div>
<?php endif; ?>

<!-- category jumpbox -->
<form name="category_jump_box" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php" method="get" class="d3f_form">
	<select name="cat_id">
		<option value="">(<?php echo @_MD_D3FORUM_TOP; ?>
)</option>
		<?php echo $this->_tpl_vars['cat_jumpbox_options']; ?>

	</select>
	<input type="submit" value="<?php echo @_MD_D3FORUM_BTN_JUMPTOCATEGORY; ?>
" />&nbsp;
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=search"><?php echo @_MD_D3FORUM_LINK_ADVSEARCH; ?>
</a>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- end module contents -->