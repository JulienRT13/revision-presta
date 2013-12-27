<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 13:35:55
         compiled from "C:\wamp\www\revision-presta\modules\blocksharefb\blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2389552b0452b8a9313-57134042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbcd17a256c360de927583cdb7547e33dd3be7b3' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\modules\\blocksharefb\\blocksharefb.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2389552b0452b8a9313-57134042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b0452b8daff6_14708034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0452b8daff6_14708034')) {function content_52b0452b8daff6_14708034($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>