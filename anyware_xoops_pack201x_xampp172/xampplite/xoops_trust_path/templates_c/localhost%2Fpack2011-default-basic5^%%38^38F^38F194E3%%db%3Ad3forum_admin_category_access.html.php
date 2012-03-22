<?php /* Smarty version 2.6.26, created on 2012-01-02 18:07:01
         compiled from db:d3forum_admin_category_access.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'db:d3forum_admin_category_access.html', 7, false),)), $this); ?>
<h3><?php echo $this->_tpl_vars['mod_name']; ?>
</h3>

<!-- category selection -->
<form name="selectcategory" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php" method="get" style="margin: 20px 0px">
	<input type="hidden" name="page" value="category_access" />
	<label for="select_cat_id"><?php echo @_MD_A_D3FORUM_LABEL_SELECTCATEGORY; ?>
</label>:
	<select name="cat_id" id="select_cat_id"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['cat_options'],'selected' => $this->_tpl_vars['cat_id']), $this);?>
</select>
	<input type="submit" value="<?php echo @_SUBMIT; ?>
" />
</form>

<!-- category title -->
<p>
	<?php echo @_MD_D3FORUM_CATEGORY; ?>
:<?php echo $this->_tpl_vars['cat_title']; ?>

	[<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=categorymanager&amp;cat_id=<?php echo $this->_tpl_vars['cat_id']; ?>
"><?php echo @_EDIT; ?>
</a>]
	[<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=makecategory&amp;cat_id=<?php echo $this->_tpl_vars['cat_id']; ?>
"><?php echo @_MD_D3FORUM_LINK_MAKESUBCATEGORY; ?>
</a>]
	[<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=makeforum&amp;cat_id=<?php echo $this->_tpl_vars['cat_id']; ?>
"><?php echo @_MD_D3FORUM_LINK_MAKEFORUM; ?>
</a>]
</p>

<!-- group form -->
<h2 class="head"><?php echo @_MD_A_D3FORUM_H2_GROUPPERMS; ?>
</h2>
<form name="groupperms" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=category_access&amp;cat_id=<?php echo $this->_tpl_vars['cat_id']; ?>
" method="post" style="margin:20px 0px">
	<?php echo $this->_tpl_vars['gticket_hidden']; ?>

	<table class="outer">
		<tr>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_GROUPNAME; ?>

			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_CAN_READ; ?>

				<input type="checkbox" onclick="with(document.groupperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&elements[i].id.indexOf('gcol_1_')>=0){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_CAN_POST; ?>

				<input type="checkbox" onclick="with(document.groupperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&elements[i].id.indexOf('gcol_2_')>=0){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_CAN_EDIT; ?>

				<input type="checkbox" onclick="with(document.groupperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&elements[i].id.indexOf('gcol_3_')>=0){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_CAN_DELETE; ?>

				<input type="checkbox" onclick="with(document.groupperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&elements[i].id.indexOf('gcol_4_')>=0){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_POST_AUTO_APPROVED; ?>

				<input type="checkbox" onclick="with(document.groupperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&elements[i].id.indexOf('gcol_5_')>=0){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_IS_MODERATOR; ?>

				<input type="checkbox" onclick="with(document.groupperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&elements[i].id.indexOf('gcol_6_')>=0){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_CAN_MAKEFORUM; ?>

				<input type="checkbox" onclick="with(document.groupperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&elements[i].id.indexOf('gcol_7_')>=0){elements[i].checked=this.checked;}}}">
			</th>
		</tr>
		<?php echo $this->_tpl_vars['group_trs']; ?>

	</table>
	<input type="submit" name="group_update" value="<?php echo @_SUBMIT; ?>
" />
</form>


<!-- user form -->
<h2 class="head"><?php echo @_MD_A_D3FORUM_H2_USERPERMS; ?>
</h2>
<form name="userperms" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=category_access&amp;cat_id=<?php echo $this->_tpl_vars['cat_id']; ?>
" method="post" style="margin:20px 0px">
	<?php echo $this->_tpl_vars['gticket_hidden']; ?>

	<table class="outer">
		<tr>
			<th><?php echo @_MD_A_D3FORUM_TH_UID; ?>
</th>
			<th><?php echo @_MD_A_D3FORUM_TH_UNAME; ?>
</th>
			<th><?php echo @_MD_A_D3FORUM_TH_CAN_READ; ?>
</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_CAN_POST; ?>

				<input type="checkbox" onclick="with(document.userperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&(elements[i].id.indexOf('ucol_2_')>=0||elements[i].id.indexOf('ncol_2_')>=0)){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_CAN_EDIT; ?>

				<input type="checkbox" onclick="with(document.userperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&(elements[i].id.indexOf('ucol_3_')>=0||elements[i].id.indexOf('ncol_3_')>=0)){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_CAN_DELETE; ?>

				<input type="checkbox" onclick="with(document.userperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&(elements[i].id.indexOf('ucol_4_')>=0||elements[i].id.indexOf('ncol_4_')>=0)){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_POST_AUTO_APPROVED; ?>

				<input type="checkbox" onclick="with(document.userperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&(elements[i].id.indexOf('ucol_5_')>=0||elements[i].id.indexOf('ncol_5_')>=0)){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_IS_MODERATOR; ?>

				<input type="checkbox" onclick="with(document.userperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&(elements[i].id.indexOf('ucol_6_')>=0||elements[i].id.indexOf('ncol_6_')>=0)){elements[i].checked=this.checked;}}}">
			</th>
			<th>
				<?php echo @_MD_A_D3FORUM_TH_CAN_MAKEFORUM; ?>

				<input type="checkbox" onclick="with(document.userperms){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&(elements[i].id.indexOf('ucol_7_')>=0||elements[i].id.indexOf('ncol_7_')>=0)){elements[i].checked=this.checked;}}}">
			</th>
		</tr>
		<?php echo $this->_tpl_vars['user_trs']; ?>

		<?php echo $this->_tpl_vars['newuser_trs']; ?>

	</table>
	<input type="submit" name="user_update" value="<?php echo @_SUBMIT; ?>
" />
	<br />
	<?php echo @_MD_A_D3FORUM_NOTICE_ADDUSERS; ?>

</form>