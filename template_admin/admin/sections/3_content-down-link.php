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
                                                <img src="{$skin_admin_path}/images/visual/section/btn.png">
												<p>下载按钮</p>
                                            </div>
                                            <div class="view">
<div class=" visual-conent-down-link">
											<div class="codearea">
									

												#[#if $archive['attachment_path']#]#
					#[#attachment_js($archive['aid'])#]#
					#[#else#]#
					#[#lang('nodownload')#]#
					#[#/if#]#

                                                </div>
                                                <div class="viewarea">
												<a target="_blank" title="点击下载" id="att" href="#" class="btn btn-default visual-content-down-link-btn">点击下载</a>
                                                </div>
												</div>

                                            </div>
                                        </div>
										<!-- 模块样例一结束 -->