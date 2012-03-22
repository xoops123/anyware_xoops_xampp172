<?php /* Smarty version 2.6.26, created on 2012-01-02 18:36:44
         compiled from db:d3forum_inc_d3comment_summary.html */ ?>
<?php if ($this->_tpl_vars['topic']['comment_link']): ?>
	<p class="head"><a href="<?php echo $this->_tpl_vars['topic']['comment_link']; ?>
"><?php echo @_MD_D3FORUM_LINK_COMMENTSOURCE; ?>
</a></p>
<?php elseif (is_array ( $this->_tpl_vars['topic']['comment_description'] )): ?>
	<table class="outer inc_d3comment_summary">
		<tr>
			<td class="head td01"><?php echo @_MD_D3FORUM_COM_TARGETMODULE; ?>
</td>
			<td class="even"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['topic']['comment_description']['dirname']; ?>
/"><?php echo $this->_tpl_vars['topic']['comment_description']['module_name']; ?>
</a></td>
		</tr>
		<tr>
			<td class="head"><?php echo @_MD_D3FORUM_COM_SUBJECT; ?>
</td>
			<td class="odd"><a href="<?php echo $this->_tpl_vars['topic']['comment_description']['uri']; ?>
"><?php echo $this->_tpl_vars['topic']['comment_description']['subject']; ?>
</a></td>
		</tr>
		<tr>
			<td class="head"><?php echo @_MD_D3FORUM_COM_SUMMARY; ?>
</td>
			<td class="even"><?php echo $this->_tpl_vars['topic']['comment_description']['summary']; ?>
</td>
		</tr>
	</table>
<?php elseif ($this->_tpl_vars['topic']['comment_description']): ?>
	<?php echo $this->_tpl_vars['topic']['comment_description']; ?>

<?php endif; ?>