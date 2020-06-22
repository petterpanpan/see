<!-- 组件 -->
<div class="visual-drag-box box-element visual-inline-block">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/cart_add.png">
		<p>
			加入购物车
		</p>
	</div>
	<div class="view">
		<div class=" visual-conent-car-btn">
			<div class="codearea">
		#[#if $archive['attr2']#]#
				<a target="_blank" href="#[#url('archive/orders/aid/'.$archive['aid'],true)#]#" class="btn btn-primary">#[#lang('buy')#]# <span class="badge">Buy</span></a>
				<a href="#[#url('archive/doorders/aid/'.$archive['aid'],true)#]#" id="dialog_link" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg-shopping" aria-hidden="true">#[#lang('makeorders')#]# <span class="badge">Shopping Cart</span></a>
		#[#/if#]#
			</div>
			<div class="viewarea">
				<a class="btn btn-primary">购买 <span class="badge">Buy</span></a>
				<a id="dialog_link" class="btn btn-primary">购物车 <span class="badge">Shopping Cart</span></a>
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->