<!-- 组件 -->
<div class="visual-drag-box box-element">
    <a href="#close" class="remove label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>
    <span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
    <div class="preview">
        <img src="{$skin_admin_path}/images/visual/section/comments.png">
        <p>评论</p>
    </div>
    <div class="view">
<div class=" visual-conent-comment">
        <div class="custtag" rel="template 'comment/comment.html'">
            <?php echo template('comment/comment.html');?>
			<div class="clearfix"></div>
        </div>
    </div>
	</div>
</div>
<!-- 组件结束 -->