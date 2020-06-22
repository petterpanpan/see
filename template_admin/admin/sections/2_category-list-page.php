<!-- 组件 -->
                                        <div class="visual-drag-box box-element">
                                           <a href="#close" class="remove label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>
  <span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
                                            <div class="preview">
                                                <img src="{$skin_admin_path}/images/visual/section/pages.png">
												<p>分页</p>
                                            </div>
                                            <div class="view">
															<div class=" visual-list-page">
                                                <div class="codearea">
								
                                                    #[#if isset($pages)#]#
                                                    <div class="blank30"></div>
                                                    #[#category_pagination($catid)#]#
                                                    <div class="blank30"></div>
                                                    #[#/if#]#
													<div class="clearfix"></div>
                                                </div>
                                                <div class="viewarea">
               
													
													<nav>
<ul class="pagination">
<li class="active"><a>1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#">6</a></li>
<li><a href="#">7</a></li>
<li><a href="#">8</a></li>
<li><a href="#l" aria-label="Next"><span aria-hidden="true">»</span></a></li>
</ul>
</nav>
<div class="clearfix"></div>
</div>
                                           
                                            </div>
                                        </div>
										</div>
										<!-- 组件结束 -->