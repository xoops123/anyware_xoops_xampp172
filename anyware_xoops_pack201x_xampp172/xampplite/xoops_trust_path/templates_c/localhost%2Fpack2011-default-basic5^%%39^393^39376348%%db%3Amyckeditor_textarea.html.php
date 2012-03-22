<?php /* Smarty version 2.6.26, created on 2012-01-03 15:34:05
         compiled from db:myckeditor_textarea.html */ ?>
<div>
<input type="button" class="formButton" value="CKEeditorON" name="<?php echo $this->_tpl_vars['element']['id']; ?>
_myckeditorOn" onclick="if(this.value=='CKEeditorON'){this.value='CKEeditorOFF';<?php echo $this->_tpl_vars['element']['id']; ?>
_myckeditor_exec();}else{this.value='CKEeditorON';<?php echo $this->_tpl_vars['element']['id']; ?>
_myckeditor_remove();}"/>
</div>
<textarea name="<?php echo $this->_tpl_vars['element']['name']; ?>
" class="<?php echo $this->_tpl_vars['element']['class']; ?>
" cols="<?php echo $this->_tpl_vars['element']['cols']; ?>
" rows="<?php echo $this->_tpl_vars['element']['rows']; ?>
" id="<?php echo $this->_tpl_vars['element']['id']; ?>
"><?php echo $this->_tpl_vars['element']['value']; ?>
</textarea>