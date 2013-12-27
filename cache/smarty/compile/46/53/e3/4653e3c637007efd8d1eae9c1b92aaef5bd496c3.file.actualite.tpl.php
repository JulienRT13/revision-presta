<?php /* Smarty version Smarty-3.1.14, created on 2013-12-21 22:15:01
         compiled from "C:\wamp\www\revision-presta\modules\actualite\actualite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1527452b579cbacf853-82038259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4653e3c637007efd8d1eae9c1b92aaef5bd496c3' => 
    array (
      0 => 'C:\\wamp\\www\\revision-presta\\modules\\actualite\\actualite.tpl',
      1 => 1387660480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1527452b579cbacf853-82038259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b579cbb44a49_58537940',
  'variables' => 
  array (
    'records' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b579cbb44a49_58537940')) {function content_52b579cbb44a49_58537940($_smarty_tpl) {?><!-- Block actualite -->
<script type="text/javascript">
    $(document).ready(function() {
            $("#carousel-actu").owlCarousel({
                    singleItem:true,
                    paginationNumbers: true,
                    autoPlay : true,
            });
    });
</script>
<div id="carousel-actu" class="owl-carousel">
    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->lien;?>
" onclick="window.open(href);return false;"><img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->photo;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value->titre;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['entry']->value->largeur;?>
; height:<?php echo $_smarty_tpl->tpl_vars['entry']->value->hauteur;?>
;" />
            <h3 style="font-size : 13px;"><?php echo $_smarty_tpl->tpl_vars['entry']->value->titre;?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['entry']->value->description;?>
</p>
        </a>
    <?php } ?>
</div>

<!-- /Block actualite --><?php }} ?>