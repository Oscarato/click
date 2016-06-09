<?php /*%%SmartyHeaderCode:143765758ff257eaee2-52444339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df0b040e64b9b35fb74e5c12db2b0615c8ae16b5' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1366048452,
      2 => 'file',
    ),
    'fd354261ee7deccaa329557f6de25e3c65a21a8b' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\clickbeauty\\themes\\theme593\\\\modules\\blocksearch\\blocksearch-instantsearch.tpl',
      1 => 1364768118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143765758ff257eaee2-52444339',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ff80752464_26462311',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ff80752464_26462311')) {function content_5758ff80752464_26462311($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<section id="search_block_top" class="header-box">
	<form method="get" action="http://localhost/clickbeauty/buscar" id="searchbox">
		<p>
			<label for="search_query_top">Buscar</label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
            <a href="javascript:document.getElementById('searchbox').submit();"></a>
			
	    </p>
	</form>
</section>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://localhost/clickbeauty/buscar', {
						minChars: 3,
						max: 10,
						width: 300,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
							parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
						})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>
