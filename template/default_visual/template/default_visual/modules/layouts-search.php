                                    <div class="box box-element">
                                        <a href="#close" class="label label-danger remove">
        <i class="glyphicon-remove glyphicon" title="删除">
        </i>
    </a>
	<span class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal">
        <i class="glyphicon glyphicon-cog" title="Layouts"></i>	Layouts
    </span>
                                     
                                        <div class="preview">
                                            <img src="{$base_url}/images/admin/visual/modules/search-1.jpg" alt="搜索">
											<p>搜索</p>
                                        </div>
                                        <div class="view">


		<div class="height-percentage-100 background-fixed background-cover text-center color-white min-height-500 position-relative" style="background:url({$base_url}/images/admin/visual/modules/temp/hero16.jpg);background-position: initial; opacity: 1;">
			<div class="vertical-center position-relative z-index-9">
				<div class="container pos-vertical-center">
					<div class="row">
						<h2>Start a conversation.</h2>
						<p class="lead">
							Browse and connect with employers from all over the world.
						</p>
						<div class="col-sm-8 col-sm-offset-2 col-xs-12 text-center-xs">
							<div class="inline-search clearfix margin-bottom-30">
								<form name='search' action="<?php echo url('archive/search');?>" onsubmit="search_check();" method="post">
									<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
										<div class="row">
											<input type="text" name="keyword" class="form-control" placeholder="{lang('pleaceinputtext')}">
										</div>
									</div>
									<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
										<div class="row">
											<span class="input-group-btn">
												<button class="btn btn-default btn-violet color-white" name='submit' type="submit">{lang('search')}</button>
											</span>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="background-gray-opacity position-absolute height-500 width-percentage-100 top-0 left-0">
	</div>
	</div>
                                    </div>