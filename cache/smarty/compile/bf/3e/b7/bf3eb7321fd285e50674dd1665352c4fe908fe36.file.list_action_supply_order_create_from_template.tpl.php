<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 06:20:36
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\admin\themes\default\template\helpers\list\list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171835758ee94e70993-72923895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf3eb7321fd285e50674dd1665352c4fe908fe36' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\admin\\themes\\default\\template\\helpers\\list\\list_action_supply_order_create_from_template.tpl',
      1 => 1460131476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171835758ee94e70993-72923895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ee94f413c7_16850264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ee94f413c7_16850264')) {function content_5758ee94f413c7_16850264($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
