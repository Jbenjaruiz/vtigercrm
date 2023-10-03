<?php
/* Smarty version 4.3.2, created on 2023-09-29 05:38:39
  from '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/WorldClock/ListViewContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651662df8cd5f7_47149191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ea3cb52b3353058c01778e03e0b098e71692911' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/WorldClock/ListViewContents.tpl',
      1 => 1695965895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651662df8cd5f7_47149191 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="layouts/v7/modules/WorldClock/resources/lib/jquery-clock-plugin/css/analog.css" type="text/css" />
<?php echo '<script'; ?>
 src="layouts/v7/modules/WorldClock/resources/lib/jquery-clock-plugin/js/jquery.clock.js"><?php echo '</script'; ?>
>

<div style="text-align: center">
	<ul id="worldclock-on-sidebar" class="analog" data-tz="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->name;?>
">
	  <li class="hour"></li>
	  <li class="min"></li>
	  <li class="sec"></li>
	  <li class="meridiem"></li>
	</ul>
</div>

<div style="text-align: center;" id="timezone-clocks" class="row-fluid"></div>
<?php }
}
