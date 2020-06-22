<div class="modal fade" id="videoModel" tabindex="-1" role="dialog"
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
                    视频管理
                </h4>
            </div>
            <div class="modal-body">
                <iframe name="upfilewindow" class="upfilewindow" src="" width="100%" height="560" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var videoHandel;

    function refileVideo(filename,autoplay,width,height){
        //console.log(filename);
        videoHandel.attr('src','ckplayer.php?url='+filename+'&autoplay='+autoplay);
        //videoHandel.attr('alt',alt);
        if(width != ''){
            videoHandel.attr('width',width);
        }
        if(height != ''){
            videoHandel.attr('height',height);
        }
    }

    function closeModel(id){
        $('#'+id).modal('hide');
    }

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#videoModel']", function (e) {
            e.preventDefault();
            videoHandel = $(this).parent().parent().parent().find('.view iframe');
            console.log(videoHandel);
            //contenthandle.setData(eText);
        });

        $('#videoModel').on('shown.bs.modal', function (e) {
            //console.log($('.upfilewindow').width());
            $('.upfilewindow').attr('src','index.php?case=file&act=updialog2&checkfrom=videoshow&max=1&width='+$('.upfilewindow').width());
        })
    });
</script>