<?php /* Smarty version 2.6.26, created on 2012-01-03 14:04:50
         compiled from file:customblock_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:customblock_edit.html', 31, false),array('function', 'xoops_token', 'file:customblock_edit.html', 38, false),array('function', 'xoops_input', 'file:customblock_edit.html', 39, false),array('function', 'cycle', 'file:customblock_edit.html', 56, false),array('function', 'xoops_optionsArray', 'file:customblock_edit.html', 64, false),array('function', 'xoops_dhtmltarea', 'file:customblock_edit.html', 77, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_LEGACY_NAME; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=BlockList"><?php echo @_MI_LEGACY_MENU_BLOCKLIST; ?>
</a>
  <?php if ($this->_tpl_vars['actionForm']->get('content')): ?>
    <?php if ($this->_tpl_vars['object']->get('visible') == 1): ?>
      &raquo;&raquo; <span class="adminnaviTitle"><?php echo @_AD_LEGACY_LANG_CUSTOMBLOCK_EDIT; ?>
</span>
    <?php else: ?>
      &raquo;&raquo; <span class="adminnaviTitle"><?php echo @_AD_LEGACY_LANG_BLOCK_INSTALL; ?>
</span>
    <?php endif; ?>
  <?php else: ?>
    &raquo;&raquo; <span class="adminnaviTitle"><?php echo @_AD_LEGACY_LANG_ADD_CUSTOM_BLOCK; ?>
</span>
  <?php endif; ?>
</div>

<h3 class="admintitle">
  <?php if ($this->_tpl_vars['actionForm']->get('content')): ?>
    <?php if ($this->_tpl_vars['object']->get('visible') == 1): ?>
      <?php echo @_AD_LEGACY_LANG_CUSTOMBLOCK_EDIT; ?>

    <?php else: ?>
      <?php echo @_AD_LEGACY_LANG_BLOCK_INSTALL; ?>

    <?php endif; ?>
  <?php else: ?>
    <?php echo @_AD_LEGACY_LANG_ADD_CUSTOM_BLOCK; ?>

  <?php endif; ?>
</h3>

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

<form action="index.php?action=CustomBlockEdit" method="post">
  <?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'bid','value' => $this->_tpl_vars['actionForm']->get('bid')), $this);?>

  <table class="outer">
    <tr>
      <th colspan="2">
        <?php if ($this->_tpl_vars['actionForm']->get('content')): ?>
          <?php if ($this->_tpl_vars['object']->get('visible') == 1): ?>
            <?php echo @_AD_LEGACY_LANG_CUSTOMBLOCK_EDIT; ?>

          <?php else: ?>
            <?php echo @_AD_LEGACY_LANG_BLOCK_INSTALL; ?>

          <?php endif; ?>
        <?php else: ?>
          <?php echo @_AD_LEGACY_LANG_ADD_CUSTOM_BLOCK; ?>

        <?php endif; ?>
      </th>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_TITLE; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'title','value' => $this->_tpl_vars['actionForm']->get('title'),'size' => 50,'maxlength' => 255), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_SIDE; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select name="side">
          <?php echo smarty_function_xoops_optionsArray(array('id' => 'side','from' => $this->_tpl_vars['columnSideArr'],'label' => 'name','value' => 'id','default' => $this->_tpl_vars['actionForm']->get('side')), $this);?>

        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_WEIGHT; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'weight','value' => $this->_tpl_vars['actionForm']->get('weight'),'size' => 5,'class' => 'legacy_list_number'), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_CONTENT; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_dhtmltarea(array('type' => 'text','name' => 'content','value' => $this->_tpl_vars['actionForm']->get('content'),'rows' => 20,'cols' => 60), $this);?>

              </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_C_TYPE; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select name='c_type'>
          <?php echo smarty_function_xoops_optionsArray(array('id' => 'c_type','from' => $this->_tpl_vars['ctypeArr'],'value' => 'type','label' => 'label','default' => $this->_tpl_vars['actionForm']->get('c_type')), $this);?>

        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_BCACHETIME; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select name='bcachetime'>
          <?php echo smarty_function_xoops_optionsArray(array('id' => 'bcachetime','from' => $this->_tpl_vars['cachetimeArr'],'value' => 'cachetime','label' => 'label','default' => $this->_tpl_vars['actionForm']->get('bcachetime')), $this);?>

        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_TARGET_MODULES; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select  size='5' name='bmodule[]' multiple='multiple'>
          <?php if ($this->_tpl_vars['actionForm']->get('bmodule')): ?>
            <?php echo smarty_function_xoops_optionsArray(array('id' => "bmodule[]",'from' => $this->_tpl_vars['moduleArr'],'value' => 'mid','label' => 'name','default' => $this->_tpl_vars['actionForm']->get('bmodule')), $this);?>

          <?php else: ?>
            <?php echo smarty_function_xoops_optionsArray(array('id' => "bmodule[]",'from' => $this->_tpl_vars['moduleArr'],'value' => 'mid','label' => 'name','default' => -1), $this);?>

          <?php endif; ?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_LEGACY_LANG_TARGET_GROUPS; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select  size='5' name='groupid[]' multiple='multiple'>
          <?php if ($this->_tpl_vars['actionForm']->get('groupid')): ?>
            <?php echo smarty_function_xoops_optionsArray(array('id' => "groupid[]",'from' => $this->_tpl_vars['groupArr'],'value' => 'groupid','label' => 'name','default' => $this->_tpl_vars['actionForm']->get('groupid')), $this);?>

          <?php else: ?>
            <?php echo smarty_function_xoops_optionsArray(array('id' => "groupid[]",'from' => $this->_tpl_vars['groupArr'],'value' => 'groupid','label' => 'name','default' => 1), $this);?>

          <?php endif; ?>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2" class="foot">
        <input class="formButton" type="submit" value="<?php echo @_SUBMIT; ?>
" />
        <input class="formButton" type="submit" value="<?php echo @_BACK; ?>
" name="_form_control_cancel" />
      </td>
    </tr>
  </table>
</form>