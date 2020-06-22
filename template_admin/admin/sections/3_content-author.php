<!-- 组件 -->
<div class="visual-drag-box box-element visual-inline-block">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/register.png">
		<p>
			作者
		</p>
	</div>
	<div class="view">
		<div class="visual-conent-author visual-inline-block">
			<div class="codearea">
				<p class="content-author">
					<span>#[#lang('author')#]#：</span>#[#$archive['author']#]#
				</p>

			</div>
			<div class="viewarea">
				<p class="content-author">
					<span>作者：</span>admin
				</p>
	
			</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->