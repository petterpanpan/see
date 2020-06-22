<!-- 组件 -->
<div class="visual-drag-box box-element">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
	<span class="drag label label-default btn-tag-config" data-target="#template-announ-tag" role="button" data-toggle="modal" title="设置">
	<i class="glyphicon glyphicon-pencil"></i></span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/hot_search.png">
		<p>
			热门关键词
		</p>
	</div>
	<div class="view">
		<div class=" visual-conent-title">
			<div class="codearea">
				<p class="content-title">

					#[#lang('hotkeys')#]#： #[#gethotsearch(10)#]#
				</p>
				<div class="clearfix">
				</div>
			</div>
			<div class="viewarea">
				热门关键词：关键词一、关键词二
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->