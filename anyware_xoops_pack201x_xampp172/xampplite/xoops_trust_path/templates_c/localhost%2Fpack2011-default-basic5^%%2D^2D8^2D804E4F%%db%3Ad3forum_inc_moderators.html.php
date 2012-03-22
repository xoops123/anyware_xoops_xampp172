<?php /* Smarty version 2.6.26, created on 2012-01-02 18:03:36
         compiled from db:d3forum_inc_moderators.html */ ?>
<?php echo @_MD_D3FORUM_MODERATOR; ?>
:
<?php $_from = $this->_tpl_vars['target']['moderate_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['moderator']):
?>
	<?php echo $this->_tpl_vars['moderator']['gname']; ?>

<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['target']['moderate_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['moderator']):
?>
	<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['moderator']['uid']; ?>
"><?php echo $this->_tpl_vars['moderator']['uname']; ?>
</a>
<?php endforeach; endif; unset($_from); ?>