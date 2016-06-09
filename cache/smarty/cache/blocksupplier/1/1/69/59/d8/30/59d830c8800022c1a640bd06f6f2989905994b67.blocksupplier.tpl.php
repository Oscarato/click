<?php /*%%SmartyHeaderCode:242665758ff3237bd42-82951841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d830c8800022c1a640bd06f6f2989905994b67' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1366048726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242665758ff3237bd42-82951841',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'link' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff326b2116_93701946',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff326b2116_93701946')) {function content_5758ff326b2116_93701946($_smarty_tpl) {?>
<!-- Block suppliers module -->
<section id="suppliers_block_left" class="block blocksupplier column_box">
	<h4 class="title_block"><span>Proveedores</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="last_item">
			<a href="http://localhost/clickbeauty/1__fashion-supplier" title="Más sobre Fashion Supplier"><i class="icon-ok"></i>Fashion Supplier</a>
		</li>
				</ul>
				<form action="/clickbeauty/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Todos los proveedores</option>
									<option value="http://localhost/clickbeauty/1__fashion-supplier">Fashion Supplier</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block suppliers module -->
<?php }} ?>
