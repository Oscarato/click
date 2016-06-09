<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 06:19:40
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\default-bootstrap\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154235758ee5c78d6b7-07698369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44aeefa2fa76c8811adace0844db5fdf1311bd94' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\default-bootstrap\\category-count.tpl',
      1 => 1460131476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154235758ee5c78d6b7-07698369',
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
  'unifunc' => 'content_5758ee5c936e34_01920944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ee5c936e34_01920944')) {function content_5758ee5c936e34_01920944($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
