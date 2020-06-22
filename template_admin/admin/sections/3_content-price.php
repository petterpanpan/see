<!-- 组件 -->
<div class="visual-drag-box box-element">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/price.png">
		<p>
			价格
		</p>
	</div>
	<div class="view">
		<div class=" visual-conent-car-btn">
			<div class="codearea">
		#[#if $archive['attr2']#]#
				<p class="content-rating">
					<span>#[#lang('price')#]#：</span>#[#lang('unit')#]#<strong>#[#$archive['attr2']#]#</strong>
				</p>
				#[#else#]#
				<p class="content-rating">
					#[#lang('not')#]#
				</p>
				#[#/if#]#
			</div>
			<div class="viewarea">
				<p class="content-author">
					<span>价格：</span>&yen;<strong>888</strong>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->