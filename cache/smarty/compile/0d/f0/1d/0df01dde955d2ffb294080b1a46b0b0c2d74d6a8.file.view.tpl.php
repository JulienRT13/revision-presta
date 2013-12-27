<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 15:01:58
         compiled from "C:\wamp\www\revision-presta\admin8815\themes\default\template\controllers\marketing\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2727852b05956ce2982-77435921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0df01dde955d2ffb294080b1a46b0b0c2d74d6a8' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\admin8815\\themes\\default\\template\\controllers\\marketing\\helpers\\view\\view.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2727852b05956ce2982-77435921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_toolbar' => 0,
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'modules_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b05956d03641_02498101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b05956d03641_02498101')) {function content_52b05956d03641_02498101($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>
<?php }} ?>