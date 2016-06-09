<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 06:06:15
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\prestashop\themes\default-bootstrap\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106885758eb374b4bd5-78132362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bebd1cf68151d4d6c5b098982a6a13bdaa8d0a0' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\prestashop\\themes\\default-bootstrap\\category-count.tpl',
      1 => 1460131476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106885758eb374b4bd5-78132362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758eb375ff682_88457391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758eb375ff682_88457391')) {function content_5758eb375ff682_88457391($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
