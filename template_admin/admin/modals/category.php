<div class="modal fade" id="template-category-tag" tabindex="-1" role="dialog"
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
                <form method="post" name="frmcategory" id="frmcategory" action="">
                    <input type="hidden" name="tagfrom" value="category" class="form-control">
                    <input type="hidden" name="id" value="" class="form-control id">
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
                    <?php
                    $tplarray=include(ROOT.'/template/'.config::get('template_dir').'/tpltag/tag.config.php');
                    $tplarray=$tplarray['category'];
                    $tag_config=$data['setting'];
                    ?>
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
                <button id="savecontent1" type="button" class="btn btn-primary" data-dismiss="modal">保存
                </button>
            </div>
        </div>
    </div>
</div>
<!-- 标签弹出框 -->
<script type="text/javascript">
    var currenteditor1;
    $(document).ready(function () {
        $('body.edit .visual-right').on("click","[data-target='#template-category-tag']",function(e) {
            e.preventDefault();
            currenteditor1 = $(this).parent().parent().find('.view');
            var eText = currenteditor1.find('.tag .tagname').html();
            $.post('{url("template/gettag")}',{'tag':eText},function(res){
                console.log(res);
                $('#frmcategory .id').val(res.id);
                $('#frmcategory .name').val(res.name);
                $('#frmcategory .catid').val(res.setting.catid);
                $('#frmcategory .tagtemplate').val(res.setting.tagtemplate);
            },'json');
        });

        $("#savecontent1").click(function(e) {
            e.preventDefault();
            if($('#frmcategory .name').val() == ''){
                alert('请填写标签名称');
                $('#frmcategory .name').focus();
                return false;
            }
            if($('#frmcategory .catid').val()=='0'){
                alert('请选择栏目');
                $('#frmcategory .catid').focus();
                return false;
            }
            data = $('#frmcategory').serialize();
            $.post('{url("template/savetag")}',data,function(res){
                $('#frmcategory')[0].reset();
                $('#frmcategory .id').val('');
                currenteditor1.html(res);
            });
        });
    });
</script>