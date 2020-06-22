<!-- 组件 -->
                                        <div class="visual-drag-box box-element">
                                           <a href="#close" class="remove label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>
  <span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
                                            <div class="preview">
                                                <img src="{$skin_admin_path}/images/visual/section/pages.png">
												<p>上下页</p>
                                            </div>
                                            <div class="view">
											<div class=" visual-conent-page">
                                                <div class="codearea">
                                        


<div id="page">
	#[#if $archive['p']['aid']#]#
	<strong>#[#lang('archivep')#]#</strong><a href="{$archive['p']['url']#]#">#[#$archive['p']['title']#]#</a>
	#[#else}
	<strong>#[#lang('archivep')#]#</strong>{lang('nopage')#]#
	#[#/if}
	<div class="blank10"></div>
	#[#if $archive['n']['aid']#]#
	 <strong>{lang('archiven')#]#</strong><a href="{$archive['n']['url']#]#">#[#$archive['n']['title']#]#</a>
	#[#else}
	<strong>#[#lang('archiven')#]#</strong>#[#lang('nopage')#]#
	#[#/if#]#
		<div class="clearfix"></div>
		</div>
		

                                                </div>
                                                <div class="viewarea">
                                                    <div id="page">
<strong>上一篇</strong><a>上一篇内容标题</a>
<div class="blank10"></div>
<strong>下一篇</strong><a>下一篇内容标题</a>
<div class="clearfix"></div>
</div>
                                                </div>
                                            </div>
                                        </div>
										</div>
										<!-- 组件结束 -->