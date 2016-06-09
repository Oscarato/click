{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{capture name=path}<a href="{$link->getPageLink('my-account', true)}">{l s='My account'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Order history'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}
{include file="$tpl_dir./errors.tpl"}

<h1><span>{l s='Order history'}</span></h1>
<p>{l s='Here are the orders you\'ve placed since your account was created.'}.</p>

{if $slowValidation}<p class="warning">{l s='If you have just placed an order, it may take a few minutes for it to be validated. Please refresh this page if your order is missing.'}</p>{/if}

<div class="block-center" id="block-history">

	{if $orders && count($orders)}
      <script type="text/javascript">
 $(function() {
      $('#order-list').footable();
	  	  breakpoints: {
  tablet:1000
}
    });
  </script>
	<table id="order-list" class="std shop_table footable">
		<thead>
			<tr>
				<th data-class="expand" class="first_item ">{l s='Order Reference'}</th>
				<th data-hide="phone"  class="item">{l s='Date'}</th>
				<th data-hide="phone,tablet"  class="item">{l s='Total price'}</th>
				<th data-hide="phone,tablet" class="item">{l s='Payment'}</th>
				<th data-hide="phone,tablet" class="item">{l s='Status'}</th>
				<th data-hide="phone" class="item">{l s='Invoice'}</th>
				<th data-hide="phone" class="last_item" >{l s='details'}</th>
			</tr>
		</thead>
		<tbody>
		{foreach from=$orders item=order name=myLoop}
			<tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
				<td class="history_link bold">
					{if isset($order.invoice) && $order.invoice && isset($order.virtual) && $order.virtual}<img src="{$img_dir}icon/download_product.png" class="icon" alt="{l s='Products to download'}" title="{l s='Products to download'}" />{/if}
					<a class="color-myaccount" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->getPageLink('order-detail', true)}');">{Order::getUniqReferenceOf($order.id_order)}</a>
				</td>
				<td class="history_date bold">{dateFormat date=$order.date_add full=0}</td>
				<td class="history_price"><span class="price">{displayPrice price=$order.total_paid currency=$order.id_currency no_utf8=false convert=false}</span></td>
				<td class="history_method">{$order.payment|escape:'htmlall':'UTF-8'}</td>
				<td class="history_state"> <i class="icon-angle-right"></i> {if isset($order.order_state)}{$order.order_state|escape:'htmlall':'UTF-8'}{/if}</td>
				<td class="history_invoice">
				{if (isset($order.invoice) && $order.invoice && isset($order.invoice_number) && $order.invoice_number) && isset($invoiceAllowed) && $invoiceAllowed == true}
					<a href="{$link->getPageLink('pdf-invoice', true, NULL, "id_order={$order.id_order}")}" title="{l s='Invoice'}" target="_blank"><i class="icon-file-alt"></i></a>
					<a href="{$link->getPageLink('pdf-invoice', true, NULL, "id_order={$order.id_order}")}" title="{l s='Invoice'}" target="_blank">{l s='PDF'}</a>
				{else}-{/if}
				</td>
				<td class="history_detail">
					<a class="color-myaccount btn btn-info" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->getPageLink('order-detail', true)}');">{l s='details'}</a>
					{if isset($opc) && $opc}
					
                    <a class="btn btn-info" href="{$link->getPageLink('order-opc', true, NULL, "submitReorder&id_order={$order.id_order}")}" title="{l s='Reorder'}">
					{else}
					<a class="btn btn-info" href="{$link->getPageLink('order', true, NULL, "submitReorder&id_order={$order.id_order}")}" title="{l s='Reorder'}">
					{/if}
					{l s='Reorder'}
					</a>
				</td>
			</tr>
		{/foreach}
		</tbody>
	</table>
	<div id="block-order-detail" class="hidden">&nbsp;</div>
	{else}
		<p class="warning">{l s='You have not placed any orders.'}</p>
	{/if}
</div>

<ul class="footer_links clearfix">
	<li><a href="{$link->getPageLink('my-account', true)}"><i class="icon-user"></i>{l s='Back to Your Account'}</a></li>
	<li class="f_right"><a href="{$base_dir}"><i class="icon-home"></i>{l s='Home'}</a></li>
</ul>
