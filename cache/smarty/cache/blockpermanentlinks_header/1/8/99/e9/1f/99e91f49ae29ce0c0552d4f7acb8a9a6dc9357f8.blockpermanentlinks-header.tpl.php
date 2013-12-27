<?php /*%%SmartyHeaderCode:49552b045112920e9-29753698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99e91f49ae29ce0c0552d4f7acb8a9a6dc9357f8' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49552b045112920e9-29753698',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b2134803d928_35886576',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b2134803d928_35886576')) {function content_52b2134803d928_35886576($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost/revision-presta/index.php?controller=contact" title="contact">contact</a></li>
	<li id="header_link_sitemap"><a href="http://localhost/revision-presta/index.php?controller=sitemap" title="plan du site">plan du site</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost/revision-presta/index.php?id_category=6&amp;controller=category', 'Mini - revision-presta', 'favoris');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>