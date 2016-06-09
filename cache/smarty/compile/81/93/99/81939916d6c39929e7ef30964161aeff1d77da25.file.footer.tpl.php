<?php /* Smarty version Smarty-3.1.19, created on 2016-06-09 00:31:39
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\clickbeauty\themes\theme593\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187985758ff3b9ef4d2-16290382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81939916d6c39929e7ef30964161aeff1d77da25' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\footer.tpl',
      1 => 1366034032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187985758ff3b9ef4d2-16290382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff3ba388c7_37756907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff3ba388c7_37756907')) {function content_5758ff3ba388c7_37756907($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
				</div>

<!-- Right -->
<aside id="right_column"  class="span3 column right_home">   
              <?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</aside>
</div>
	</div>
    	</div>
<div class="footer-bg-mob">
    <footer class="container ">
       <div class="row modules">
           <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

      </div>
    </footer> 
</div>          
	</div>
		</div>
			</div>
  <?php }?>
</body>
</html>
<?php }} ?>
