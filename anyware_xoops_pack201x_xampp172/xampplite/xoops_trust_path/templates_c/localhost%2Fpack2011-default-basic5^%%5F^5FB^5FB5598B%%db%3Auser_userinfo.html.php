<?php /* Smarty version 2.6.26, created on 2012-01-02 22:34:00
         compiled from db:user_userinfo.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'db:user_userinfo.html', 22, false),array('modifier', 'xoops_escape', 'db:user_userinfo.html', 65, false),array('modifier', 'xoops_formattimestamp', 'db:user_userinfo.html', 115, false),array('modifier', 'xoops_formattimestampGMT', 'db:user_userinfo.html', 155, false),array('function', 'cycle', 'db:user_userinfo.html', 34, false),array('function', 'mailto', 'db:user_userinfo.html', 57, false),array('function', 'legacy_profile', 'db:user_userinfo.html', 70, false),)), $this); ?>
<div style="text-align:right;">
<?php if ($this->_tpl_vars['user_ownpage'] == true): ?>
	<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/notifications.php"><?php echo @_MD_USER_LANG_NOTIFY; ?>
</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['user_ownpage'] == true && $this->_tpl_vars['enableSelfDelete'] == true && $this->_tpl_vars['xoops_isadmin'] == false): ?>
| <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=delete"><?php echo @_MD_USER_LANG_DELACCOUNT; ?>
</a>
<?php elseif ($this->_tpl_vars['xoops_isadmin'] == true): ?>
    | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php?uid=<?php echo $this->_tpl_vars['thisUser']->getShow('uid'); ?>
"><?php echo @_MD_USER_LANG_EDITPROFILE; ?>
</a> - 
    | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php?op=avatarform&amp;uid=<?php echo $this->_tpl_vars['thisUser']->getShow('uid'); ?>
"><?php echo @_MD_USER_LANG_AVATAR_EDIT; ?>
</a> -
    | <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/user/admin/index.php?action=UserDelete&amp;uid=<?php echo $this->_tpl_vars['thisUser']->getShow('uid'); ?>
"><?php echo @_MD_USER_LANG_DELACCOUNT; ?>
</a>
<?php endif; ?>
</div>

<table width="100%" border="0" cellspacing="5">
  <tr valign="top">
    <td width="50%">

    <table class="outer" cellpadding="4" cellspacing="1" width="100%">
      <tr>
        <th colspan="2" style="text-align:center;">
          <?php echo ((is_array($_tmp=@_MD_USER_LANG_ALLABOUT)) ? $this->_run_mod_handler('replace', true, $_tmp, "%s", $this->_tpl_vars['thisUser']->getShow('uname')) : smarty_modifier_replace($_tmp, "%s", $this->_tpl_vars['thisUser']->getShow('uname'))); ?>

        </th>
      </tr>
      <?php if ($this->_tpl_vars['user_ownpage'] == true): ?>
      <tr>
        <td class="head" colspan="2" style="text-align:center;">
          <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php?uid=<?php echo $this->_tpl_vars['thisUser']->getShow('uid'); ?>
"><?php echo @_MD_USER_LANG_EDITPROFILE; ?>
</a>
        </td>
      </tr>
      <?php endif; ?>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_AVATAR; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
" style="text-align:center;">
          <?php if ($this->_tpl_vars['thisUser']->get('user_avatar') != "blank.gif"): ?>
            <img src="<?php echo @XOOPS_UPLOAD_URL; ?>
/<?php echo $this->_tpl_vars['thisUser']->getShow('user_avatar'); ?>
" alt="Avatar" title="Avatar" />
          <?php else: ?>
            <img src="<?php echo @XOOPS_URL; ?>
/modules/user/images/no_avatar.gif" alt="No Avatar" title="No Avatar" />
          <?php endif; ?>
          <?php if ($this->_tpl_vars['user_ownpage'] == true): ?>
            <br /><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php?op=avatarform&amp;uid=<?php echo $this->_tpl_vars['thisUser']->getShow('uid'); ?>
"><?php echo @_MD_USER_LANG_AVATAR_EDIT; ?>
</a>
          <?php endif; ?>
        </td>
      </tr>
      <tr>
        <td class="head"><?php echo @_MD_USER_LANG_NAME; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
" style="text-align:center;"><?php echo $this->_tpl_vars['thisUser']->getShow('name'); ?>
</td>
      </tr>
      <tr>
        <td class="head"><?php echo @_MD_USER_LANG_WEBSITE; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><a href="<?php echo $this->_tpl_vars['thisUser']->getShow('url'); ?>
" rel="external"><?php echo $this->_tpl_vars['thisUser']->getShow('url'); ?>
</a></td>
      </tr>
      <?php if ($this->_tpl_vars['thisUser']->get('user_viewemail') == 1 || $this->_tpl_vars['user_ownpage'] == true || $this->_tpl_vars['xoops_isadmin'] == true): ?>
        <tr valign="top">
          <td class="head"><?php echo @_MD_USER_LANG_EMAIL; ?>
</td>
          <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
            <?php echo smarty_function_mailto(array('address' => $this->_tpl_vars['thisUser']->get('email'),'encode' => 'javascript'), $this);?>

          </td>
        </tr>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['xoops_isuser'] == true && $this->_tpl_vars['pmliteUrl'] != ''): ?>
        <tr valign="top">
          <td class="head"><?php echo @_MD_USER_LANG_PM; ?>
</td>
          <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
            <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pmliteUrl'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp, 'link') : smarty_modifier_xoops_escape($_tmp, 'link')); ?>
">
            <img src="<?php echo @XOOPS_URL; ?>
/images/icons/pm.gif" alt="<?php echo ((is_array($_tmp=@_SENDPMTO)) ? $this->_run_mod_handler('replace', true, $_tmp, "%s", $this->_tpl_vars['thisUser']->getShow('uname')) : smarty_modifier_replace($_tmp, "%s", $this->_tpl_vars['thisUser']->getShow('uname'))); ?>
" title="<?php echo ((is_array($_tmp=@_SENDPMTO)) ? $this->_run_mod_handler('replace', true, $_tmp, "%s", $this->_tpl_vars['thisUser']->getShow('uname')) : smarty_modifier_replace($_tmp, "%s", $this->_tpl_vars['thisUser']->getShow('uname'))); ?>
" /></a>
          </td>
        </tr>
      <?php endif; ?>
      <?php echo smarty_function_legacy_profile(array('uid' => $this->_tpl_vars['thisUser']->getShow('uid')), $this);?>

      <!--
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_USER_ICQ; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['thisUser']->getShow('user_icq'); ?>
</td>
      </tr>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_USER_AIM; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['thisUser']->getShow('user_aim'); ?>
</td>
      </tr>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_USER_YIM; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['thisUser']->getShow('user_yim'); ?>
</td>
      </tr>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_USER_MSNM; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['thisUser']->getShow('user_msnm'); ?>
</td>
      </tr>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_USER_FROM; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['thisUser']->getShow('user_from'); ?>
</td>
      </tr>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_USER_OCC; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['thisUser']->getShow('user_occ'); ?>
</td>
      </tr>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_USER_INTREST; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['thisUser']->getShow('user_intrest'); ?>
</td>
      </tr> -->
      <?php if ($this->_tpl_vars['bio'] != null): ?>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_BIO; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['thisUser']->getShow('bio'); ?>
</td>
      </tr>
     <?php endif; ?>
    </table>
    </td>
    <td width="50%">
    <table class="outer" cellpadding="4" cellspacing="1" width="100%">
      <tr valign="top">
        <th colspan="2" style="text-align:center;"><?php echo @_MD_USER_LANG_STATISTICS; ?>
</th>
      </tr>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_USER_REGDATE; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
" style="text-align:center;"><?php echo ((is_array($_tmp=$this->_tpl_vars['thisUser']->get('user_regdate'))) ? $this->_run_mod_handler('xoops_formattimestamp', true, $_tmp, 'l') : smarty_modifier_xoops_formattimestamp($_tmp, 'l')); ?>
</td>
      </tr>
      <?php if ($this->_tpl_vars['rank'] != null): ?>
        <tr valign="top">
          <td class="head"><?php echo @_MD_USER_LANG_RANK; ?>
</td>
          <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
" style="text-align:center;">
            <img src="<?php echo @XOOPS_UPLOAD_URL; ?>
/<?php echo $this->_tpl_vars['rank']->getShow('rank_image'); ?>
" alt="<?php echo $this->_tpl_vars['rank']->getShow('rank_title'); ?>
" title="<?php echo $this->_tpl_vars['rank']->getShow('rank_title'); ?>
" /><br />
            <?php echo $this->_tpl_vars['rank']->getShow('rank_title'); ?>

          </td>
        </tr>
      <?php endif; ?>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_POSTS; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
" style="text-align:center;"><?php echo $this->_tpl_vars['thisUser']->getShow('posts'); ?>
</td>
      </tr>
      <tr valign="top">
        <td class="head"><?php echo @_MD_USER_LANG_LAST_LOGIN; ?>
</td>
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
" style="text-align:center;"><?php echo ((is_array($_tmp=$this->_tpl_vars['thisUser']->get('last_login'))) ? $this->_run_mod_handler('xoops_formattimestamp', true, $_tmp, 'l') : smarty_modifier_xoops_formattimestamp($_tmp, 'l')); ?>
</td>
      </tr>
    </table>
    <br />
    <table class="outer" cellpadding="4" cellspacing="1" width="100%">
      <tr valign="top">
        <th colspan="2" style="text-align:center;"><?php echo @_MD_USER_LANG_USER_SIG; ?>
</th>
      </tr>
      <tr valign="top">
        <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['thisUser']->getShow('user_sig'); ?>
</td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<!-- start module search results loop -->
<?php $_from = $this->_tpl_vars['searchResults']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
  <p>
  <h4><?php echo $this->_tpl_vars['module']['name']; ?>
</h4>

  <!-- start results item loop -->
  <?php $_from = $this->_tpl_vars['module']['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
    <img src="<?php echo $this->_tpl_vars['result']['image']; ?>
" alt="<?php echo $this->_tpl_vars['module']['name']; ?>
" title="<?php echo $this->_tpl_vars['module']['name']; ?>
" /><b><a href="<?php echo $this->_tpl_vars['result']['link']; ?>
"><?php echo $this->_tpl_vars['result']['title']; ?>
</a></b><br /><small>(<?php echo ((is_array($_tmp=$this->_tpl_vars['result']['time'])) ? $this->_run_mod_handler('xoops_formattimestampGMT', true, $_tmp, 'l') : smarty_modifier_xoops_formattimestampGMT($_tmp, 'l')); ?>
)</small><br />
  <?php endforeach; endif; unset($_from); ?>
  <!-- end results item loop -->

  <?php if ($this->_tpl_vars['module']['has_more']): ?>
    <a href="<?php echo @XOOPS_URL; ?>
/search.php?action=showallbyuser&amp;mid=<?php echo ((is_array($_tmp=$this->_tpl_vars['module']['mid'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
&amp;uid=<?php echo $this->_tpl_vars['thisUser']->getShow('uid'); ?>
"><?php echo @_MD_USER_LANG_SHOWALL; ?>
</a>
  <?php endif; ?>
  </p>
<?php endforeach; endif; unset($_from); ?>
<!-- end module search results loop -->