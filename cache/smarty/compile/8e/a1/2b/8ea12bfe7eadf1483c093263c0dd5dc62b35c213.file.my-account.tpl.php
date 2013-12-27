<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 20:51:04
         compiled from "C:\wamp\www\revision-presta\modules\favoriteproducts\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2216452b1fca8c74b67-17395635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea12bfe7eadf1483c093263c0dd5dc62b35c213' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\modules\\favoriteproducts\\views\\templates\\hook\\my-account.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2216452b1fca8c74b67-17395635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
    'mobile_hook' => 0,
    'module_template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b1fca8cd5546_34698122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1fca8cd5546_34698122')) {function content_52b1fca8cd5546_34698122($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\revision-presta\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<li class="favoriteproducts">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account'), 'htmlall', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value){?><img <?php if (isset($_smarty_tpl->tpl_vars['mobile_hook']->value)){?>src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/favorites.png" class="ui-li-icon ui-li-thumb"<?php }else{ ?>src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/favorites.png" class="icon"<?php }?> alt="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
"/><?php }?>
		<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

	</a>
</li>
<?php }} ?>