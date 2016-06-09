<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:31:37
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\theme593\modules\blockcontactinfos\blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320345758ff39d95db3-79374668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '368db26efb12d5467820774b8db11a71d95b729f' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\modules\\blockcontactinfos\\blockcontactinfos.tpl',
      1 => 1366047528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320345758ff39d95db3-79374668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff3a0adeb7_66849365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff3a0adeb7_66849365')) {function content_5758ff3a0adeb7_66849365($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\tools\\smarty\\plugins\\function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<section class="block blockcontactinfos span4">
	<h4><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
	<ul class="toggle_content">
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!='') {?><li><strong><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</strong></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?><li><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?><li><?php echo smartyTranslate(array('s'=>'Tel:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?><li><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <?php echo smarty_function_mailto(array('address'=>mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),'encode'=>"hex"),$_smarty_tpl);?>
</li><?php }?>
	</ul>
</section>
<?php }} ?>
