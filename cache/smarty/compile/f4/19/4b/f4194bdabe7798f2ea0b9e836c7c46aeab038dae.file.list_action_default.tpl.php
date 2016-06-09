<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 06:07:02
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\prestashop\admin\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308395758eb66b50f35-41871095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4194bdabe7798f2ea0b9e836c7c46aeab038dae' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\prestashop\\admin\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1460131476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308395758eb66b50f35-41871095',
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
  'unifunc' => 'content_5758eb66c263c8_10017254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758eb66c263c8_10017254')) {function content_5758eb66c263c8_10017254($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
