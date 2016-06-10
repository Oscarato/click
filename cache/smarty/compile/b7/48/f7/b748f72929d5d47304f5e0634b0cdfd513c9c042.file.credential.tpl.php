<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 16:36:41
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\modules\payulatam\views\templates\admin\credential.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280265759e1692caff0-14087190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b748f72929d5d47304f5e0634b0cdfd513c9c042' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\modules\\payulatam\\views\\templates\\admin\\credential.tpl',
      1 => 1465508191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280265759e1692caff0-14087190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formCredential' => 0,
    'credentialInputVar' => 0,
    'input' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5759e169421070_97424051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5759e169421070_97424051')) {function content_5759e169421070_97424051($_smarty_tpl) {?>
<h3><?php echo smartyTranslate(array('s'=>'Credentials','mod'=>'payulatam'),$_smarty_tpl);?>
</h3>
<form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['formCredential']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="POST">
	<input type="hidden" name="submitPayU" value="1" />
	<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['credentialInputVar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text') {?>
			<ul>
				<li><label class="label_payu"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['label'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</label></li>
				<li><input class="full input_payu" type="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" placeholder="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['label'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['value'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/></li>
				<li><span class="caption"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</span></li>
			</ul>
		<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type']=='radio') {?>
			<ul>
				<li><h4><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['label'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h4></li>
				<li>
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
						<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

						<input type="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value==$_smarty_tpl->tpl_vars['input']->value['value']) {?>checked='checked'<?php }?> name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
					<?php } ?>
				</li>
				<li><input type="submit" class="md-btn button-form_payu button_payu" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'payulatam'),$_smarty_tpl);?>
" /></li>
			</ul>
		<?php }?>
	<?php } ?>
</form>
<?php }} ?>
