<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 12:29:33
         compiled from "C:\wamp\www\revision-presta\admin\themes\default\template\helpers\list\list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2287052b043ad30a1f3-60237529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6e5c56d4e8bbc3844c15ed34cd284ea0b20ddff' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\admin\\themes\\default\\template\\helpers\\list\\list_action_addstock.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2287052b043ad30a1f3-60237529',
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
  'unifunc' => 'content_52b043ad31c744_59198662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b043ad31c744_59198662')) {function content_52b043ad31c744_59198662($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/add_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>