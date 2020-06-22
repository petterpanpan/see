<div class="modal fade" id="audioModel" tabindex="-1" role="dialog"
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
                    音频管理
                </h4>
            </div>
            <div class="modal-body">
                <iframe name="upfilewindow" class="upfilewindow" src="" width="100%" height="560" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var audioHandel;

    function refileAudio(filename,autoplay,width,height){
        //console.log(filename);
        audioHandel.attr('src',filename);
        if(autoplay){
            audioHandel.attr('autoplay','true');
        }
        if(width != ''){
            audioHandel.attr('width',width);
        }
        if(height != ''){
            audioHandel.attr('height',height);
        }
    }

    function closeModel(id){
        $('#'+id).modal('hide');
    }

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#audioModel']", function (e) {
            e.preventDefault();
            audioHandel = $(this).parent().parent().parent().find('.view audio');
            console.log(audioHandel);
            //contenthandle.setData(eText);
        });

        $('#audioModel').on('shown.bs.modal', function (e) {
            //console.log($('.upfilewindow').width());
            $('.upfilewindow').attr('src','index.php?case=file&act=updialog3&checkfrom=audioshow&max=1&width='+$('.upfilewindow').width());
        })
    });
</script>