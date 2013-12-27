<?php /* Smarty version Smarty-3.1.14, created on 2013-12-18 20:53:25
         compiled from "C:\wamp\www\revision-presta\themes\julien\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:855852b1fd35d0fc57-95056865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e4233fe5bfb5560cdcc4b9e6cc56fe596cdab8f' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\themes\\julien\\category-count.tpl',
      1 => 1387391257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855852b1fd35d0fc57-95056865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b1fd35d45251_52226194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b1fd35d45251_52226194')) {function content_52b1fd35d45251_52226194($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>