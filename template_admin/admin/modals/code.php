<div class="modal fade code-config" id="codeModel" tabindex="-1" role="dialog"
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
                    代码
                </h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <textarea rows="50" id="codecontent" style="height: 300px;" placeholder="在这里输入代码" name="codecontent" type="text" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer  form-inline">
				 
				<div class="checkbox pull-left">
    <label>
      <input type="checkbox" id="code-checkbox" name="code-checkbox"> 隐藏
    </label>
  </div>
                <button  type="button" class="btn btn-default" data-dismiss="modal">
                    关闭
                </button>
                <button id="btn_saveCode" type="button" class="btn btn-primary" data-dismiss="modal">保存
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var codeHandel;

    function htmlspecialchars(str){
        str = str.replace(/&/g, '&amp;');
        str = str.replace(/</g, '&lt;');
        str = str.replace(/>/g, '&gt;');
        str = str.replace(/"/g, '&quot;');
        str = str.replace(/'/g, '&#039;');
        return str;
    }

    function htmlspecialchars_decode(str){
        str = str.replace(/&amp;/g, '&');
        str = str.replace(/&lt;/g, '<');
        str = str.replace(/&gt;/g, '>');
        str = str.replace(/&quot;/g, "''");
        str = str.replace(/&#039;/g, "'");
        return str;
    }

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#codeModel']", function (e) {
            e.preventDefault();
            codeHandel = $(this).parent().parent().parent().find('.view .visua-code');

            //console.log(codeHandel.html());
            $('.code-config #codecontent').val(htmlspecialchars_decode(codeHandel.html()));
        });


		$("#code-checkbox").click(function(){
			$(".visua-code,.visua-code-show").toggleClass("hidden");
		});


        $("#btn_saveCode").click(function(e) {
            e.preventDefault();
            str = $('.code-config #codecontent').val();
            str = str.replace(/(<\?|\?>|\{php)/g,"@@");
            codeHandel.html(htmlspecialchars(str));

        });

    });
</script>