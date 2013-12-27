<?php /* Smarty version Smarty-3.1.14, created on 2013-12-20 14:18:21
         compiled from "C:\wamp\www\revision-presta\modules\cheque\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173652b4439dad61c2-69633991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c00016b575a10160c7aab6af9735f0d2ec3c84dc' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\modules\\cheque\\views\\templates\\hook\\payment.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173652b4439dad61c2-69633991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'this_path_cheque' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b4439db53729_02651373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b4439db53729_02651373')) {function content_52b4439db53729_02651373($_smarty_tpl) {?>

<p class="payment_module">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['this_path_cheque']->value;?>
cheque.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
" width="86" height="49" />
		<?php echo smartyTranslate(array('s'=>'Pay by check (order processing will take more time).','mod'=>'cheque'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>