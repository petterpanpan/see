<!-- 组件 -->
<div class="visual-drag-box box-element visual-inline-block">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/source.png">
		<p>
			来源
		</p>
	</div>
	<div class="view">
		<div class="visual-conent-source visual-inline-block">
			<div class="codearea">
				<p class="content-source">
					<span>#[#lang('source')#]#：</span>#[#$archive['attr3']#]#
				</p>
		
			</div>
			<div class="viewarea">
				<p class="content-author">
					<span>来源：</span>来源
				</p>
		
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->