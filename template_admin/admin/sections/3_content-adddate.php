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
		<img src="{$skin_admin_path}/images/visual/section/adddate.png">
		<p>
			内容时间
		</p>
	</div>
	<div class="view">
		<div class="visual-conent-adddate visual-inline-block">
			<div class="codearea">
					<p><span>#[#lang('adddate')#]#：</span>#[#$archive['adddate']#]#</p>
			</div>
			<div class="viewarea">
				<p><span>添加时间：</span>2018-01-01 00:00:00</p>
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->