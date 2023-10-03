<?php
/* Smarty version 4.3.2, created on 2023-09-28 14:46:37
  from '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Vtiger/uitypes/FieldSearchView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651591cd6b5e99_33640497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02eccdb2d2f9771837df12238114939430aecc68' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Vtiger/uitypes/FieldSearchView.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651591cd6b5e99_33640497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO', Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));?><div class=""><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" class="listSearchContributor inputElement" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'];?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'/></div><?php }
}
