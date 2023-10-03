<?php
/* Smarty version 4.3.2, created on 2023-09-28 03:24:19
  from '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Install/Step7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6514f1e3bc5f59_92192335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57f72255af5c5ac81f68aa997c5e507e0503c0d0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Install/Step7.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6514f1e3bc5f59_92192335 (Smarty_Internal_Template $_smarty_tpl) {
?>
<center><?php echo vtranslate('LBL_LOADING_PLEASE_WAIT');?>
...</center>

<form class="form-horizontal" name="step7" method="post" action="?module=Users&action=Login">
	<img src="//stats.vtiger.com/stats.php?uid=<?php echo $_smarty_tpl->tpl_vars['APPUNIQUEKEY']->value;?>
&v=<?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
&type=I&industry=<?php echo urlencode($_smarty_tpl->tpl_vars['INDUSTRY']->value);?>
" alt='' title='' border=0 width='1px' height='1px'>
	<input type=hidden name="username" value="admin" >
	<input type=hidden name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" >
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	jQuery(function () { /* Delay to let page load complete */
		setTimeout(function () {
			jQuery('form[name="step7"]').submit();
		}, 150);
	});
<?php echo '</script'; ?>
>
<?php }
}
