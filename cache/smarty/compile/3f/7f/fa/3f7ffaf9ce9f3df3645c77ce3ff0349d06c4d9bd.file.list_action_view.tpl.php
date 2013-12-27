<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 14:58:19
         compiled from "C:\wamp\www\revision-presta\admin8815\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1328052b0587bce0477-69656999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f7ffaf9ce9f3df3645c77ce3ff0349d06c4d9bd' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\admin8815\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328052b0587bce0477-69656999',
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
  'unifunc' => 'content_52b0587bd19d88_70474228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0587bd19d88_70474228')) {function content_52b0587bd19d88_70474228($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>