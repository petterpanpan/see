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
		<img src="{$skin_admin_path}/images/visual/section/pictures.png">
		<p>
			相关图片列表
		</p>
	</div>
	<div class="view">
		<div class=" visual-conent-relevant-pic">
			<div class="codearea">
				<!-- 相关文章开始 -->
#[#if is_array($likenews)#]#

				<!-- 页面标题开始 -->

					<h3><a>#[#$archive['tag']#]#<small>#[#lang('relatedcontent')#]#</small></a></h3>
	
					<span>——</span>
		
				<!-- 页面标题结束 -->
				<hr class="featurette-divider">
				<div class="container list-container">
					<!-- 内容列表开始 -->
	#[#loop $likenews $item#]#
	#[#if $item['thumb']#]#
					<div class="post-masonry col-xs-12 col-sm-6 col-md-4">
						<a title="#[#$item['stitle']#]#" href="#[#archive::url($item)#]#" target="_blank" class="img-auto">
						<img src="#[#$item['thumb']#]#" class="img-responsive">
						</a>
						<h4><a title="#[#$item['stitle']#]#" href="#[#archive::url($item)#]#" target="_blank">#[#cut($item['title'],20)#]#</a></h4>
					</div>
					#[#else#]#
#[#/if#]#
	#[#/loop#]#
					<!-- 内容列表结束 -->
				</div>
#[#/if#]#
				<!-- 相关文章结束 -->
				<div class="clearfix">
				</div>
			</div>
			<div class="viewarea">
	
					<h3>
					<a>Tag</a>&nbsp;&nbsp;<small>相关内容</small></a>
					</h3>
					<span>——</span>

				<hr class="featurette-divider"/>
				<div class="container list-container">

					<div class="news-list list-border list-border-w">
						<div class="post-masonry col-xs-12 col-sm-6 col-md-4">
							<a class="img-auto">
							<img src="{$base_url}/images/admin/visual/temp/section/section-pic-1.jpg" class="img-responsive"/>
							<h4>内容标题一</h4>
							</a>
						</div>
						<div class="post-masonry col-xs-12 col-sm-6 col-md-4">
							<a class="img-auto">
							<img src="{$base_url}/images/admin/visual/temp/section/section-pic-2.jpg" class="img-responsive"/>
							<h4>内容标题二</h4>
							</a>
						</div>
						<div class="post-masonry col-xs-12 col-sm-6 col-md-4">
							<a class="img-auto">
							<img src="{$base_url}/images/admin/visual/temp/section/section-pic-3.jpg" class="img-responsive"/>
							<h4>内容标题三</h4>
							</a>
						</div>
					</div>
					<div class="clearfix">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->