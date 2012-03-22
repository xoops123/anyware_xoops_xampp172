<?php /* Smarty version 2.6.26, created on 2012-01-03 14:35:33
         compiled from db:d3pipes_admin_wizard_inner.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:d3pipes_admin_wizard_inner.html', 22, false),)), $this); ?>
<div class="d3pipes_admin_wizard_inner" id="<?php echo $this->_tpl_vars['mydirname']; ?>
_admin_wizard_inner">

<h2><?php echo $this->_tpl_vars['mod_name']; ?>
 - <?php echo @_MD_A_D3PIPES_H2_WIZARDINNER; ?>
</h2>

<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=wizard_inner" method="post">

	<table class="outer">
		<tr>
			<th>
				<?php echo @_MD_A_D3PIPES_TH_WIZ_MODNAME; ?>

			</th>
			<th>
				<?php echo @_MD_A_D3PIPES_TH_WIZ_DIRNAME; ?>

			</th>
			<th>
				<?php echo @_MD_A_D3PIPES_TH_WIZ_JOINTS; ?>

			</th>
		</tr>

		<!-- modules loop -->
		<?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dirname'] => $this->_tpl_vars['module']):
?>
		<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
			<td>
				<?php echo $this->_tpl_vars['module']['name']; ?>

			</td>
			<td>
				<?php echo $this->_tpl_vars['dirname']; ?>

			</td>
			<td>
				<?php $_from = $this->_tpl_vars['module']['joints']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['joint']):
?>
					<input type="checkbox" name="joints[]" value="<?php echo $this->_tpl_vars['joint']['type']; ?>
::<?php echo $this->_tpl_vars['joint']['class']; ?>
::<?php echo $this->_tpl_vars['dirname']; ?>
" id="joint4<?php echo $this->_tpl_vars['dirname']; ?>
_<?php echo $this->_tpl_vars['joint']['type']; ?>
_<?php echo $this->_tpl_vars['joint']['class']; ?>
" /><label for="joint4<?php echo $this->_tpl_vars['dirname']; ?>
_<?php echo $this->_tpl_vars['joint']['type']; ?>
_<?php echo $this->_tpl_vars['joint']['class']; ?>
"><?php echo $this->_tpl_vars['joint']['name']; ?>
</label><br />
				<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>

	</table>
	<div align="center">
		<input type="checkbox" name="create_union_pipe" id="create_union_pipe" value="1" checked="checked" /><label for="create_union_pipe"><?php echo @_MD_A_D3PIPES_TH_WIZ_CREATEUNIONPIPE; ?>
</label>
		<br />
		<input type="submit" value="<?php echo @_MD_A_D3PIPES_TH_WIZ_BTN_REGISTER; ?>
" />
		<?php echo $this->_tpl_vars['gticket_hidden']; ?>

	</div>
</form>

</div>