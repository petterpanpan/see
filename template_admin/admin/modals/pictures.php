<div class="modal fade" id="picturesModel" tabindex="-1" role="dialog"
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
                    图片管理
                </h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <input id="pic_1" name="pic_1" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <input id="text_1" placeholder="连接文字1" name="text_1" type="text" class="form-control">
                    <input id="img_1" name="img_1" type="hidden" class="form-control">
                </div>
                <div class="form-group">
                    <input id="url_1" placeholder="连接地址1" name="url_1" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <input id="pic_2" name="pic_2" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <input id="text_2" placeholder="连接文字2" name="text_2" type="text" class="form-control">
                    <input id="img_2" name="img_2" type="hidden" class="form-control">
                </div>
                <div class="form-group">
                    <input id="url_2" name="url_2" placeholder="连接地址2" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <input id="pic_3" name="pic_3" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <input id="text_3" name="text_3" placeholder="连接文字3" type="text" class="form-control">
                    <input id="img_3" name="img_3" type="hidden" class="form-control">
                </div>
                <div class="form-group">
                    <input id="url_3" name="url_3" placeholder="连接地址3" type="text" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-default" data-dismiss="modal">
                    关闭
                </button>
                <button id="btn_savePictures" type="button" data-dismiss="modal" class="btn btn-primary">保存
                </button>
            </div>
        </div>

    </div>
</div>
<script>
    $( function () {
        $( "#pic_1" ).fileinput( {
            uploadUrl: '<?php echo url('tool/uploadimage3',false);?>', // you must set a valid URL here else you will get an error
            allowedFileExtensions: [ 'jpg', 'png', 'gif' ],
            maxFileSize: 1000,
            language: 'zh',
            maxFilesNum: 1,
            maxFileCount: 1,
            showPreview: false,
            showCaption: true,
            showUploadedThumbs: false
        } ).on( 'fileerror', function ( event, data, msg ) {
            alert( msg );
        } ).on( 'fileuploaded', function ( event, data, previewId, index ) {
            response = data.response;
            if ( response.pic_1.code == '0' ) {
                $('#img_1').val(response.pic_1.name);
            } else {
                alert( response.pic_1.msg );
            }
        } );

        $( "#pic_2" ).fileinput( {
            uploadUrl: '<?php echo url('tool/uploadimage3',false);?>', // you must set a valid URL here else you will get an error
            allowedFileExtensions: [ 'jpg', 'png', 'gif' ],
            maxFileSize: 1000,
            language: 'zh',
            maxFilesNum: 1,
            maxFileCount: 1,
            showPreview: false,
            showCaption: true,
            showUploadedThumbs: false
        } ).on( 'fileerror', function ( event, data, msg ) {
            alert( msg );
        } ).on( 'fileuploaded', function ( event, data, previewId, index ) {
            response = data.response;
            if ( response.pic_2.code == '0' ) {
                $('#img_2').val(response.pic_2.name);
            } else {
                alert( response.pic_2.msg );
            }
        } );

        $( "#pic_3").fileinput( {
            uploadUrl: '<?php echo url('tool/uploadimage3',false);?>', // you must set a valid URL here else you will get an error
            allowedFileExtensions: [ 'jpg', 'png', 'gif' ],
            maxFileSize: 1000,
            language: 'zh',
            maxFilesNum: 1,
            maxFileCount: 1,
            showPreview: false,
            showCaption: true,
            showUploadedThumbs: false
        } ).on( 'fileerror', function ( event, data, msg ) {
            alert( msg );
        } ).on( 'fileuploaded', function ( event, data, previewId, index ) {
            response = data.response;
            if ( response.pic_3.code == '0' ) {
                $('#img_3').val(response.pic_3.name);
            } else {
                alert( response.pic_3.msg );
            }
        } );

    } );
</script>
<script type="text/javascript">
    var picturesHandel;

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#picturesModel']", function (e) {
            e.preventDefault();
            picturesHandel = $(this).parent().parent().parent().find('.view .carousel .carousel-inner .item');
            //console.log(picturesHandel);
            //contenthandle.setData(eText);
        });

        $('#btn_savePictures').on('click', function (e) {
            picturesHandel.each(function (index, domEle) {
                i = index + 1;
                img = $(this).find('img');
                a = $(this).find('a');
                if($('#img_'+i).val()) {
                    img.attr('src', $('#img_' + i).val());
                }
                if($('#url_'+i).val()) {
                    a.attr('href', $('#url_' + i).val());
                }
                if($('#text_'+i).val()) {
                    a.text($('#text_' + i).val());
                }
            });
        })
    });
</script>