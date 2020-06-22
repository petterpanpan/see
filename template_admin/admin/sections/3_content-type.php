<!-- 模块样例一 -->
<div class="visual-drag-box box-element visual-inline-block">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal" title="层属性">
	<i class="glyphicon glyphicon-cog"></i>
	</span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/title.png">
		<p>
			所属分类
		</p>
	</div>
	<div class="view">
		<div class=" visual-conent-special">
			<div class="codearea">
				
					<p>#[#lang('type')#]#： #[#$archive['type']#]#</p>
				
	
			</div>
			<div class="viewarea">
												<p>分类：分类名称</p>
				
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->