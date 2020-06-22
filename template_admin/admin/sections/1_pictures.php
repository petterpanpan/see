<!-- 组件 -->
<div class="visual-drag-box box-element">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
	<span class="drag label label-default" data-target="#picturesModel" role="button" data-toggle="modal" title="图册设置">
	<i class="glyphicon glyphicon-picture">
	</i>
	</span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/pictures.png">
		<p>
			自定义图册
		</p>
	</div>
	<div class="view">
<div class=" visual-pictures">
		<div id="myCarousel" class="carousel slide row">
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
					<div class="carousel-caption">
						<h1 contenteditable="true">标题</h1>
						<p contenteditable="true">
							文字
						</p>
						<a href="{get('slide_pic1_url')}" target="_blank" class="btn btn-primary">更多</a>
					</div>
				</div>
				<div class="item">
					<img src="{$base_url}/images/admin/visual/temp/section/section-pic-2.jpg" class="img-responsive">
					<div class="carousel-caption">
						<h1 contenteditable="true">标题</h1>
						<p contenteditable="true">
							文字
						</p>
						<a href="{get('slide_pic1_url')}" target="_blank" class="btn btn-primary">更多</a>
					</div>
				</div>
				<div class="item">
					<img src="{$base_url}/images/admin/visual/temp/section/section-pic-3.jpg" class="img-responsive">
					<div class="carousel-caption">
						<h1 contenteditable="true">标题</h1>
						<p contenteditable="true">
							文字
						</p>
						<a href="{get('slide_pic1_url')}" target="_blank" class="btn btn-primary">更多</a>
					</div>
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
			<div class="clearfix"></div>
			</div>

		</div>
</div>
</div>
<!-- 组件结束 -->