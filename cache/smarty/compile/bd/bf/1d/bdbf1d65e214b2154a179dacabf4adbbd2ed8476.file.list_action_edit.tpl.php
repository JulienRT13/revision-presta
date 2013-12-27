<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 20:32:13
         compiled from "C:\wamp\www\revision-presta\admin1234\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2052052b1f83de13ee2-59367347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdbf1d65e214b2154a179dacabf4adbbd2ed8476' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\admin1234\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2052052b1f83de13ee2-59367347',
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
  'unifunc' => 'content_52b1f83de26727_61057364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1f83de26727_61057364')) {function content_52b1f83de26727_61057364($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>