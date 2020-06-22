<div class="modal fade" id="template-announ-tag" tabindex="-1" role="dialog"
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
                    公告属性
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" name="frmAnnoun" id="frmAnnoun" action="">
                    <?php
                    $tplarray=include(ROOT.'/template/'.config::get('template_dir').'/annountag/announ.config.php');
                    //$tplarray=$tplarray['category'];
                    //$tag_config=$data['setting'];
                    ?>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            标题截取字数
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input type="text" name="title_len" id="title_len" value="20" class="title_len form-control">
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            列表条数
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input type="text" name="num" id="num" value="20" class="num form-control">
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            是否显示时间
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="is_date" name="is_date" class="form-control is_date select">
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
                            样式选择
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <?php echo form::select('annountemplate', '', $tplarray);?>
                            <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right"
                                  title=""
                                  data-original-title="标签模板文件存放在&nbsp;template/当前使用后台模板目录/annountag/list_*.html!">
                                    </span>
                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    关闭
                </button>
                <button id="saveAnnounStyle" type="button" class="btn btn-primary" data-dismiss="modal">保存
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var announHandel;

    $(document).ready(function () {

        $('body.edit .visual-right').on("click", "[data-target='#template-announ-tag']", function (e) {
            e.preventDefault();
            announHandel = $(this).parent().find('.view');
            console.log(announHandel.find('.codearea #title_len').html());
            $('#frmAnnoun .title_len').val(announHandel.find('.codearea #title_len').html());
            $('#frmAnnoun .num').val(announHandel.find('.codearea #num').html());
            $('#frmAnnoun .is_date').val(announHandel.find('.codearea #is_date').html());
            //console.log(navHandel);
            //contenthandle.setData(eText);
        });

        $("#saveAnnounStyle").click(function (e) {
            e.preventDefault();
            //alert($("input[name=navstyle]:checked").val());
            data = $("#frmAnnoun").serialize();
            $.post('{url("template/getannounlist")}', data, function (res) {
                announHandel.html(res);
                //navHandel.html('<div class="nav" rel="nav(' + $("input[name=navstyle]:checked").val() + ')">' + res + '</div>');
            });

            //return false;

        });
    });

</script>