<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:32:53
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\theme593\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158175758ff85508be7-90474776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd28239db1af130a390daf5ce45c4db85a2077f25' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\category-count.tpl',
      1 => 1364370222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158175758ff85508be7-90474776',
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
  'unifunc' => 'content_5758ff8559e058_14712518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff8559e058_14712518')) {function content_5758ff8559e058_14712518($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0) {?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1) {?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>
