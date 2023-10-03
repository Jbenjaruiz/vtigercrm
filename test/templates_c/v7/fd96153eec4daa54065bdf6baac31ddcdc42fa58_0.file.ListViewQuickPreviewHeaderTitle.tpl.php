<?php
/* Smarty version 4.3.2, created on 2023-09-29 04:05:49
  from '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65164d1ded9678_97051828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd96153eec4daa54065bdf6baac31ddcdc42fa58' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65164d1ded9678_97051828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('QUICK_PREVIEW', "true");
$_smarty_tpl->_subTemplateRender(vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0, true);
}
}
