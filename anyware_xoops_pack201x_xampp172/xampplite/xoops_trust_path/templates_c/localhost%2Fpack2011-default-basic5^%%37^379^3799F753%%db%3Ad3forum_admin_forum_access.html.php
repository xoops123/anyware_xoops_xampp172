<?php /* Smarty version 2.6.26, created on 2012-01-02 18:07:52
         compiled from db:d3forum_admin_forum_access.html */ ?>
<h3><?php echo $this->_tpl_vars['mod_name']; ?>
</h3>

<!-- forum selection -->
<form name="selectforum" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php" method="get" style="margin: 20px 0px">

	<input type="hidden" name="page" value="forum_access" />
	<label for="select_forum_id"><?php echo @_MD_A_D3FORUM_LABEL_SELECTFORUM; ?>
</label>:
	<select name="forum_id" id="select_forum_id"><?php echo $this->_tpl_vars['forum_jumpbox_options']; ?>
</select>
	<input type="submit" value="<?php echo @_SUBMIT; ?>
" />
</form>

<!-- forum title -->
<p>
	<?php echo @_MD_D3FORUM_FORUM; ?>
:<?php echo $this->_tpl_vars['forum_title']; ?>

	(<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/index.php?page=forummanager&amp;forum_id=<?php echo $this->_tpl_vars['forum_id']; ?>
"><?php echo @_EDIT; ?>
</a>)
</p>

<!-- group form -->
<h2 class="head"><?php echo @_MD_A_D3FORUM_H2_GROUPPERMS; ?>
</h2>
<form name="groupperms" action="<?php echo $this->_tpl_vars['mod_url']; ?>
/admin/index.php?page=forum_access&amp;forum_id=<?php echo $this->_tpl_vars['forum_id']; ?>
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
/admin/index.php?page=forum_access&amp;forum_id=<?php echo $this->_tpl_vars['forum_id']; ?>
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
		</tr>
		<?php echo $this->_tpl_vars['user_trs']; ?>

		<?php echo $this->_tpl_vars['newuser_trs']; ?>

	</table>
	<input type="submit" name="user_update" value="<?php echo @_SUBMIT; ?>
" />
	<br />
	<?php echo @_MD_A_D3FORUM_NOTICE_ADDUSERS; ?>

</form>
