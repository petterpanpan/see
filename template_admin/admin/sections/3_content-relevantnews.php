<!-- 模块样例一 -->
<div class="visual-drag-box box-element">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal">
	<i class="glyphicon glyphicon-cog"></i>
	</span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/content_list.png">
		<p>
			相关文章列表
		</p>
	</div>
	<div class="view">
		<div class=" visual-conent-relevant-list">
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
					<div class="news-list list-border list-border-w">
						<div class="list-date">
							<span>#[#=sdate($item['adddate'],'d')#]#</span>
							<p>
								#[#=sdate($item['adddate'],'Y-m')#]#
							</p>
						</div>
						<h4><a title="#[#$item['title']#]#" href="#[#archive::url($item)#]#" target="_blank">#[#cut($item['title'],20)#]#</a></h4>
						<p>
							#[#cut(strip_tags($item['introduce']),140)#]#… <a href="#[#archive::url($item)#]#" target="_blank">[#[#lang('more')#]#]</a>
						</p>
					</div>
	#[#/loop#]#
					<!-- 内容列表结束 -->
				</div>
#[#/if#]#
				<!-- 相关文章结束 -->
				<div class="clearfix">
				</div>
			</div>
			<div class="viewarea">
					<h3><a>Tag</a>&nbsp;&nbsp;<small>相关内容</small></a></h3>
					<span>——</span>
				<hr class="featurette-divider"/>
				<div class="container list-container">
					<div class="news-list list-border list-border-w">
						<div class="list-date">
							<span>01</span>
							<p>
2018-01
							</p>
						</div>
						<h4>
						<a href="#">内容标题一</a>
						</h4>
						<p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
							<a>
                            [了解更多]
							</a>
						</p>
					</div>
					<div class="news-list list-border list-border-w">
						<div class="list-date">
							<span>01</span>
							<p>
2018-01
							</p>
						</div>
						<h4>
						<a href="#">内容标题二</a>
						</h4>
						<p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
							<a>
                            [了解更多]
							</a>
						</p>
					</div>
					<div class="news-list list-border list-border-w">
						<div class="list-date">
							<span>01</span>
							<p>
2018-01
							</p>
						</div>
						<h4>
						<a href="#">内容标题三</a>
						</h4>
						<p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
							<a>
                            [了解更多]
							</a>
						</p>
					</div>
					<div class="news-list list-border list-border-w">
						<div class="list-date">
							<span>01</span>
							<p>
2018-01
							</p>
						</div>
						<h4>
						<a href="#">内容标题四</a>
						</h4>
						<p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
							<a>
                            [了解更多]
							</a>
						</p>
					</div>
					<div class="news-list list-border list-border-w">
						<div class="list-date">
							<span>01</span>
							<p>
2018-01
							</p>
						</div>
						<h4>
						<a href="#">内容标题五</a>
						</h4>
						<p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
							<a>
                            [了解更多]
							</a>
						</p>
					</div>
				</div>

				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->