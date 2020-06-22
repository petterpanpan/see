<div class="modal fade" id="template-content-tag" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    属性
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frmcontent" name="frmcontent" action="">
                    <input type="hidden" name="id" class="id" value="">
                    <input type="hidden" name="tagfrom" value="content" class="form-control">
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            名称
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input placeholder="请输入栏目标签名称" type="text" name="name" value="" class="name form-control">

                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            栏目
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            {form::select('catid', $tag_config['catid'], category::option())}
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            子栏目
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="son" name="son" class="form-control select son">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            分类
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            {form::select('typeid', $tag_config['typeid'], type::option())}
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            专题
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            {form::select('spid', $tag_config['spid'], special::option())}
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            标题截取字数
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input type="text" name="length" id="length" value="20" class="length form-control">
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            简介截取字数
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input type="text" name="introduce_length" id="introduce_length" value="-1" class="form-control introduce_length">
                            <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="" data-original-title="-1：不限制 0：不调用">
                                    </span>
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            排序方式
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="ordertype" name="ordertype" class="form-control ordertype select">
                                <option value="adddate-desc">
                                    最新(按发布时间倒序)
                                </option>
                                <option value="aid-desc">
                                    最新(按aid倒序)
                                </option>
                                <option value="aid-asc">
                                    最早(按按aid顺序)
                                </option>
                                <option value="view-desc">
                                    最热(按view倒序)
                                </option>
                                <option value="comment_num-desc">
                                    热评(按comment_num倒序)
                                </option>
                                <option value="rand()">
                                    随机
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            调用置顶内容
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="istop" name="istop" class="form-control istop select">
                                <option value="0">
                                    否
                                </option>
                                <option value="1">
                                    是
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            调用记录条数
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input type="text" name="limit" id="limit" value="3" class="limit form-control">
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            缩略图
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input type="checkbox" value="1" class="thumb" name="thumb" id="thumb">
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            推荐位
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <?php
                            $tplarray=include(ROOT.'/template/'.config::get('template_dir').'/tpltag/tag.config.php');
                            $tplarray=$tplarray['content'];
                            $set=settings::getInstance();
                            $sets=$set->getrow(array('tag'=>'table-archive'));
                            $ds=unserialize($sets['value']);
                            preg_match_all('%\(([\d\w\/\.-]+)\)(\S+)%s',$ds['attr1'],$result,PREG_SET_ORDER);
                            $sdata=array();
                            foreach ($result as $res) $sdata[$res[1]]=$res[2];
                            echo form::select('attr1', $tag_config['attr1'], $sdata);
                            ?>
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            标签模板
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            {form::select('tagtemplate', $tag_config['tagtemplate'], $tplarray)}
                            <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right"
                                  title=""
                                  data-original-title="标签模板文件存放在&nbsp;template/当前使用模板目录/tpltag/tag_content_*.html!">
                                    </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">
                    关闭
                </button>
                <button id="savecontent" type="button" class="btn btn-primary" data-dismiss="modal">保存
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var currenteditor;
    $(document).ready(function () {
        $('body.edit .visual-right').on("click","[data-target='#template-content-tag']",function(e) {
            e.preventDefault();
            currenteditor = $(this).parent().parent().find('.view');
            var eText = currenteditor.find('.tag .tagname').html();
            $.post('{url("template/gettag")}',{'tag':eText},function(res){
                console.log(res);
                $('#frmcontent .id').val(res.id);
                $('#frmcontent .name').val(res.name);
                $('#frmcontent .catid').val(res.setting.catid);
                $('#frmcontent .son').val(res.setting.son);
                $('#frmcontent .typeid').val(res.setting.typeid);
                $('#frmcontent .spid').val(res.setting.spid);
                $('#frmcontent .length').val(res.setting.length);
                $('#frmcontent .introduce_length').val(res.setting.introduce_length);
                $('#frmcontent .ordertype').val(res.setting.ordertype);
                $('#frmcontent .istop').val(res.setting.istop);
                $('#frmcontent .limit').val(res.setting.limit);
                $('#frmcontent .thumb').attr('checked',res.setting.thumb=='1');
                $('#frmcontent .attr1').val(res.setting.attr1);
                $('#frmcontent .tagtemplate').val(res.setting.tagtemplate);
            },'json');
            console.log(eText);
            //contenthandle.setData(eText);
        });

        $("#savecontent").click(function(e) {
            e.preventDefault();
            //currenteditor.html("已保存");
            if($('#frmcontent .name').val() == ''){
                alert('请填写标签名称');
                $('#frmcontent .name').focus();
                return false;
            }
            if($('#frmcontent .catid').val()=='0'){
                alert('请选择栏目');
                $('#frmcontent .catid').focus();
                return false;
            }
            data = $('#frmcontent').serialize();
            $.post('{url("template/savetag")}',data,function(res){
                $('#frmcontent')[0].reset();
                $('#frmcontent .id').val('');
                currenteditor.html(res);
            });
        });
    });
</script>