<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:32:54
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\theme593\product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280375758ff86996054-14306149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '806b908ce1d8f4d9252bc7d0a953477c9f9301d4' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\product-compare.tpl',
      1 => 1366040752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280375758ff86996054-14306149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff86a197a0_36362943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff86a197a0_36362943')) {function content_5758ff86a197a0_36362943($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
	var max_item = '<div id="myModal" class="modal hide fade notification notification_warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
</div>';

//]]>
</script>

	<form class="form_compare" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison');?>
" onsubmit="true">
		<p>
		<input type="submit" id="bt_compare" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

<?php }} ?>
