<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 06:20:36
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\admin\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131215758ee9411b120-67268008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33faa15e549db1dcd53700ee7dfa5ce91e762d19' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\admin\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1460131476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131215758ee9411b120-67268008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ee94267a95_44030771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ee94267a95_44030771')) {function content_5758ee94267a95_44030771($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
