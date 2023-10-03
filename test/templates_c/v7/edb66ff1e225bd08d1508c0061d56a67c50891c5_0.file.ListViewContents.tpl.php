<?php
/* Smarty version 4.3.2, created on 2023-09-29 05:56:27
  from '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Slideshow/ListViewContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6516670bad5052_79396293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edb66ff1e225bd08d1508c0061d56a67c50891c5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Slideshow/ListViewContents.tpl',
      1 => 1695966964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516670bad5052_79396293 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br>
<?php if (!$_smarty_tpl->tpl_vars['RECORDS']->value) {?>
	<center><h1>Welcome to Slideshow<h1>
	<h4>The support is enabled through Javascript for Leads & Contacts!</h4></center>
<?php } else {
echo '<script'; ?>
 type="text/javascript" src="modules/Slideshow/js/remark.min.js"><?php echo '</script'; ?>
>
<style type="text/css">
.remark-slide h1 { font-size: 30px; }
.remark-slide em { font-size: 18px; }
#page { display: none; }
</style>

<!-- Prepare remarkjs friendly source -->
<textarea id="source">
class: center, middle
# <?php echo $_smarty_tpl->tpl_vars['SRCMODULE']->value;?>
 ( <?php echo $_smarty_tpl->tpl_vars['COUNT']->value;?>
 )
---
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORDS']->value, 'RECORD');
$_smarty_tpl->tpl_vars['RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->tpl_vars['RECORD']->do_else = false;
?>
Field | Value
---- | ---
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD']->value, 'FIELDVALUE', false, 'FIELDNAME');
$_smarty_tpl->tpl_vars['FIELDVALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELDNAME']->value => $_smarty_tpl->tpl_vars['FIELDVALUE']->value) {
$_smarty_tpl->tpl_vars['FIELDVALUE']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELDVALUE']->value) {
echo $_smarty_tpl->tpl_vars['FIELDNAME']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['FIELDVALUE']->value;?>

<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
---
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

class: center, middle
# Thank you
</textarea>

<!-- Trigger rendering on the client-side -->
<?php echo '<script'; ?>
 type="text/javascript">
	var slideshow = remark.create();
	jQuery(function(){
		jQuery('table').addClass('table table-bordered');
	});
<?php echo '</script'; ?>
>
<?php }
}
}
