<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:31:17
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\modules\homeslider\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16115758ff250c6ac0-26000970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9fa40fa25a379b0943f7c9241563b569e899bae' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\modules\\homeslider\\views\\templates\\hook\\header.tpl',
      1 => 1460131478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16115758ff250c6ac0-26000970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff251a21b1_64950091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff251a21b1_64950091')) {function content_5758ff251a21b1_64950091($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
<script type="text/javascript">
     var homeslider_loop=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['loop']);?>
;
     var homeslider_width=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['width']);?>
;
     var homeslider_speed=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['speed']);?>
;
     var homeslider_pause=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['pause']);?>
;
</script>
<?php }?><?php }} ?>
