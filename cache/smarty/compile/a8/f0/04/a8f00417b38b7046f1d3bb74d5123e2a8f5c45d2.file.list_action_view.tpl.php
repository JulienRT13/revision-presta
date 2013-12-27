<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 20:50:01
         compiled from "C:\wamp\www\revision-presta\admin1234\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1056152b1fc69909706-24312835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f00417b38b7046f1d3bb74d5123e2a8f5c45d2' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\admin1234\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056152b1fc69909706-24312835',
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
  'unifunc' => 'content_52b1fc6991b159_81520824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1fc6991b159_81520824')) {function content_52b1fc6991b159_81520824($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>