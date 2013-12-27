<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 12:29:33
         compiled from "C:\wamp\www\revision-presta\admin\themes\default\template\helpers\list\list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93752b043ad575117-39479055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '452ea8189f1f8c93bd0c03c03dfe7577e9cf943c' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\admin\\themes\\default\\template\\helpers\\list\\list_action_removestock.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93752b043ad575117-39479055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b043ad587b53_01413508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b043ad587b53_01413508')) {function content_52b043ad587b53_01413508($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>