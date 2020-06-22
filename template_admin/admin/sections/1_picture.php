<!-- 组件 -->
<div class="visual-drag-box box-element visual-inline-block">
	<a href="#close" class="remove label label-danger" title="删除">
		<i class="glyphicon-remove glyphicon"></i>
	</a>
	<span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="图片"><i class="glyphicon glyphicon-cog"></i></span>
	<span class="drag label label-default btn-pic-config" data-target="#pictureModel" role="button" data-toggle="modal" title="层属性">
			<i class="glyphicon glyphicon-picture"></i>
	</span>
	<span class="drag label label-default btn-link-config" data-target="#hrefModel" role="button" data-toggle="modal" title="链接">
             <i class="glyphicon glyphicon-link"></i>
    </span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/picture.png">
		<p>
			图片
		</p>
	</div>
	<div class="view">
		<div class="visual-picture auto-img">
			<img alt="140x140" src="./images/nopic.gif" class="img-responsive">
		
	</div>
	</div>
</div>
<!-- 组件结束 -->