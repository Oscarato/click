<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:31:39
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\theme593\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239205758ff3b1a75a0-86983291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd02b47a9838c171609981263a114ac7200ef8408' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\layout.tpl',
      1 => 1364370222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239205758ff3b1a75a0-86983291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_header' => 0,
    'HOOK_HEADER' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff3b2aada2_83213850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff3b2aada2_83213850')) {function content_5758ff3b2aada2_83213850($_smarty_tpl) {?>

<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['template']->value;?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>

<?php }?><?php }} ?>
