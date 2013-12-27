<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 12:29:44
         compiled from "C:\wamp\www\revision-presta\themes\default\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1023452b043b81d67f8-25932850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f163e0960f8fc98db8ff9cf526a12a7d929f1bd2' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\themes\\default\\mobile\\index.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1023452b043b81d67f8-25932850',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b043b81e2973_42076512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b043b81e2973_42076512')) {function content_52b043b81e2973_42076512($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>