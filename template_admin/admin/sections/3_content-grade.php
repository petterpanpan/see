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
		<img src="{$skin_admin_path}/images/visual/section/grade.png">
		<p>
			评级
		</p>
	</div>
	<div class="view">
		<div class="visual-conent-strgrade">
			<div class="codearea">
				<p class="content-rating">
					<span>#[#lang('rating')#]#：</span>#[#$archive['strgrade']#]#
				</p>

			</div>
			<div class="viewarea">
				<p class="content-rating">
					<span>推荐：</span>
					<img src="./images/admin/star1.gif" border="0" data-bd-imgshare-binded="1">
					<img src="./images/admin/star1.gif" border="0" data-bd-imgshare-binded="1">
					<img src="./images/admin/star2.gif" border="0" data-bd-imgshare-binded="1">
					<img src="./images/admin/star2.gif" border="0" data-bd-imgshare-binded="1">
					<img src="./images/admin/star2.gif" border="0" data-bd-imgshare-binded="1">
				</p>
	
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->