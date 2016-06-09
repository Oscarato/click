<?php /*%%SmartyHeaderCode:244415758ff2f3efb17-75431965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13e2b5bc39ec7eafc9af519dce1756d931c81de9' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1366047916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244415758ff2f3efb17-75431965',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff2f777878_48674146',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff2f777878_48674146')) {function content_5758ff2f777878_48674146($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<section id="manufacturers_block_left" class="block blockmanufacturer column_box">
	<h4 class="title_block"><span>Fabricantes</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="last_item"><a href="http://localhost/clickbeauty/1_fashion-manufacturer" title="Learn more about Fashion Manufacturer"><i class="icon-ok"></i>Fashion Manufacturer</a></li>
				</ul>
				<form action="/clickbeauty/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Todos los fabricantes</option>
									<option value="http://localhost/clickbeauty/1_fashion-manufacturer">Fashion Manufacturer</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block manufacturers module -->
<?php }} ?>
