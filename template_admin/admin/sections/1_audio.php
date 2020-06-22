<!-- 组件 -->
<div class="visual-drag-box box-element visual-inline-block">
    <a href="#close" class="remove label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>
<span class="drag label label-default btn-sections-config" data-target="#div-config" role="button"
          data-toggle="modal" title="层属性">
        <i class="glyphicon glyphicon-cog" title="Layouts"></i>
    </span>
    <span class="drag label label-default" data-target="#audioModel" role="button"
                                                     data-toggle="modal" title="音频">
                                                        <i class="glyphicon glyphicon-music">
        </i>
                                                    </span>

    <div class="preview">
        <img src="{$skin_admin_path}/images/visual/section/audio.png">
        <p>音频</p>
    </div>
    <div class="view">
	<div class="visual-audio">
        <audio width="100%" height="100%" controls="true" preload="auto" src=""></audio>
		<div class="clearfix"></div>
		</div>
    </div>
</div>
<!-- 组件结束 -->