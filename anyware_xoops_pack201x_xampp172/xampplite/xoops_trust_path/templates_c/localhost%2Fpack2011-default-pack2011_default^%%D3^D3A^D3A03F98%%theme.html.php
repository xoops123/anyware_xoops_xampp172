<?php /* Smarty version 2.6.26, created on 2012-01-03 13:28:02
         compiled from pack2011_default/theme.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'pack2011_default/theme.html', 20, false),array('modifier', 'replace', 'pack2011_default/theme.html', 22, false),array('modifier', 'regex_replace', 'pack2011_default/theme.html', 122, false),array('modifier', 'xoops_user_avatarize', 'pack2011_default/theme.html', 132, false),array('modifier', 'strstr', 'pack2011_default/theme.html', 227, false),array('function', 'user_uname2name', 'pack2011_default/theme.html', 133, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['xoops_charset']; ?>
"<?php echo '?>'; ?>

<?php echo ''; ?><?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => (@XOOPS_THEME_PATH)."/".($this->_tpl_vars['xoops_theme'])."/xugj_already_js.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?><?php echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
<meta http-equiv="X-UA-Compatible" content="chrome=1" />

<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
<?php if ($this->_tpl_vars['xoops_pagetitle']): ?> - <?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
<?php else: ?><?php if ($this->_tpl_vars['xoops_slogan']): ?> - <?php echo $this->_tpl_vars['xoops_slogan']; ?>
<?php endif; ?><?php endif; ?></title>

<meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
" />
<meta name="robots" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['xoops_meta_robots'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
" />
<meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
" />
<meta name="author" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['xoops_meta_author'])) ? $this->_run_mod_handler('replace', true, $_tmp, "@", "&#x40;") : smarty_modifier_replace($_tmp, "@", "&#x40;")); ?>
" />
<meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
" />
<meta name="generator" content="XOOPS Cube" />
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/xoops.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/import_basic.css" media="all" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/import_print.css" media="print" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/jquery-jcflick.css" media="all" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/jquery-megaDropdown.css" media="all" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/jquery-jktab.css" media="all" type="text/css" />
<?php if (! $this->_tpl_vars['xcl22_jquery_is_already']): ?>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/smoothness/jquery-ui-1.8.16.custom.css" media="all" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/jquery-ui-1.8.16.custom.min.js"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['xoops_module_header']): ?><?php echo $this->_tpl_vars['xoops_module_header']; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['xoops_block_header']): ?><?php echo $this->_tpl_vars['xoops_block_header']; ?>
<?php endif; ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/global.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/jquery-megaDropdown.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/jquery-jktab.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/jquery-jcflick.js"></script>
<script type="text/javascript">
//<![CDATA[
(function(){
	if( ProjectName.ua.iPhone || ProjectName.ua.Android || ProjectName.ua.WP7 ){
		ProjectName.MOD.print_r( ProjectName.META.iOS() );
	}
})();

jQuery(function($){
	window.onload = function(){
		ProjectName.PARTS.hideAdBar();
	};
	if ( typeof window.onorientationchange === 'object' && !ProjectName.ua.Android ) {
		$(window).bind( 'orientationchange', function(){ ProjectName.PARTS.hideAdBar(); } );
	} else {
		$(window).bind( 'resize', function(){ ProjectName.PARTS.hideAdBar(); } );
	}

	if( !ProjectName.ua.iPhone && !ProjectName.ua.iPad && !ProjectName.ua.Android ){
		$('#topnav').megaDropdown();
	}
	ProjectName.PARTS.scrollAnchor();
	$('#footerTabIndex').jktab();

	$('#flickMain').jcflick({
		//init
		flickContainer: 'flickContainer',
		flickWrapper: 'flickWrapper',
		flickCol: 'flickCol',

		//conf
		flickLamp: 'flickLamp',
		flickBtn: 'flickBtn',
		flickBtnNextName: 'Next',
		flickBtnBackName: 'Back',
		flickCur: 0,
		autoChange: true,
		autoTimer: 5000
	});

	ProjectName.PARTS.scrollAnchor();

	var stop = false;
	$ ( '.jquery-ui-accordion-title' )
		. click ( function ( event ){
			if ( stop ) {
				event . stopImmediatePropagation ();
				event . preventDefault ();
				stop = false;
			}
		} ) ;
	$ ( '.jquery-ui-accordion' )
		. accordion ( {
			icons: {
				'header': 'ui-icon-folder-collapsed',
				'headerSelected': 'ui-icon-folder-open'
			},
			header: '.jquery-ui-accordion-title'
		} )
		. sortable ( {
			axis: 'y',
			handle: '.jquery-ui-accordion-title',
			stop: function () {
				stop = true;
			}
		} ) ;
});
//]]>
</script>
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
//<![CDATA[
	DD_belatedPNG.fix('img');
//]]>
</script>
<![endif]-->
<script type="text/javascript"><?php echo ((is_array($_tmp=$this->_tpl_vars['xoops_js'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/(\/\/\-\->|<!\-\-)/", "") : smarty_modifier_regex_replace($_tmp, "/(\/\/\-\->|<!\-\-)/", "")); ?>
</script>
</head>
<body>
<div id="globalHeaderContainer">
	<div id="headerInner">
			<span id="headerRss">
			<a href="<?php echo $this->_tpl_vars['xugj_feed_url']; ?>
" title="rss"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/rss.png" alt="rss" /></a>
			</span>
		<?php if ($this->_tpl_vars['xoops_isuser'] === true): ?>
			<span id="headerName">
			<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['xoops_userid'])) ? $this->_run_mod_handler('xoops_user_avatarize', true, $_tmp) : smarty_modifier_xoops_user_avatarize($_tmp)); ?>
" /></a>
			<?php echo smarty_function_user_uname2name(array('uname' => $this->_tpl_vars['xoops_uname']), $this);?>

			</span>
						<span id="headerSearch">
			<form id="headerSearch" action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/search.php" method="get">
			<input type="text" name="query" size="10" />
			<input type="hidden" name="action" value="results" />
			<button name="submit" type="submit" value="search" accesskey="F"><?php echo @_SEARCH; ?>
</button>
			</form>
			</span>
						<span id="headerLogOut">
			<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"><?php echo @_LOGOUT; ?>
</a>
			</span>
		<?php else: ?>
			<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><?php echo @_LOGIN; ?>
</a>
		<?php endif; ?>
	</div></div>
<div id="globalContentsWrapper">
	<div id="siteTitle">
		<?php if (! $this->_tpl_vars['legacy_module']): ?>
			<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/logo.png" alt="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
" />
			<span class="level1"><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</span>
		<?php else: ?>
			<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/logo.png" alt="" /></a>
			<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><span class="level1"><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</span></a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['xoops_slogan']): ?>
			<span class="level3">&nbsp;-&nbsp;<?php echo $this->_tpl_vars['xoops_slogan']; ?>
</span>
		<?php endif; ?>
	</div>
	<?php if ($this->_tpl_vars['multiMenuToTheme']['contents']): ?>
	<div>
	<ul id="topnav">
	<?php $_from = $this->_tpl_vars['multiMenuToTheme']['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['menuloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['menuloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['imenu']):
        $this->_foreach['menuloop']['iteration']++;
?>
		<li>
		<?php if ($this->_tpl_vars['imenu']['link'] != ""): ?>
			<a href="<?php echo $this->_tpl_vars['imenu']['link']; ?>
" target="<?php echo $this->_tpl_vars['imenu']['target']; ?>
" class="home">
			<?php echo $this->_tpl_vars['imenu']['title']; ?>

			</a>
			<?php if ($this->_tpl_vars['imenu']['sublinks']): ?>
			<div class="sub">
			<ul>
			<?php $_from = $this->_tpl_vars['imenu']['sublinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sublink']):
?>
				<li><a href="<?php echo $this->_tpl_vars['sublink']['url']; ?>
"><?php echo $this->_tpl_vars['sublink']['name']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
			</div>
			<?php endif; ?>
		<?php endif; ?>
		</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
	<?php endif; ?>
	<div style="clear: both ; height:0px; visibility:hidden;"></div>
	<?php if (empty ( $this->_tpl_vars['xoops_contents'] )): ?>
		<div class="section">
		<div id="flickMain">
						<div class="flickContainer"><div class="flickWrapper group">
				<div class="flickCol">
					<p><a href="#">
					<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/main_xoops_picture_01.jpg" width="100%" alt="picture_01" />
					</a></p>
				</div>
				<div class="flickCol">
					<p><a href="#"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/main_xoops_picture_02.jpg" width="100%" alt="picture_02" /></a></p>
				</div>
				<div class="flickCol">
					<p><a href="#"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/main_xoops_picture_03.jpg" width="100%" alt="picture_03" /></a></p>
				</div>
			</div></div>

						<div class="flickLamp"></div>
			
						<div class="flickBtn group"></div>
					</div>
	</div>		<?php endif; ?>

	<div class="group">
		<div class="subContainer">
		<?php if ($this->_tpl_vars['xoops_showlblock']): ?>
						<?php $_from = $this->_tpl_vars['xoops_lblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lbloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lbloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['lbloop']['iteration']++;
?>
			<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?>
			<h2 class="level2"><?php echo $this->_tpl_vars['block']['title']; ?>
</h2>
			<?php endif; ?>
			<div class="btnList">
			<?php echo $this->_tpl_vars['block']['content']; ?>

			</div>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['xoops_showrblock']): ?>
						<?php $_from = $this->_tpl_vars['xoops_rblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rbloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rbloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['rbloop']['iteration']++;
?>
			<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?>
			<h2 class="level2"><?php echo $this->_tpl_vars['block']['title']; ?>
</h2>
			<?php endif; ?>
			<div class="btnList">
			<?php echo $this->_tpl_vars['block']['content']; ?>

			</div>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		</div>
		<div class="mainContainer">
				<?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>
			<div class="section">
								<?php if ($this->_tpl_vars['xoops_ccblocks']): ?>
				<div class="group">
					<?php $_from = $this->_tpl_vars['xoops_ccblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ccloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ccloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['ccloop']['iteration']++;
?>
						<?php if ($this->_tpl_vars['block']['weight'] < 100): ?>
							<div class="fsL">
							<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?>
								<h2 class="level2"><?php echo $this->_tpl_vars['block']['title']; ?>
</h2>
							<?php endif; ?>
							<div class="BlockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
							</div>
							<p class="fsL"></p>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</div>
				<?php endif; ?>
				
				<div class="group mb10">
								<?php if ($this->_tpl_vars['xoops_clblocks']): ?>
					<div class="pane2 floL group">
					<?php $_from = $this->_tpl_vars['xoops_clblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['clloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['clloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['clloop']['iteration']++;
?>
						<?php if ($this->_tpl_vars['block']['weight'] < 100): ?>
							<div class="fRect" id="centerl<?php echo $this->_foreach['clloop']['iteration']; ?>
">
							<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?>
								<h2 class="BlockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</h2>
							<?php endif; ?>
							<div class="BlockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
							</div>
							<p class="fsL"></p>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php endif; ?>
				
								<?php if ($this->_tpl_vars['xoops_crblocks']): ?>
					<div class="pane2 floR group">
					<?php $_from = $this->_tpl_vars['xoops_crblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['crloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['crloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['crloop']['iteration']++;
?>
						<?php if ($this->_tpl_vars['block']['weight'] < 100): ?>
							<div class="fRect" id="centerr<?php echo $this->_foreach['crloop']['iteration']; ?>
">
							<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?>
								<h2 class="BlockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</h2>
							<?php endif; ?>
							<div class="BlockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
							</div>
							<p class="fsL"></p>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php endif; ?>
								</div>
			
		</div>		<?php endif; ?>

						<?php if (! empty ( $this->_tpl_vars['xoops_contents'] )): ?>
			<div class="group">
				<h2 class="level2">
				<?php if ($this->_tpl_vars['xoops_pagetitle']): ?>
					<?php echo $this->_tpl_vars['xoops_pagetitle']; ?>

				<?php else: ?>
					<?php echo $this->_tpl_vars['xoops_modulename']; ?>

				<?php endif; ?>
				</h2>
				<div class="fsL">
				<?php echo $this->_tpl_vars['xoops_contents']; ?>

				</div>
			</div>
			<?php endif; ?>
			
				<?php if ($this->_tpl_vars['xoops_showcblock'] == 1): ?>
			<div class="section">
								<?php if ($this->_tpl_vars['xoops_ccblocks']): ?>
				<div class="group">
					<?php $_from = $this->_tpl_vars['xoops_ccblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ccloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ccloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['ccloop']['iteration']++;
?>
						<?php if ($this->_tpl_vars['block']['weight'] >= 100): ?>
							<div class="fsL">
							<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?>
								<h2 class="level2"><?php echo $this->_tpl_vars['block']['title']; ?>
</h2>
							<?php endif; ?>
							<div class="BlockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
							</div>
							<p class="fsL"></p>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</div>
				<?php endif; ?>
				
				<div class="group mb10">
								<?php if ($this->_tpl_vars['xoops_clblocks']): ?>
					<div class="pane2 floL group">
					<?php $_from = $this->_tpl_vars['xoops_clblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['clloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['clloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['clloop']['iteration']++;
?>
						<?php if ($this->_tpl_vars['block']['weight'] >= 100): ?>
							<div class="fRect" id="centerl<?php echo $this->_foreach['clloop']['iteration']; ?>
">
							<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?>
								<h2 class="BlockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</h2>
							<?php endif; ?>
							<div class="BlockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
							</div>
							<p class="fsL"></p>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php endif; ?>
				
								<?php if ($this->_tpl_vars['xoops_crblocks']): ?>
					<div class="pane2 floR group">
					<?php $_from = $this->_tpl_vars['xoops_crblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['crloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['crloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['crloop']['iteration']++;
?>
						<?php if ($this->_tpl_vars['block']['weight'] >= 100): ?>
							<div class="fRect" id="centerr<?php echo $this->_foreach['crloop']['iteration']; ?>
">
							<?php if (! ((is_array($_tmp=$this->_tpl_vars['block']['title'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'none') : strstr($_tmp, 'none'))): ?>
								<h2 class="BlockTitle"><?php echo $this->_tpl_vars['block']['title']; ?>
</h2>
							<?php endif; ?>
							<div class="BlockContent"><?php echo $this->_tpl_vars['block']['content']; ?>
</div>
							</div>
							<p class="fsL"></p>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php endif; ?>
								</div>
			
		</div>		<?php endif; ?>

	</div></div></div><?php if ($this->_tpl_vars['xoops_banner'] && $this->_tpl_vars['xoops_banner'] != ""): ?>
	<?php echo $this->_tpl_vars['xoops_banner']; ?>

<?php endif; ?>
<div id="globalFooterContainer">
	<div id="footerInner">
		<p><?php if ($this->_tpl_vars['xoops_footer']): ?><?php echo $this->_tpl_vars['xoops_footer']; ?>
<?php endif; ?> Distributed by XOOPS Cube 2.2 Distribution Pack 2011 Team.</p>
	</div></div></body>
</html>