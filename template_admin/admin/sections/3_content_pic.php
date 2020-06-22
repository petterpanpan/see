<!-- 组件 -->
<div class="visual-drag-box box-element">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>

	</i>
	</span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/pictures.png">
		<p>
			内容页多图
		</p>
	</div>
	<div class="view">
<div class=" visual-conent-pic">
	<div class="codearea">


<div id="carousel-example-generic" class="carousel slide section clearfix" data-ride="carousel">

			<div class="carousel-inner demo-gallerylist-unstyled" id="lightgallery" role="listbox">
				#[#loop $archive['pics'] $i $pic#]#
				<div class="item img-auto#[#if $i==1#]# active#[#/if#]#" data-src="#[#$pic['url']#]#" data-sub-html="#[#$pic['alt']#]#">
					<a href="#" rel="lightbox['roadtrip']"><img src="#[#$pic['url']#]#" alt="#[#$pic['alt']#]#" class="img-responsive" /></a>
				</div>
				#[#/loop#]#
			</div>

			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

<div class="clearfix"></div>



                                                </div>
                                                <div class="viewarea">
		<div id="myCarousel" class="carousel slide">
			<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="{$base_url}/images/admin/visual/temp/section/section-pic-1.jpg" class="img-responsive">
				</div>
				<div class="item">
					<img src="{$base_url}/images/admin/visual/temp/section/section-pic-2.jpg" class="img-responsive">
				</div>
				<div class="item">
					<img src="{$base_url}/images/admin/visual/temp/section/section-pic-3.jpg" class="img-responsive">		
				</div>
			</div>
			<!-- 轮播（Carousel）导航 -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="clearfix"></div>
		</div>
		</div>
	</div>
</div>
<!-- 组件结束 -->