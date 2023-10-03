<?php
/* Smarty version 4.3.2, created on 2023-09-28 04:17:34
  from '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Install/InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6514f04e5eb4d4_86020698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '138fc58072de9d21de60087f6c7f4aa550a43f3f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Install/InstallPreProcess.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6514f04e5eb4d4_86020698 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}
