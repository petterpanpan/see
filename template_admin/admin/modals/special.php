<div class="modal fade" id="template-special-tag" tabindex="-1" role="dialog"
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
                    专题标签属性
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" name="frmspecial" id="frmspecial" action="">
                    <input type="hidden" name="tagfrom" value="special" class="form-control">
                    <input type="hidden" name="id" value="" class="form-control id">
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            名称
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input placeholder="请输入专题标签名称" type="text" name="name" value="" class="name form-control">

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <?php
                    $tplarray=include(ROOT.'/template/'.config::get('template_dir').'/tpltag/tag.config.php');
                    $tplarray=$tplarray['special'];
                    $tag_config=$data['setting'];
                    ?>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            专题
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            {form::select('spid', $tag_config['spid'], special::option('全部专题'))}
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            标题
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="spname" name="spname" class="form-control select spname">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                            <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="默是否调用副标题!"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            副标题
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="subtitle" name="subtitle" class="form-control select subtitle">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                            <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="默是否调用副标题!"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            专题banner图
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="spimage" name="spimage" class="form-control select spimage">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                            <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="是否调用说明图片!"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            专题内容
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="spcontent" name="spcontent" class="form-control select spcontent">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                            <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="是否调用专题说明!"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            截取字数
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input type="text" id="len" name="len" value="-1" class="len form-control">
                            <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="-1：不限制 0：不调用"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            标签模板
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            {form::select('tagtemplate', $tag_config['tagtemplate'], $tplarray)}
                            <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right"
                                  title=""
                                  data-original-title="标签模板文件存放在&nbsp;template/当前使用模板目录/tpltag/tag_special_*.html!">
                                    </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">
                    关闭
                </button>
                <button id="saveSpecial" type="button" class="btn btn-primary" data-dismiss="modal">保存
                </button>
            </div>
        </div>
    </div>
</div>
<!-- 标签弹出框 -->
<script type="text/javascript">
    var specialHandle;
    $(document).ready(function () {
        $('body.edit .visual-right').on("click","[data-target='#template-special-tag']",function(e) {
            e.preventDefault();
            specialHandle = $(this).parent().parent().find('.view');
            var eText = specialHandle.find('.tag .tagname').html();
            $.post('{url("template/gettag")}',{'tag':eText},function(res){
                //console.log(res);
                $('#frmspecial .id').val(res.id);
                $('#frmspecial .name').val(res.name);
                $('#frmspecial .spid').val(res.setting.spid);
                $('#frmspecial .spname').val(res.setting.spname);
                $('#frmspecial .subtitle').val(res.setting.subtitle);
                $('#frmspecial .spimage').val(res.setting.spimage);
                $('#frmspecial .spcontent').val(res.setting.spcontent);
                $('#frmspecial .len').val(res.setting.len);
                $('#frmspecial .tagtemplate').val(res.setting.tagtemplate);
            },'json');
        });

        $("#saveSpecial").click(function(e) {
            e.preventDefault();
            if($('#frmspecial .name').val() == ''){
                alert('请填写标签名称');
                $('#frmspecial .name').focus();
                return false;
            }
            data = $('#frmspecial').serialize();
            $.post('{url("template/savetag")}',data,function(res){
                $('#frmspecial')[0].reset();
                $('#frmspecial .id').val('');
                specialHandle.html(res);
            });
        });
    });
</script>