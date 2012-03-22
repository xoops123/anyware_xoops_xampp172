<?php /* Smarty version 2.6.26, created on 2012-01-02 18:37:32
         compiled from db:d3forum_inc_eachpost.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'min', 'db:d3forum_inc_eachpost.html', 23, false),array('modifier', 'string_format', 'db:d3forum_inc_eachpost.html', 30, false),)), $this); ?>
<!-- start each post -->
<div class="d3f_head">
<?php if ($this->_tpl_vars['post']['poster_avatar']): ?>
	<?php if ($this->_tpl_vars['post']['poster_avatar']['height'] > 80): ?>
		<img src="<?php echo $this->_tpl_vars['xoops_upload_url']; ?>
/<?php echo $this->_tpl_vars['post']['poster_avatar']['path']; ?>
" height="80" alt="" class="d3f_avatar" />
	<?php else: ?>
		<img src="<?php echo $this->_tpl_vars['xoops_upload_url']; ?>
/<?php echo $this->_tpl_vars['post']['poster_avatar']['path']; ?>
" width="<?php echo $this->_tpl_vars['post']['poster_avatar']['width']; ?>
" height="<?php echo $this->_tpl_vars['post']['poster_avatar']['height']; ?>
" alt="" class="d3f_avatar" />
	<?php endif; ?>
<?php endif; ?>
	<h2<?php if ($this->_tpl_vars['post']['invisible'] || ! $this->_tpl_vars['post']['approval']): ?> class="<?php if ($this->_tpl_vars['post']['invisible']): ?> invisible<?php elseif (! $this->_tpl_vars['post']['approval']): ?> yetapproval<?php endif; ?>"<?php endif; ?>>
	<a id="post_id<?php echo $this->_tpl_vars['post']['id']; ?>
" name="post_id<?php echo $this->_tpl_vars['post']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/posticon<?php echo $this->_tpl_vars['post']['icon']; ?>
.gif" alt="<?php echo $this->_tpl_vars['icon_meanings'][$this->_tpl_vars['post']['icon']]; ?>
" /></a>
	<?php if ($this->_tpl_vars['caller'] == 'listposts'): ?>
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?post_id=<?php echo $this->_tpl_vars['post']['id']; ?>
" id="post_path<?php echo $this->_tpl_vars['post']['unique_path']; ?>
" name="post_path<?php echo $this->_tpl_vars['post']['unique_path']; ?>
"><?php echo $this->_tpl_vars['post']['subject']; ?>
</a>
	<?php else: ?>
		<?php echo $this->_tpl_vars['post']['subject']; ?>

	<?php endif; ?>
	</h2>
	<span class="d3f_msgnum"><?php echo @_MD_D3FORUM_UNIQUEPATHPREFIX; ?>
 <?php echo $this->_tpl_vars['post']['unique_path']; ?>
</span>
</div>
<!-- read control -->
<div class="d3f_info">
<?php if ($this->_tpl_vars['postorder'] < 2 || $this->_tpl_vars['caller'] == 'viewpost'): ?>
	<dl class="d3f_head_tree_depth" style="width:<?php echo ((is_array($_tmp=$this->_tpl_vars['post']['depth_in_tree']*5)) ? $this->_run_mod_handler('min', true, $_tmp, 100) : min($_tmp, 100)); ?>
%;">
	<dt>depth:</dt>
		<dd><?php echo $this->_tpl_vars['post']['depth_in_tree']; ?>
</dd>
	</dl>
<?php endif; ?>
	<div class="d3f_info_val">
	<?php if ($this->_tpl_vars['post']['prev_id']): ?>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['post']['prev_id'])) ? $this->_run_mod_handler('string_format', true, $_tmp, $this->_tpl_vars['inner_link_format']) : smarty_modifier_string_format($_tmp, $this->_tpl_vars['inner_link_format'])); ?>
"><?php echo @_MD_D3FORUM_LINK_PREVPOST; ?>
</a>
	<?php else: ?>
		<?php echo @_MD_D3FORUM_LINK_PREVPOST; ?>

	<?php endif; ?> -

	<?php if ($this->_tpl_vars['post']['next_id']): ?>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['post']['next_id'])) ? $this->_run_mod_handler('string_format', true, $_tmp, $this->_tpl_vars['inner_link_format']) : smarty_modifier_string_format($_tmp, $this->_tpl_vars['inner_link_format'])); ?>
"><?php echo @_MD_D3FORUM_LINK_NEXTPOST; ?>
</a>
	<?php else: ?>
		<?php echo @_MD_D3FORUM_LINK_NEXTPOST; ?>

	<?php endif; ?> |

	<?php if ($this->_tpl_vars['post']['pid']): ?>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['post']['pid'])) ? $this->_run_mod_handler('string_format', true, $_tmp, $this->_tpl_vars['inner_link_format']) : smarty_modifier_string_format($_tmp, $this->_tpl_vars['inner_link_format'])); ?>
"><?php echo @_MD_D3FORUM_PARENTPOST; ?>
</a>
	<?php else: ?>
		<?php echo @_MD_D3FORUM_PARENTPOST; ?>

	<?php endif; ?> -

	<?php if ($this->_tpl_vars['post']['first_child_id']): ?>
		<?php $_from = $this->_tpl_vars['post']['f1s']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['f1_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['f1_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['f1_id'] => $this->_tpl_vars['f1_leaf_number']):
        $this->_foreach['f1_loop']['iteration']++;
?>
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['f1_id'])) ? $this->_run_mod_handler('string_format', true, $_tmp, $this->_tpl_vars['inner_link_format']) : smarty_modifier_string_format($_tmp, $this->_tpl_vars['inner_link_format'])); ?>
"><?php if (($this->_foreach['f1_loop']['iteration'] <= 1)): ?><?php echo @_MD_D3FORUM_CHILDPOSTS; ?>
<?php endif; ?><?php echo $this->_tpl_vars['f1_leaf_number']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<?php echo @_MD_D3FORUM_NOCHILDPOSTS; ?>

	<?php endif; ?> |

	<?php echo @_MD_D3FORUM_ON; ?>
 <?php echo $this->_tpl_vars['post']['post_time_formatted']; ?>
 <?php if ($this->_tpl_vars['post']['post_time'] < $this->_tpl_vars['post']['modified_time']): ?> | <span title="<?php echo $this->_tpl_vars['post']['modified_time_formatted']; ?>
"><?php echo @_MD_D3FORUM_LASTMODIFIED; ?>
</span><?php endif; ?>
	</div>
</div>
<!-- poster info -->
<div class="d3f_info_sub">
<?php if ($this->_tpl_vars['post']['poster_uid'] != 0): ?><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['post']['poster_uid']; ?>
"><?php endif; ?><?php echo $this->_tpl_vars['post']['poster_uname']; ?>
<?php if ($this->_tpl_vars['post']['poster_uid'] != 0): ?></a><?php endif; ?>&nbsp;
<?php if ($this->_tpl_vars['post']['poster_uid'] != 0): ?>
	<?php if ($this->_tpl_vars['post']['poster_rank_title']): ?>
		<img src="<?php echo $this->_tpl_vars['xoops_upload_url']; ?>
/<?php echo $this->_tpl_vars['post']['poster_rank_image']; ?>
" alt="<?php echo $this->_tpl_vars['post']['poster_rank_title']; ?>
"  title="<?php echo $this->_tpl_vars['post']['poster_rank_title']; ?>
" />
	<?php endif; ?>
		<?php if ($this->_tpl_vars['post']['poster_from']): ?><?php echo @_MD_D3FORUM_POSTERFROM; ?>
: <?php echo $this->_tpl_vars['post']['poster_from']; ?>
<?php endif; ?>&nbsp;
	<?php echo @_MD_D3FORUM_POSTERPOSTS; ?>
: <?php echo $this->_tpl_vars['post']['poster_posts_count']; ?>

	<?php if ($this->_tpl_vars['post']['poster_is_online']): ?><?php echo @_MD_D3FORUM_POSTERISONLINE; ?>
<?php endif; ?>
<?php else: ?>
	<?php if ($this->_tpl_vars['post']['guest_url'] || $this->_tpl_vars['post']['guest_trip']): ?>
			<?php if ($this->_tpl_vars['post']['guest_trip']): ?><?php echo @_MD_D3FORUM_TH_GUESTTRIP; ?>
: <?php echo $this->_tpl_vars['post']['guest_trip']; ?>
<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>
</div>
<!-- post -->
<div class="d3f_body">
<?php echo $this->_tpl_vars['post']['post_text']; ?>

<?php if ($this->_tpl_vars['post']['signature']): ?>
	<p>-- <br /><?php echo $this->_tpl_vars['post']['signature']; ?>
</p>
<?php endif; ?>
</div>

<!-- post foot control -->
<div class="d3f_info_ctrl">
<?php if ($this->_tpl_vars['forum']['isadminormod']): ?>
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=cutpasteposts&amp;post_id=<?php echo $this->_tpl_vars['post']['id']; ?>
" class="cutpaste"><img src="<?php echo $this->_tpl_vars['mod_imageurl']; ?>
/adminicon_cutpaste.gif" alt="<?php echo @_MD_D3FORUM_CUTPASTEPOSTS; ?>
" /></a> |
<?php endif; ?>

<?php if (! $this->_tpl_vars['post']['approval'] && $this->_tpl_vars['forum']['isadminormod']): ?>
	<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=update_post_approval&amp;post_id=<?php echo $this->_tpl_vars['post']['id']; ?>
&amp;ret_name=<?php echo $this->_tpl_vars['ret_name']; ?>
&amp;ret_val=<?php echo $this->_tpl_vars['ret_val']; ?>
"><?php echo @_MD_D3FORUM_LABEL_DOAPPROVAL; ?>
</a> |
<?php endif; ?>

<?php if ($this->_tpl_vars['mod_config']['use_vote'] && ! $this->_tpl_vars['post']['invisible'] && $this->_tpl_vars['post']['approval']): ?>
	<span class="d3f_vote">
		<?php echo @_MD_D3FORUM_VOTECOUNT; ?>
:<?php echo $this->_tpl_vars['post']['votes_count']; ?>

		<?php echo @_MD_D3FORUM_VOTEPOINTAVG; ?>
:<?php echo ((is_array($_tmp=$this->_tpl_vars['post']['votes_avg'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>

	</span>
	<?php if ($this->_tpl_vars['post']['can_vote']): ?>
		<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php" method="get" style="display:inline;">
			<input type="hidden" name="page" value="vote_to_post" />
			<input type="hidden" name="post_id" value="<?php echo $this->_tpl_vars['post']['id']; ?>
" />
			<input type="hidden" name="point" value="10" />
			<?php if ($this->_tpl_vars['caller'] == 'listposts'): ?>
				<input type="hidden" name="ret_name" value="topic_id" />
				<input type="hidden" name="ret_val" value="<?php echo $this->_tpl_vars['topic']['id']; ?>
" />
			<?php endif; ?>
			<input type="submit" value="<?php echo @_MD_D3FORUM_VOTEPOINTDSCBEST; ?>
" />
		</form>
		<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php" method="get" style="display:inline;">
			<input type="hidden" name="page" value="vote_to_post" />
			<input type="hidden" name="post_id" value="<?php echo $this->_tpl_vars['post']['id']; ?>
" />
			<input type="hidden" name="point" value="0" />
			<?php if ($this->_tpl_vars['caller'] == 'listposts'): ?>
				<input type="hidden" name="ret_name" value="topic_id" />
				<input type="hidden" name="ret_val" value="<?php echo $this->_tpl_vars['topic']['id']; ?>
" />
			<?php endif; ?>
			<input type="submit" value="<?php echo @_MD_D3FORUM_VOTEPOINTDSCWORST; ?>
" />
		</form>
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['post']['can_edit']): ?>
 | <a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=edit&amp;post_id=<?php echo $this->_tpl_vars['post']['id']; ?>
"><?php echo @_MD_D3FORUM_POSTEDIT; ?>
</a> |
<?php endif; ?>

<?php if ($this->_tpl_vars['post']['can_delete']): ?>
<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=delete&amp;post_id=<?php echo $this->_tpl_vars['post']['id']; ?>
"><?php echo @_MD_D3FORUM_POSTDELETE; ?>
</a> |
<?php endif; ?>

<?php if ($this->_tpl_vars['post']['can_reply']): ?>
<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=reply&amp;post_id=<?php echo $this->_tpl_vars['post']['id']; ?>
"><?php echo @_MD_D3FORUM_POSTREPLY; ?>
</a>
<?php endif; ?>
</div>
<!-- end each post -->