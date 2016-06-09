<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 06:06:29
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\prestashop\themes\default-bootstrap\modules\blockstore\blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146725758eb45e76510-18796437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cfa3e7ebfdff5ebba181ed0a89349cb5bc64e34' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\prestashop\\themes\\default-bootstrap\\modules\\blockstore\\blockstore.tpl',
      1 => 1460131476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146725758eb45e76510-18796437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758eb460e9568_65004614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758eb460e9568_65004614')) {function content_5758eb460e9568_65004614($_smarty_tpl) {?>

<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>

		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
				<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value).((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" />
			</a>
		</p>
		<?php if (!empty($_smarty_tpl->tpl_vars['store_text']->value)) {?>
        <p class="store-description">
        	<?php echo $_smarty_tpl->tpl_vars['store_text']->value;?>

        </p>
        <?php }?>
		<div>
			<a 
			class="btn btn-default button button-small" 
			href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" 
			title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">
				<span><?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
