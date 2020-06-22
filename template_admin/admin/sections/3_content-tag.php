<!-- 模块样例一 -->
<div class="visual-drag-box box-element visual-inline-block">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal">
	<i class="glyphicon glyphicon-cog"></i>
	</span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/contact_tag.png">
		<p>
			所属Tag
		</p>
	</div>
	<div class="view">
		<div class=" visual-conent-tag">
			<div class="codearea">
				<p class="content-tag">
					#[#lang('tag')#]#： #[#$archive['tag']#]#
				</p>
	
			</div>
			<div class="viewarea">
												<p>Tag：标签</p>

			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->