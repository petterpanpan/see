<!-- 模块样例一 -->
<div class="visual-drag-box box-element">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal" title="层属性">
	<i class="glyphicon glyphicon-cog"></i>
	</span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/print.png">
		<p>
			打印
		</p>
	</div>
	<div class="view">
		<div class=" visual-category-title">
			<div class="codearea">
				<div class="content_tools_box">
					<p class="content_tools">
						<a href="javascript:CallPrint('print');">#[#lang('printcontent')#]#</a> &nbsp; &nbsp; &nbsp; <a href="javascript:doZoom(14)">#[#lang('small')#]#</a>&nbsp; &nbsp;<a href="javascript:doZoom(18)">#[#lang('middle')#]#</a>&nbsp; &nbsp;<a href="javascript:doZoom(20)">#[#lang('big')#]#</a>
					</p>
					<div class="clearfix">
					</div>
				</div>
			</div>
			<div class="viewarea">
				<div class="content_tools_box">
					<p class="content_tools">
						<a href="#">打印本文</a> &nbsp; &nbsp; &nbsp; <a href="#">小</a>&nbsp; &nbsp;<a href="#">中</a>&nbsp; &nbsp;<a href="#">大</a>
					</p>
					<div class="clearfix">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- 模块样例一结束 -->