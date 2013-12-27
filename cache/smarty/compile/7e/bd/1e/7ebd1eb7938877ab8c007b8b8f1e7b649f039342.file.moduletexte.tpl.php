<?php /* Smarty version Smarty-3.1.14, created on 2013-12-21 00:59:53
         compiled from "C:\wamp\www\revision-presta\modules\moduletexte\moduletexte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2941952b4cef6a34363-62334534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ebd1eb7938877ab8c007b8b8f1e7b649f039342' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\modules\\moduletexte\\moduletexte.tpl',
      1 => 1387583977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2941952b4cef6a34363-62334534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b4cef6a6ced4_87742221',
  'variables' => 
  array (
    'texte' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b4cef6a6ced4_87742221')) {function content_52b4cef6a6ced4_87742221($_smarty_tpl) {?><!-- Block moduletexte -->
<div id="moduletexte">
    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['texte']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
        <p><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</p>
    <?php } ?>
</div>
<!-- /Block moduletexte --><?php }} ?>