<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:31:36
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\theme593\modules\blocksocial\blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320235758ff383d2420-56178807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '564dc26c6bf518847bd421c7d4495804528157bd' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1366048548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320235758ff383d2420-56178807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff3856efd1_34400310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff3856efd1_34400310')) {function content_5758ff3856efd1_34400310($_smarty_tpl) {?>

<section class="block blocksocial">
	<h4><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</h4>
	<ul class="toggle_content">
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?><li class="facebook"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?><li class="twitter"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!='') {?><li class="rss"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
	</ul>
</section><?php }} ?>
