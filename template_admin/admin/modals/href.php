<div class="modal fade href-config" id="hrefModel" tabindex="-1" role="dialog"
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
                    链接
                </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>连接地址</label>
                    <input id="url" placeholder="连接地址" name="url" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label>打开方式</label>
                    <select id="target" name="target" class="form-control">
                        <option value="">默认</option>
                        <option value="_self">原窗口</option>
                        <option value="_blank">新窗口</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">
                    关闭
                </button>
                <button id="btn_saveHref" type="button" class="btn btn-primary" data-dismiss="modal">保存
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var hrefHandel;

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#hrefModel']", function (e) {
            e.preventDefault();
            hrefHandel = $(this).parent().parent().parent().find('.view img,.view i,.view em');
            $('.href-config #url').val(hrefHandel.parent().attr('href'));
            $('.href-config #target').val(hrefHandel.parent().attr('target'));
            //console.log(hrefHandel.parent());
        });

        $("#btn_saveHref").click(function(e) {
            e.preventDefault();
            if(hrefHandel.parent()[0].tagName != 'A') {
                hrefHandel.wrap('<a target="' + $('.href-config #target').val() + '" href="' + $('.href-config #url').val() + '"></a>');
            }else{
                hrefHandel.parent().attr('href',$('.href-config #url').val());
                hrefHandel.parent().attr('target',$('.href-config #target').val());
            }

        });
    });
</script>