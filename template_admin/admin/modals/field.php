<div class="modal fade" id="template-field-tag" tabindex="-1" role="dialog"
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
                    自定义字段属性
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" name="frmField" id="frmField" action="">
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            选择字段
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select class="fields" style="width: 100%; height: 380px;" name="fields[]" id="fields" multiple="multiple">
                                <optgroup label="按CTRL+A全选">
                                </optgroup>
                                <optgroup label="按CTRL或者SHIFT多选">
                    <?php
                    //$tplarray=include(ROOT.'/template_admin/'.config::get('admin_template_dir').'/annountag/announ.config.php');
                    //$tplarray=$tplarray['category'];
                    //$tag_config=$data['setting'];
                    $sets = setting::getInstance();
                    $fields = setting::$var['archive'];
                    if(is_array($fields) && !empty($fields)){
                        foreach ($fields as $f){
                            ?>
                            <option value="<?php echo $f['name'];?>"><?php echo $f['cname'];?></option>
                            <?php
                        }
                    }
                    ?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    关闭
                </button>
                <button id="saveFieldStyle" type="button" class="btn btn-primary" data-dismiss="modal">保存
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var fieldHandel;

    $(document).ready(function () {

        $('body.edit .visual-right').on("click", "[data-target='#template-field-tag']", function (e) {
            e.preventDefault();
            fieldHandel = $(this).parent().find('.view');
            //console.log(announHandel.find('.codearea #title_len').html());
            $('#frmField .fields').val(fieldHandel.find('.codearea var.selected').html().split(','));
            //$('#frmAnnoun .num').val(announHandel.find('.codearea #num').html());
            //$('#frmAnnoun .is_date').val(announHandel.find('.codearea #is_date').html());
            //console.log(navHandel);
            //contenthandle.setData(eText);
        });

        $("#saveFieldStyle").click(function (e) {
            e.preventDefault();
            //alert($("input[name=navstyle]:checked").val());
            data = $("#frmField").serialize();
            $.post('{url("template/getfieldlist")}', data, function (res) {
                fieldHandel.html(res);
                //navHandel.html('<div class="nav" rel="nav(' + $("input[name=navstyle]:checked").val() + ')">' + res + '</div>');
            });

            //return false;

        });
    });

</script>