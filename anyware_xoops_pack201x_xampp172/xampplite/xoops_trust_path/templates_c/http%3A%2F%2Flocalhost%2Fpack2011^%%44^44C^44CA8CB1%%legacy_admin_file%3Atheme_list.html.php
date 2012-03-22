<?php /* Smarty version 2.6.26, created on 2012-01-02 17:57:48
         compiled from file:theme_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:theme_list.html', 18, false),array('modifier', 'theme', 'file:theme_list.html', 66, false),array('function', 'xoops_token', 'file:theme_list.html', 25, false),array('function', 'cycle', 'file:theme_list.html', 34, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_LEGACY_NAME; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><a href="./index.php?action=ThemeList"><?php echo @_AD_LEGACY_LANG_THEME_ADMIN; ?>
</a></span>
</div>

<h3 class="admintitle"><?php echo @_AD_LEGACY_LANG_THEME_ADMIN; ?>
</h3>

<div class="tips"><?php echo @_AD_LEGACY_TIPS_THEME_ADMIN; ?>
</div>

<ul class="toptab">
  <li class="templates"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/legacyRender/admin/index.php?action=TplsetList">Templates</a></li>
</ul>

<?php if ($this->_tpl_vars['actionForm']->hasError()): ?>
<div class="error">
  <ul>
    <?php $_from = $this->_tpl_vars['actionForm']->getErrorMessages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
      <li><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
    <?php endforeach; endif; unset($_from); ?>
  </ul>
</div>
<?php endif; ?>

<form action="./index.php?action=ThemeList" method="post" >
<?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

<table class="outer">
  <tr>
    <th><?php echo @_AD_LEGACY_LANG_THEME; ?>
</th>
    <th><?php echo @_AD_LEGACY_LANG_PACKAGE; ?>
</th>
    <th colspan="2"><?php echo @_AD_LEGACY_LANG_CONTROL; ?>
</th>
  </tr>
  <?php $_from = $this->_tpl_vars['themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['theme']):
?>
    <?php if ($this->_tpl_vars['currentThemeName'] == $this->_tpl_vars['theme']->get('dirname')): ?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
 active">
    <?php else: ?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
 inactive">
    <?php endif; ?>
      <td class="legacy_list_image">
        <?php if ($this->_tpl_vars['theme']->get('screenshot')): ?>
          <img src="<?php echo @XOOPS_THEME_URL; ?>
/<?php echo $this->_tpl_vars['theme']->getShow('dirname'); ?>
/<?php echo $this->_tpl_vars['theme']->getShow('screenshot'); ?>
" width="120" height="90" alt="<?php echo $this->_tpl_vars['theme']->getShow('name'); ?>
" title="<?php echo $this->_tpl_vars['theme']->getShow('name'); ?>
" />
        <?php endif; ?>
        <div class="legacy_list_imagetitle"><?php echo $this->_tpl_vars['theme']->getShow('name'); ?>
</div>
      </td>
      <td class="legacy_list_text">
        <p class="legacy_list_description"><?php echo $this->_tpl_vars['theme']->getShow('description'); ?>
</p>
        <ul>
          <li><?php echo @_AD_LEGACY_LANG_VERSION; ?>
 : <?php echo $this->_tpl_vars['theme']->getShow('version'); ?>
</li>
          <li><?php echo @_AD_LEGACY_LANG_RENDER; ?>
 : <?php echo $this->_tpl_vars['theme']->getShow('render_system'); ?>
</li>
          <li><?php echo @_AD_LEGACY_LANG_FORMAT; ?>
 : <?php echo $this->_tpl_vars['theme']->getShow('format'); ?>
</li>
          <li><?php echo @_AD_LEGACY_LANG_AUTHOR; ?>
 : <?php echo $this->_tpl_vars['theme']->getShow('author'); ?>
</li>
          <?php if ($this->_tpl_vars['theme']->get('licence')): ?>
            <li><?php echo @_AD_LEGACY_LANG_LICENCE; ?>
 : <?php echo $this->_tpl_vars['theme']->getShow('license'); ?>
</li>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['theme']->get('url') != null): ?>
            <li><a href="<?php echo $this->_tpl_vars['theme']->getShow('url'); ?>
"><?php echo @_AD_LEGACY_LANG_GET_THE_LATEST_VERSION; ?>
</a></li>
          <?php endif; ?>
        </ul>
      </td>
      <td class="legacy_list_select">
        <input type="checkbox" name="select[<?php echo $this->_tpl_vars['theme']->getShow('dirname'); ?>
]" value="1" <?php if ($this->_tpl_vars['actionForm']->get('select',$this->_tpl_vars['theme']->get('dirname'))): ?>checked="checked"<?php endif; ?> />
      </td>
      <td class="legacy_list_control">
        <?php if ($this->_tpl_vars['currentThemeName'] != $this->_tpl_vars['theme']->get('dirname')): ?>
          <input name="choose[<?php echo $this->_tpl_vars['theme']->getShow('dirname'); ?>
]" type="submit" value="<?php echo @_SELECT; ?>
" class="formButton" />
        <?php else: ?>
          <img src="<?php echo ((is_array($_tmp="icons/active.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_AD_LEGACY_LANG_SELECTED; ?>
" title="<?php echo @_AD_LEGACY_LANG_SELECTED; ?>
" />
        <?php endif; ?>
      </td>
    </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
    <td colspan="2" class="foot"></td>
    <td class="foot">
      <input type="submit" value="<?php echo @_SUBMIT; ?>
" class="formButton" name="submit" />
    </td>
    <td class="foot"></td>
  </tr>
</table>
</form>