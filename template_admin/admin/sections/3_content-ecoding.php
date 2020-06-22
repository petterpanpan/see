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
		<img src="{$skin_admin_path}/images/visual/section/ecoding.png">
		<p>
			防伪码
		</p>
	</div>
	<div class="view">
		<div class="visual-conent-ecoding">
			<div class="codearea">
			#[#if $archive['ecoding']#]#
				<p class="content-ecoding">
					<span>#[#lang('ecoding')#]#：</span>#[#$archive['ecoding']#]#
				</p>
				#[#else#]#
				
				#[#/if#]#
				
			</div>
			<div class="viewarea">
				<p class="content-ecoding">
					<span>防伪码：</span>CMSEASYXAnBU8g8V5Kj3PE491
				</p>
				
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->