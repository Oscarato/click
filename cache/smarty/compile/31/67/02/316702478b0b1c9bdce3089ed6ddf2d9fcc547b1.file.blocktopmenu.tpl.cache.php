<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:31:19
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\theme593\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153995758ff27965cd6-15733936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '316702478b0b1c9bdce3089ed6ddf2d9fcc547b1' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1366048828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153995758ff27965cd6-15733936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff27a3aed8_23440121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff27a3aed8_23440121')) {function content_5758ff27a3aed8_23440121($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
<div id="menu-wrap">  
	<ul id="menu-custom">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li class="search">
					<form id="searchbox" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" method="get">
								<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
						<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" placeholder="Search..." />
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
<?php }?><?php }} ?>
