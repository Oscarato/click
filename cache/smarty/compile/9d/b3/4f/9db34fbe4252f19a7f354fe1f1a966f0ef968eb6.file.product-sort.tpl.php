<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:32:53
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\theme593\product-sort.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155665758ff855bea95-27928212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9db34fbe4252f19a7f354fe1f1a966f0ef968eb6' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\product-sort.tpl',
      1 => 1366040892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155665758ff855bea95-27928212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderby' => 0,
    'orderway' => 0,
    'request' => 0,
    'category' => 0,
    'link' => 0,
    'manufacturer' => 0,
    'supplier' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff8591e1a6_93178869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff8591e1a6_93178869')) {function content_5758ff8591e1a6_93178869($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['orderby']->value)&&isset($_smarty_tpl->tpl_vars['orderway']->value)) {?>


<?php if (!isset($_smarty_tpl->tpl_vars['request']->value)) {?>
	<!-- Sort products -->
	<?php if (isset($_GET['id_category'])&&$_GET['id_category']) {?>
		<?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,false,true), null, 0);?>
	<?php } elseif (isset($_GET['id_manufacturer'])&&$_GET['id_manufacturer']) {?>
		<?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,false,true), null, 0);?>
	<?php } elseif (isset($_GET['id_supplier'])&&$_GET['id_supplier']) {?>
		<?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,false,true), null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['request'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,false,true), null, 0);?>
	<?php }?>
<?php }?>

<script type="text/javascript">
//<![CDATA[
$(document).ready(function()
{
	$('.selectProductSort').change(function()
	{
		var requestSortProducts = '<?php echo $_smarty_tpl->tpl_vars['request']->value;?>
';
		var splitData = $(this).val().split(':');
		document.location.href = requestSortProducts + ((requestSortProducts.indexOf('?') < 0) ? '?' : '&') + 'orderby=' + splitData[0] + '&orderway=' + splitData[1];
	});
});
//]]>
</script>
<script type="text/javascript">
  $(window).load(function () {

        $('.b-core-ui-select__select').coreUISelect({
			            jScrollPane : {
                verticalDragMinHeight: 20,
                verticalDragMaxHeight: 20,
                showArrows : true
				},
            onInit : addCoreUISelectListener,
            onOpen : addCoreUISelectListener,
            onClose : addCoreUISelectListener,
            onChange : addCoreUISelectListener,
            onDestroy : addCoreUISelectListener
        });

        function addCoreUISelectListener(select, event){
            console.log(select, event);
        }

    });
</script>
          
<ul class="product_view clearfix">
	<li id="product_view_grid" class="current "></li>
	<li id="product_view_list" class=""></li>
</ul>
<form id="productsSortForm" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['request']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="nbrItemPage">
        		<label for="selectProductSort"><?php echo smartyTranslate(array('s'=>'Sort by'),$_smarty_tpl);?>
</label>
		<select id="selectProductSort" class="b-core-ui-select__select selectProductSort" name="selectProductSort"  >

			<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
				<option value="price:asc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='price'&&$_smarty_tpl->tpl_vars['orderway']->value=='asc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Price: lowest first'),$_smarty_tpl);?>
</option>
				<option value="price:desc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='price'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Price: highest first'),$_smarty_tpl);?>
</option>
			<?php }?>
			<option value="name:asc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='name'&&$_smarty_tpl->tpl_vars['orderway']->value=='asc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Product Name: A to Z'),$_smarty_tpl);?>
</option>
			<option value="name:desc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='name'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Product Name: Z to A'),$_smarty_tpl);?>
</option>
			<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
				<option value="quantity:desc" <?php if ($_smarty_tpl->tpl_vars['orderby']->value=='quantity'&&$_smarty_tpl->tpl_vars['orderway']->value=='desc') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'In stock'),$_smarty_tpl);?>
</option>
			<?php }?>
		</select>

</form>
<!-- /Sort products -->
<?php }?><?php }} ?>
