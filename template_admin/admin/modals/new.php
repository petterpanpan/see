<div class="modal fade" id="template-add" tabindex="-1" role="dialog"
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
                    新建模板
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" name="frmnewtemplate" id="frmnewtemplate" action="">
                
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            模版文件名
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input placeholder="请输入模板文件名称" type="text" name="name" value="" class="name form-control">
<div class="blank10">
            </div>
            <div class="clearfix alert alert-info alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
                <strong>
                    注意：
                </strong>
                命名必须为英文或拼音！
            </div>
                        </div>
                    </div>
					
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            模版说明
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <input placeholder="请简要输入模板说明" type="text" name="notename" value="" class="notename form-control">

                        </div>
                    </div>
                    <div class="clearfix blank20">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            类型
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            {form::select('type', '', templatetag::typeoption())}
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

					栏目模板：list_英文.html；内容模板：show_英文.html

                </form>
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">
                    关闭
                </button>
                <button id="btn_saveTemplate" type="button" class="btn btn-primary">保存
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#btn_saveTemplate').click(function (e) {
            if($('#frmnewtemplate .name').val()==''){
                alert('请填写模板名字');
                $('#frmnewtemplate .name').focus();
                return false;
            }
            $.post('<?php echo url('template/newtemplate');?>',$('#frmnewtemplate').serialize(),function(res){
                console.log(res);
                if(res.code != '0'){
                    alert(res.info);
                }else{
                    window.location.href = '<?php echo url('template/visual');?>&tempname='+res.info;
                }
            },'json');
        });
    });
</script>