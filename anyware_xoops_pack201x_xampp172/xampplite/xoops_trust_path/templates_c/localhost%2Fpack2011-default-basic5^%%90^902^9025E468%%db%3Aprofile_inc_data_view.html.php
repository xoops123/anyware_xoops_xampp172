<?php /* Smarty version 2.6.26, created on 2012-01-02 22:34:00
         compiled from db:profile_inc_data_view.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:profile_inc_data_view.html', 4, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['defArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['def']):
?>
			<tr valign="top">
			  <td class="head"><?php echo $this->_tpl_vars['def']->getShow('label'); ?>
</td>
			  <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
			  	<?php $this->assign('defkey', $this->_tpl_vars['def']->getShow('field_name')); ?>
			    <?php echo $this->_tpl_vars['profile']->showField($this->_tpl_vars['defkey']); ?>

			  </td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>