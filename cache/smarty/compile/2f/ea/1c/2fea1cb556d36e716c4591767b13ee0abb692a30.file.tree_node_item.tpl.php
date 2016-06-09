<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 06:20:46
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42185758ee9eec2527-53406059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fea1cb556d36e716c4591767b13ee0abb692a30' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1460131476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42185758ee9eec2527-53406059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ee9eee2cd4_66451519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ee9eee2cd4_66451519')) {function content_5758ee9eee2cd4_66451519($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
