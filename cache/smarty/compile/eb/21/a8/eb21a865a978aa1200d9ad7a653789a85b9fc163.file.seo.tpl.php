<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 14:01:05
         compiled from "C:\wamp\www\revision-presta\admin8815\themes\default\template\controllers\products\seo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2851552b04b11195b53-62991182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb21a865a978aa1200d9ad7a653789a85b9fc163' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\admin8815\\themes\\default\\template\\controllers\\products\\seo.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2851552b04b11195b53-62991182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'product' => 0,
    'curent_shop_url' => 0,
    'default_language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b04b1127b0a6_30376707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b04b1127b0a6_30376707')) {function content_52b04b1127b0a6_30376707($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\revision-presta\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<input type="hidden" name="submitted_tabs[]" value="Seo" />
<h4><?php echo smartyTranslate(array('s'=>'SEO'),$_smarty_tpl);?>
</h4>

<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('product_tab'=>"Seo"), 0);?>


<div class="separation"></div>

<table>
	<tr>
		<td class="col-left">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"meta_title",'type'=>"default",'multilang'=>"true"), 0);?>

			<label><?php echo smartyTranslate(array('s'=>'Meta title:'),$_smarty_tpl);?>
</label>
		</td>
		<td>
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>'meta_title','input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_title), 0);?>

			<p class="preference_description"><?php echo smartyTranslate(array('s'=>'Product page title: Leave blank to use the product name'),$_smarty_tpl);?>
</p>
		</td>
	</tr>
	<tr>
		<td class="col-left">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"meta_description",'type'=>"default",'multilang'=>"true"), 0);?>

			<label><?php echo smartyTranslate(array('s'=>'Meta description:'),$_smarty_tpl);?>
</label>
		</td>
		<td>
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>'meta_description','input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_description,'input_hint'=>'{l s=\'Forbidden characters:\'\} <>;=#{\}'), 0);?>

			<p class="preference_description"><?php echo smartyTranslate(array('s'=>'A single sentence for the HTML header is needed. '),$_smarty_tpl);?>
</p>
		</td>
	</tr>
	<tr>
		<td class="col-left">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"meta_keywords",'type'=>"default",'multilang'=>"true"), 0);?>

			<label><?php echo smartyTranslate(array('s'=>'Meta keywords:'),$_smarty_tpl);?>
</label>
		</td>
		<td>
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->meta_keywords,'input_name'=>'meta_keywords'), 0);?>

			<p class="preference_description"><?php echo smartyTranslate(array('s'=>'Keywords for HTML header, separated by commas.'),$_smarty_tpl);?>
</p>
		</td>
	</tr>
	<tr>
		<td class="col-left">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"link_rewrite",'type'=>"default",'multilang'=>"true"), 0);?>

			<label><?php echo smartyTranslate(array('s'=>'Friendly URL:'),$_smarty_tpl);?>
</label>
		</td>
		<td>
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['product']->value->link_rewrite,'input_name'=>'link_rewrite'), 0);?>

			
			<p class="clear" style="padding:10px 0 0 0">
			<a style="cursor:pointer" class="button"
			onmousedown="updateFriendlyURLByName();"><?php echo smartyTranslate(array('s'=>'Generate'),$_smarty_tpl);?>
</a>&nbsp;
			<?php echo smartyTranslate(array('s'=>'friendly URL from the product name.'),$_smarty_tpl);?>
<br /><br />
			<?php echo smartyTranslate(array('s'=>'The product link will look like this:'),$_smarty_tpl);?>

			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['curent_shop_url']->value, 'htmlall', 'UTF-8');?>
lang/<?php if (isset($_smarty_tpl->tpl_vars['product']->value->id)){?><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
<?php }else{ ?><b>id_product</b><?php }?>-<span id="friendly-url"><?php echo $_smarty_tpl->tpl_vars['product']->value->link_rewrite[$_smarty_tpl->tpl_vars['default_language']->value];?>
</span>.html</p>
		</td>
	</tr>
</table>
<?php }} ?>