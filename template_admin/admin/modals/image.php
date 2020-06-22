<div class="modal fade" id="imageModel" tabindex="-1" role="dialog"
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
                <iframe name="upfilewindow" class="upfilewindow" src="" width="100%" height="555" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var imageHandel;

    function refilediv(filename,alt,width,height){
        //console.log(filename);
        imageHandel.attr('src',filename);
        imageHandel.attr('alt',alt);
        imageHandel.attr('width',width);
        imageHandel.attr('height',height);
    }

    function closeModel(id){
        $('#'+id).modal('hide');
    }

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#imageModel']", function (e) {
            e.preventDefault();
            imageHandel = $(this).parent().parent().parent().find('.view img');
            console.log(imageHandel);
            //contenthandle.setData(eText);
        });

        $('#imageModel').on('shown.bs.modal', function (e) {
            console.log($('.upfilewindow').width());
            $('.upfilewindow').attr('src','index.php?case=file&act=updialog1&checkfrom=divshow&max=1&width='+$('.upfilewindow').width());
        })
    });
</script>