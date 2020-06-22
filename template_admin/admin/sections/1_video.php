<!-- 组件 -->
<div class="visual-drag-box box-element visual-inline-block">
	<a href="#close" class="remove label label-danger" title="删除">
		<i class="glyphicon-remove glyphicon"></i>
	</a>
	<span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
	<span class="drag label label-default btn-tag-config" data-target="#videoModel" role="button"
          data-toggle="modal" title="视频"><i class="glyphicon glyphicon-pencil"></i></span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/video.png">
		<p>
			视频
		</p>
	</div>
	<div class="view">
	<div class=" visual-video">
		<iframe src="./ckplayer.php?url=" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- 组件结束 -->