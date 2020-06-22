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
		<img src="{$skin_admin_path}/images/visual/section/picture.png">
		<p>
			缩略图
		</p>
	</div>
	<div class="view">
		<div class=" visual-conent-thumb">
			<div class="codearea">
				
					<img src="#[#$archive['thumb']#]#" class="img-responsive" alt="#[#$archive['stitle']#]#" />
				

			</div>
			<div class="viewarea">
												<img src="{$base_url}/images/admin/visual/temp/section/section-pic-1.jpg" class="img-responsive" alt="内容标题" />
	
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->