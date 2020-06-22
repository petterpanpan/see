<!-- 组件 -->
                                        <div class="visual-drag-box box-element">
                                            <a href="#close" class="remove label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>
    <span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
                                            <div class="preview">
                                                <img src="{$skin_admin_path}/images/visual/section/category_list.png">
												<p>左侧栏目树</p>
                                            </div>
                                            <div class="view">
<div class=" visual-menu-list">
                                               <div class="codearea">
												



        <div id="metismenu">
            <ul class="metismenu" id="list-category">
                #[#loop categories_nav() $t#]#
                <li  class="#[#if isset($topid) and $topid==$t[catid]#]#mm-active#[#/if#]#">
                    <a title=" #[#$t['catname']#]#" href=" #[#$t['url']#]#" aria-expanded="false"> #[#$t['catname']#]# #[#if count(categories($t['catid']))#]# <span class="glyphicon arrow"></span> #[#/if#]#</a>
					 #[#if count(categories($t['catid']))#]#
                    <ul aria-expanded="false">
						 #[#loop categories_nav($t['catid']) $t1#]#
                        <li><a title=" #[#$t1['catname']#]#" href=" #[#$t1['url']#]#"> #[#$t1['catname']#]#</a> #[#if count(categories($t1['catid']))#]# <span class="fa plus-times"></span> #[#/if#]#</a>
							 #[#if count(categories($t1['catid']))#]#
                            <ul aria-expanded="false">
								 #[#loop categories_nav($t1['catid']) $t2#]#
                                <li><a title=" #[#$t2['catname']#]#" href=" #[#$t2['url']#]#"> #[#$t2['catname']#]#</a></li>
                                 #[#/loop#]#
                            </ul>
							 #[#/if#]#
                        </li>
                         #[#/loop#]#
                    </ul>
					 #[#/if#]#
                </li>
				 #[#/loop#]#
            </ul>
        </div>
   <div class="clearfix"> </div>










                                                </div>
                                                <div class="viewarea">






    <div id="metismenu">
            <ul class="metismenu" id="list-category">
                
                <li class="active">
                    <a>一级栏目 <span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul aria-expanded="false">
                        <li><a>二级栏目</a></li>
                        <li><a>二级栏目</a></li>
                    </ul>
                </li>
                <li>
					<a>一级栏目 <span class="glyphicon arrow"></span></a>
				</li>
				<li>
					<a>一级栏目 <span class="glyphicon arrow"></span></a>
				</li>
            </ul>
        </div>



<div class="clearfix"></div>


                                                </div>

                                            </div>
                                        </div>
										</div>
										<!-- 组件结束 -->

