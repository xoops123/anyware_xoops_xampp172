<?php /* Smarty version 2.6.26, created on 2012-01-02 22:38:01
         compiled from db:gnavi_item.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'd3forum_comment', 'db:gnavi_item.html', 44, false),)), $this); ?>
<?php echo ''; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_inc_breadcrumbs.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_itemheader.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo '<div id=\'feed\'></div>'; ?><?php echo ''; ?><?php if ($this->_tpl_vars['canvote']): ?><?php echo '<table class="gn_outer"><tr><td  class="gn_head">'; ?><?php echo $this->_tpl_vars['lang_rating']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['canrateview']): ?><?php echo '<td  class="gn_head">'; ?><?php if ($this->_tpl_vars['photo']['rating'] > 0): ?><?php echo '<img src=\''; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/images/rank'; ?><?php echo $this->_tpl_vars['photo']['rank']; ?><?php echo '.gif\' alt=\''; ?><?php echo $this->_tpl_vars['photo']['rating']; ?><?php echo '\' align="top" />'; ?><?php else: ?><?php echo '<img src=\''; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/images/rank_none.gif\' alt=\''; ?><?php echo $this->_tpl_vars['photo']['info_votes']; ?><?php echo '\' align="top" />'; ?><?php endif; ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['photo']['info_votes']; ?><?php echo '</td>'; ?><?php endif; ?><?php echo '<td  class="gn_head">'; ?><?php if ($this->_tpl_vars['canratevote']): ?><?php echo '<a href=\''; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/index.php?page=vote&lid='; ?><?php echo $this->_tpl_vars['photo']['lid']; ?><?php echo '\'>'; ?><?php echo $this->_tpl_vars['lang_ratethisphoto']; ?><?php echo '</a>'; ?><?php endif; ?><?php echo '</td></tr></table>'; ?><?php endif; ?><?php echo '<div style="text-align:right;"><span id="gn_print"><a href="index.php'; ?><?php echo $this->_tpl_vars['link_option']; ?><?php echo '&page=print">'; ?><?php echo $this->_tpl_vars['lang_print']; ?><?php echo '</a></span></div>'; ?><?php echo ''; ?><?php if ($this->_tpl_vars['photo_nav']): ?><?php echo '<div class="gnn_navi" style="margin-top:15px;">'; ?><?php echo $this->_tpl_vars['photo_nav']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['comment_dirname'] && $this->_tpl_vars['comment_forum_id']): ?><?php echo ''; ?><?php echo ''; ?><?php echo smarty_function_d3forum_comment(array('dirname' => $this->_tpl_vars['comment_dirname'],'forum_id' => $this->_tpl_vars['comment_forum_id'],'class' => 'GnaviD3commentContent','mytrustdirname' => 'gnavi','id' => $this->_tpl_vars['photo']['lid'],'subject' => $this->_tpl_vars['photo']['title'],'subject_escaped' => 1,'view' => $this->_tpl_vars['comment_view']), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo '<div style="text-align: center; padding: 3px; margin: 3px;">'; ?><?php echo $this->_tpl_vars['commentsnav']; ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang_notice']; ?><?php echo '</div><div style="margin: 3px; padding: 3px;">'; ?><?php if ($this->_tpl_vars['comment_mode'] == 'flat'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['comment_mode'] == 'thread'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['comment_mode'] == 'nest'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_nest.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>