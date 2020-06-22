<!-- 组件 -->
<div class="visual-drag-box box-element">

  <a href="#close" class="remove label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>
    <span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog" title="属性"></i></span>


<span class="drag label label-default btn-tag-config" data-target="#template-list-tag" role="button" data-toggle="modal" title="设置">
            <i class="glyphicon glyphicon-pencil"></i></span>

    <div class="preview">
        <img src="{$skin_admin_path}/images/visual/section/content_list.png">
        <p>列表</p>
    </div>
    <div class="view">
        <div class=" visual-category-list">

            <div class="codearea">
                #[#loop $archives $i $archive#]#
                <div class="news-list list-border">
                    <div class="list-date">
                        <span>#[#=sdate($archive['adddate'],'d')#]#</span>
                        <p>#[#=sdate($archive['adddate'],'Y-m')#]#</p>
                    </div>
                    <h4><a title="#[#$archive['stitle']#]#" href="#[#$archive['url']#]#" target="_blank"
                           class="list_page_t">#[#$archive['title']#]#</a></h4>
                    <p>#[#cut(strip_tags($archive['introduce']),66)#]#… <a href="#[#$archive['url']#]#" target="_blank" target="_blank">[#[#lang('more')#]#]</a>
                    </p>
                   
                </div>
                #[#/loop#]#
                <div class="clearfix"></div>
            </div>
            <div class="viewarea">
                <div class="news-list list-border">
                    <div class="list-date">
        <span>
            01
        </span>
                        <p>
                            2018-01
                        </p>
                    </div>
                    <h4>
                        <a class="list_page_t">
                            内容标题一
                        </a>
                    </h4>
                    <p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
                        <a>
                            [了解更多]
                        </a>
                    </p>
                </div>
                <div class="news-list list-border">
                    <div class="list-date">
        <span>
            01
        </span>
                        <p>
                            2018-01
                        </p>
                    </div>
                    <h4>
                        <a class="list_page_t">
                            内容标题二
                        </a>
                    </h4>
                    <p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
                        <a>
                            [了解更多]
                        </a>
                    </p>
                </div>
                <div class="news-list list-border">
                    <div class="list-date">
        <span>
            01
        </span>
                        <p>
                            2018-01
                        </p>
                    </div>
                    <h4>
                        <a class="list_page_t">
                            内容标题三
                        </a>
                    </h4>
                    <p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
                        <a>
                            [了解更多]
                        </a>
                    </p>
                </div>
                <div class="news-list list-border">
                    <div class="list-date">
        <span>
            01
        </span>
                        <p>
                            2018-01
                        </p>
                    </div>
                    <h4>
                        <a class="list_page_t">
                            内容标题四
                        </a>
                    </h4>
                    <p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
                        <a>
                            [了解更多]
                        </a>
                    </p>
                </div>
                <div class="news-list list-border">
                    <div class="list-date">
        <span>
            01
        </span>
                        <p>
                            2018-01
                        </p>
                    </div>
                    <h4>
                        <a class="list_page_t">
                            内容标题五
                        </a>
                    </h4>
                    <p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
                        <a>
                            [了解更多]
                        </a>
                    </p>
                </div>
                <div class="news-list list-border">
                    <div class="list-date">
        <span>
            01
        </span>
                        <p>
                            2018-01
                        </p>
                    </div>
                    <h4>
                        <a class="list_page_t">
                            内容标题六
                        </a>
                    </h4>
                    <p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
                        <a>
                            [了解更多]
                        </a>
                    </p>
                </div>
                <div class="news-list list-border">
                    <div class="list-date">
        <span>
            01
        </span>
                        <p>
                            2018-01
                        </p>
                    </div>
                    <h4>
                        <a class="list_page_t">
                            内容标题七
                        </a>
                    </h4>
                    <p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
                        <a>
                            [了解更多]
                        </a>
                    </p>
                </div>
                <div class="news-list list-border">
                    <div class="list-date">
        <span>
            01
        </span>
                        <p>
                            2018-01
                        </p>
                    </div>
                    <h4>
                        <a class="list_page_t">
                            内容标题八
                        </a>
                    </h4>
                    <p>
                        内容简介又称内容大要、内容提要、内容摘要等。扼要介绍图书内容和读者对象的说明。又称内容说明、内容简介、内容介绍，是向读者介绍本书内容、特点和读者对象，便于读者了解选购…
                        <a>
                            [了解更多]
                        </a>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- 组件结束 -->