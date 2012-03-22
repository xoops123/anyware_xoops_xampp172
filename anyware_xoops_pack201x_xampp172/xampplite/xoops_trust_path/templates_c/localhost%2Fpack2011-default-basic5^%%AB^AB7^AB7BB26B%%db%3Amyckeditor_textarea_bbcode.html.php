<?php /* Smarty version 2.6.26, created on 2012-01-03 14:04:51
         compiled from db:myckeditor_textarea_bbcode.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'myckeditordhtmltarea', 'db:myckeditor_textarea_bbcode.html', 7, false),)), $this); ?>
<div><input checked type="checkbox" id="<?php echo $this->_tpl_vars['element']['id']; ?>
_switch_bbcode" onclick="if(this.checked){document.getElementById('<?php echo $this->_tpl_vars['element']['name']; ?>
_bbcode_buttons_pre').style.display='block';document.getElementById('<?php echo $this->_tpl_vars['element']['name']; ?>
_bbcode_buttons_post').style.display='block';document.getElementById('<?php echo $this->_tpl_vars['element']['id']; ?>
_myckeditorOn').value='CKEeditorON';<?php echo $this->_tpl_vars['element']['id']; ?>
_myckeditor_remove();}else{document.getElementById('<?php echo $this->_tpl_vars['element']['name']; ?>
_bbcode_buttons_pre').style.display='none';document.getElementById('<?php echo $this->_tpl_vars['element']['name']; ?>
_bbcode_buttons_post').style.display='none';}" />
<label for="<?php echo $this->_tpl_vars['element']['id']; ?>
_switch_bbcode">BBCode Toolbar</label>
<?php if ($this->_tpl_vars['element']['myckeditor']): ?>
<input type="button" class="formButton" value="CKEeditorON" name="<?php echo $this->_tpl_vars['element']['id']; ?>
_myckeditorOn" id="<?php echo $this->_tpl_vars['element']['id']; ?>
_myckeditorOn" onclick="if(this.value=='CKEeditorON'){this.value='CKEeditorOFF';<?php echo $this->_tpl_vars['element']['id']; ?>
_myckeditor_exec();document.getElementById('<?php echo $this->_tpl_vars['element']['id']; ?>
_switch_bbcode').checked=false;document.getElementById('<?php echo $this->_tpl_vars['element']['name']; ?>
_bbcode_buttons_pre').style.display='none';document.getElementById('<?php echo $this->_tpl_vars['element']['name']; ?>
_bbcode_buttons_post').style.display='none';}else{this.value='CKEeditorON';<?php echo $this->_tpl_vars['element']['id']; ?>
_myckeditor_remove();}"/>
<?php endif; ?>
</div>
<?php echo smarty_function_myckeditordhtmltarea(array('name' => ($this->_tpl_vars['element']['name']),'id' => ($this->_tpl_vars['element']['id']),'cols' => $this->_tpl_vars['element']['cols'],'rows' => ($this->_tpl_vars['element']['rows']),'value' => ($this->_tpl_vars['element']['value']),'pre_style' => "display:blocke;",'post_style' => "display:block;"), $this);?>