<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:31:21
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\theme593\modules\blockbestsellers\blockbestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144615758ff295c7b33-71492017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96dc1a6c96b0d9f1c4e49474a8d7d8c06eb4672d' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\modules\\blockbestsellers\\blockbestsellers.tpl',
      1 => 1366046184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144615758ff295c7b33-71492017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
    'product' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff2b062f24_25823865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff2b062f24_25823865')) {function content_5758ff2b062f24_25823865($_smarty_tpl) {?>

<!-- MODULE Block best sellers -->
<section id="blockbestsellers" class="block products_block column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
	<?php if (count($_smarty_tpl->tpl_vars['best_sellers']->value)>0) {?>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_sellers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']<=3) {?>
		<li class="clearfix shop_box">
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']<=3) {?>
			<a class="products_block_img" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
			<div>
			<?php }?>
				<h5><a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8', true),35,'...');?>
</a></h5>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']<=3) {?>
			<p class="product_descr"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['description_short']), ENT_QUOTES, 'UTF-8', true),75,'...');?>
</p>
			</div>
			<?php }?>
		</li>
		<?php }?>
		<?php } ?>
	</ul>
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales');?>
" title="<?php echo smartyTranslate(array('s'=>'All best sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
" class="button_large"><?php echo smartyTranslate(array('s'=>'All best sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a>
	<?php } else { ?>
		<p><?php echo smartyTranslate(array('s'=>'No best sellers at this time','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</section><?php }} ?>
