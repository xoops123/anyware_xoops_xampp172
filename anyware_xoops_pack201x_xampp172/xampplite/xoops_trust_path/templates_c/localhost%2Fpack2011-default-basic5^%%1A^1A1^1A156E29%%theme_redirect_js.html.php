<?php /* Smarty version 2.6.26, created on 2012-01-02 17:58:54
         compiled from basic5/theme_redirect_js.html */ ?>
<?php if ($this->_tpl_vars['is_redirected']): ?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
jquery.jgrowl.css" />
	<?php if (! in_array ( 'jquery.jgrowl.js' , $this->_tpl_vars['xugj_already_js'] ) && ! in_array ( 'jquery.jgrowl_minimized.js' , $this->_tpl_vars['xugj_already_js'] ) && ! in_array ( 'jquery.jgrowl_google.js' , $this->_tpl_vars['xugj_already_js'] )): ?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/jgrowl/jquery.jgrowl_minimized.js"></script>
	<?php endif; ?>
<?php echo '
	<script type="text/javascript">
	jQuery(document).ready(function($){
'; ?>

		$.jGrowl.defaults.position = 'center';
		$.jGrowl("<?php echo $this->_tpl_vars['redirect_message']; ?>
");
<?php echo '
	});
	</script>
'; ?>

<?php endif; ?>