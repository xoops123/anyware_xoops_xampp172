<?php /* Smarty version 2.6.26, created on 2012-01-03 15:19:47
         compiled from db:legacy_xoopsform_grouppermform.html */ ?>
<h4><?php echo $this->_tpl_vars['form']->getTitle(); ?>
</h4>
<?php echo $this->_tpl_vars['form']->_permDesc; ?>
<br/>

<form name='<?php echo $this->_tpl_vars['form']->getName(); ?>
' id='<?php echo $this->_tpl_vars['form']->getName(); ?>
' action='<?php echo $this->_tpl_vars['form']->getAction(); ?>
' method='<?php echo $this->_tpl_vars['form']->getMethod(); ?>
' <?php echo $this->_tpl_vars['form']->getExtra(); ?>
 >
  <table class="outer" style="width:100%;" cellspacing="1">
    <?php $_from = $this->_tpl_vars['form']->getElements(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
      <?php if (! $this->_tpl_vars['element']->isHidden()): ?>
        <tr>
          <td class="head" style="text-align:left; vertical-align:top;">
            <?php echo $this->_tpl_vars['element']->getCaption(); ?>

            <?php if ($this->_tpl_vars['element']->getDescription() != ''): ?>
              <br /><br /><span style="font-weight: normal;"><?php echo $this->_tpl_vars['element']->getDescription(); ?>
</span>
            <?php endif; ?>
          </td>
          <td class='even' style="text-align:left; vertical-align:top;">
            <?php echo $this->_tpl_vars['element']->render(); ?>

          </td>
        </tr>
      <?php else: ?>
        <?php echo $this->_tpl_vars['element']->render(); ?>

      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
  </table>
</form>