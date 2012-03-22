<?php /* Smarty version 2.6.26, created on 2012-01-03 14:39:40
         compiled from db:d3pipes_admin_wizard_fetch.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:d3pipes_admin_wizard_fetch.html', 9, false),array('function', 'html_radios', 'db:d3pipes_admin_wizard_fetch.html', 67, false),)), $this); ?>
<div class="d3pipes_admin_wizard_fetch" id="<?php echo $this->_tpl_vars['mydirname']; ?>
_admin_wizard_fetch">

<h2><?php echo $this->_tpl_vars['mod_name']; ?>
 - <?php echo @_MD_A_D3PIPES_H2_WIZARDFETCH; ?>
</h2>

<?php if ($this->_tpl_vars['post_hiddens']): ?>
<div class="confirmMsg">
<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=pipe" method="post">
	<?php $_from = $this->_tpl_vars['post_hiddens']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hidden_key_raw'] => $this->_tpl_vars['hidden_value_raw']):
?>
		<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['hidden_key_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['hidden_value_raw'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"}>
	<?php endforeach; endif; unset($_from); ?>
	<?php echo $this->_tpl_vars['gticket_hidden']; ?>


	<?php $_from = $this->_tpl_vars['error_messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error_message']):
?>
		<?php echo $this->_tpl_vars['error_message']; ?>
<br />
	<?php endforeach; endif; unset($_from); ?>

	<?php echo @_MD_A_D3PIPES_CNFM_REGISTERASIS; ?>

	<br />
	<input type="submit" name="do_update" value="<?php echo @_MD_A_D3PIPES_TH_WIZ_BTN_REGISTER; ?>
" />
</form>
</div>
<br />
<?php endif; ?>


<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=wizard_fetch" method="post">

	<table class="outer">
		<tr>
			<th>
				<?php echo @_MD_A_D3PIPES_TH_WIZ_SITENAME; ?>

			</th>
			<td class="even">
				<input type="text" name="name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['requests_raw']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="40" <?php if ($this->_tpl_vars['lacked_requests']['name']): ?>style="background-color:#ffffcc;"<?php endif; ?> />
			</td>
		</tr>
		<tr>
			<th>
				<?php echo @_MD_A_D3PIPES_TH_WIZ_SITEURL; ?>

			</th>
			<td class="even">
				<input type="text" name="url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['requests_raw']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" <?php if ($this->_tpl_vars['lacked_requests']['url']): ?>style="background-color:#ffffcc;"<?php endif; ?> />
			</td>
		</tr>
		<tr>
			<th>
				<?php echo @_MD_A_D3PIPES_TH_WIZ_RSSURL; ?>

			</th>
			<td class="even">
				<input type="text" name="rssurl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['requests_raw']['rssurl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" <?php if ($this->_tpl_vars['lacked_requests']['rssurl']): ?>style="background-color:#ffffcc;"<?php endif; ?> />
			</td>
		</tr>
		<tr>
			<th>
				<?php echo @_MD_A_D3PIPES_TH_WIZ_RSSENCODING; ?>

			</th>
			<td class="even">
				<input type="text" name="rssencoding" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['requests_raw']['rssencoding'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="20" />
				<?php echo @_MD_A_D3PIPES_TH_WIZ_RSSENCODING_NOTE; ?>

			</td>
		</tr>
		<tr>
			<th>
				<?php echo @_MD_A_D3PIPES_TH_WIZ_CLIPPINGYN; ?>

			</th>
			<td class="even">
				<?php echo smarty_function_html_radios(array('name' => 'clip','options' => $this->_tpl_vars['yesno_options'],'selected' => $this->_tpl_vars['requests_raw']['clip']), $this);?>

			</td>
		</tr>
		<tr>
			<th>
				<?php echo @_MD_A_D3PIPES_TH_WIZ_ALLOWHTMLYN; ?>

			</th>
			<td class="even">
				<?php echo smarty_function_html_radios(array('name' => 'allowhtml','options' => $this->_tpl_vars['yesno_options'],'selected' => $this->_tpl_vars['requests_raw']['allowhtml']), $this);?>

			</td>
		</tr>
	</table>
	<input type="submit" value="<?php echo @_MD_A_D3PIPES_TH_WIZ_BTN_CONFIRM; ?>
" />
</form>

</div>