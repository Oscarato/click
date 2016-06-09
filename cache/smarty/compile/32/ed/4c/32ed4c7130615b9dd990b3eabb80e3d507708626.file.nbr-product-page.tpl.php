<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:32:53
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\theme593\nbr-product-page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225115758ff85944939-51188983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ed4c7130615b9dd990b3eabb80e3d507708626' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\nbr-product-page.tpl',
      1 => 1366035384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225115758ff85944939-51188983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'category' => 0,
    'link' => 0,
    'manufacturer' => 0,
    'supplier' => 0,
    'nb_products' => 0,
    'products_per_page' => 0,
    'requestNb' => 0,
    'search_query' => 0,
    'tag' => 0,
    'requestKey' => 0,
    'requestValue' => 0,
    'nArray' => 0,
    'lastnValue' => 0,
    'nValue' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff85e84109_86507850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff85e84109_86507850')) {function content_5758ff85e84109_86507850($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['p']->value)&&$_smarty_tpl->tpl_vars['p']->value) {?>
	<?php if (isset($_GET['id_category'])&&$_GET['id_category']&&isset($_smarty_tpl->tpl_vars['category']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,false,false,true,false), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,true,false,false,true), null, 0);?>
	<?php } elseif (isset($_GET['id_manufacturer'])&&$_GET['id_manufacturer']&&isset($_smarty_tpl->tpl_vars['manufacturer']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,false,false,true,false), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,true,false,false,true), null, 0);?>
	<?php } elseif (isset($_GET['id_supplier'])&&$_GET['id_supplier']&&isset($_smarty_tpl->tpl_vars['supplier']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,false,false,true,false), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,true,false,false,true), null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,false,false,true,false), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,true,false,false,true), null, 0);?>
	<?php }?>
	<!-- nbr product/page -->
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value>$_smarty_tpl->tpl_vars['products_per_page']->value) {?>
		<form action="<?php if (!is_array($_smarty_tpl->tpl_vars['requestNb']->value)) {?><?php echo $_smarty_tpl->tpl_vars['requestNb']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['requestNb']->value['requestUrl'];?>
<?php }?>" method="get" class="nbrItemPage nbr_page">
	
				<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value) {?><input type="hidden" name="search_query" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /><?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['tag']->value)&&$_smarty_tpl->tpl_vars['tag']->value&&!is_array($_smarty_tpl->tpl_vars['tag']->value)) {?><input type="hidden" name="tag" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /><?php }?>
				<label for="nb_item"><?php echo smartyTranslate(array('s'=>'Show'),$_smarty_tpl);?>
</label>
				<?php if (is_array($_smarty_tpl->tpl_vars['requestNb']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['requestValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['requestValue']->_loop = false;
 $_smarty_tpl->tpl_vars['requestKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['requestNb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['requestValue']->key => $_smarty_tpl->tpl_vars['requestValue']->value) {
$_smarty_tpl->tpl_vars['requestValue']->_loop = true;
 $_smarty_tpl->tpl_vars['requestKey']->value = $_smarty_tpl->tpl_vars['requestValue']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['requestKey']->value!='requestUrl') {?>
							<input type="hidden" name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['requestKey']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['requestValue']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
						<?php }?>
					<?php } ?>
				<?php }?>
                
				<select name="n" id="nb_item" class="nb_item b-core-ui-select__select" onchange="this.form.submit();">
				<?php $_smarty_tpl->tpl_vars["lastnValue"] = new Smarty_variable("0", null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['nValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nValue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nValue']->key => $_smarty_tpl->tpl_vars['nValue']->value) {
$_smarty_tpl->tpl_vars['nValue']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['lastnValue']->value<=$_smarty_tpl->tpl_vars['nb_products']->value) {?>
						<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['nValue']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['n']->value==$_smarty_tpl->tpl_vars['nValue']->value) {?>selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['nValue']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars["lastnValue"] = new Smarty_variable($_smarty_tpl->tpl_vars['nValue']->value, null, 0);?>
				<?php } ?>
				</select>
		

		</form>
	<?php }?>
	<!-- /nbr product/page -->
<?php }?>
<?php }} ?>
