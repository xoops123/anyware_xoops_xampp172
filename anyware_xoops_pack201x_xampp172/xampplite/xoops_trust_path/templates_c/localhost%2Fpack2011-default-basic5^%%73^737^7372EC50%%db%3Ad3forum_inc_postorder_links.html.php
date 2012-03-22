<?php /* Smarty version 2.6.26, created on 2012-01-02 18:37:32
         compiled from db:d3forum_inc_postorder_links.html */ ?>
<div class="d3f_order_ctrl">
	<!-- post orders -->
	<?php if ($this->_tpl_vars['postorder'] != 0): ?>
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=update_postorder&amp;ret_name=<?php echo $this->_tpl_vars['ret_name']; ?>
&amp;ret_val=<?php echo $this->_tpl_vars['ret_val']; ?>
&amp;postorder=0"><?php echo @_MD_D3FORUM_LINK_POSTORDERTREEASC; ?>
</a>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['postorder'] != 2): ?>
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=update_postorder&amp;ret_name=<?php echo $this->_tpl_vars['ret_name']; ?>
&amp;ret_val=<?php echo $this->_tpl_vars['ret_val']; ?>
&amp;postorder=2"><?php echo @_MD_D3FORUM_LINK_POSTORDERTIMEASC; ?>
</a>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['postorder'] != 3): ?>
		<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=update_postorder&amp;ret_name=<?php echo $this->_tpl_vars['ret_name']; ?>
&amp;ret_val=<?php echo $this->_tpl_vars['ret_val']; ?>
&amp;postorder=3"><?php echo @_MD_D3FORUM_LINK_POSTORDERTIMEDESC; ?>
</a>
	<?php endif; ?>
</div>