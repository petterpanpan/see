<!-- 组件 -->
<div class="visual-drag-box box-element">
    <a href="#close" class="remove label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>
    <span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button"
          data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
    <span class="drag label label-default btn-tag-config" data-target="#template-announ-tag" role="button" data-toggle="modal" title="设置">
            <i class="glyphicon glyphicon-pencil"></i></span>

    <div class="preview">
        <img src="{$skin_admin_path}/images/visual/section/announ.png">
        <p>公告</p>
    </div>
    <div class="view">
        <div class="">
            <div class="codearea">
                <div class="announ-list">
                    <ol>
                        #[#loop announ(<var id="num">1</var>,<var id="title_len">0</var>,<var id="is_date">1</var>) $an#]#
                        <li>
                            <p class="badge announ-date">#[#$an['adddate']#]#</p>
                            <p><a title="#[#$an['title']#]#" href="#[#$an['url']#]#"
                                  target="_blank">#[#$an['title']#]#</a></p>
                        </li>
                        #[#/loop#]#
                        </ol>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="viewarea">
                <div class="visual-announ-list">
                    <ol>
                        {loop announ(1,0,1) $an}
                        <li>
                            <p class="badge announ-date">{$an['adddate']}</p>

                            <p><a title="{$an['title']}" href="{$an['url']}" target="_blank">{$an['title']}</a></p>
                        </li>
                        {/loop}
                        </ol>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- 组件结束 -->