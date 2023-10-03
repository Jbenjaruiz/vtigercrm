<?php
/* Smarty version 4.3.2, created on 2023-09-29 04:02:57
  from '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65164c717facd0_88614010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5b12a699f89d003d52694a78dec4a03b94637ef' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65164c717facd0_88614010 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>


<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);
}
}
