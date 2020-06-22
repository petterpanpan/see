<div class="modal fade" id="icon-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
                                &times;
				</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">
                    图标管理
				</h4>
			</div>
			<div class="modal-body">
				
				<?php autotempdir('sections-config/icon'); ?>
				
			</div>
			<div class="blank30"></div>
				<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
		</div>
	</div>
</div>

<script type="text/javascript">
    var iconHandel = $('.body');

    function closeModel(id){
        $('#'+id).modal('hide');
    }

    $(document).ready(function () {
        // alert($('#download-layout').html());

        $('body.edit .visual-right').on("click", "[data-target='#icon-config']", function (e) {
            e.preventDefault();
			iconHandel = $(this).parent().find('.view .visual-ico');
            //console.log(iconHandel);
            //contenthandle.setData(eText);
			//console.log(iconHandel);

			$('.icon-config #padding-top').val(parseInt(iconHandel.css('padding-top')));
            $('.icon-config #padding-bottom').val(parseInt(iconHandel.css('padding-bottom')));
            $('.icon-config #padding-left').val(parseInt(iconHandel.css('padding-left')));
            $('.icon-config #padding-right').val(parseInt(iconHandel.css('padding-right')));

            $('.icon-config #margin-top').val(parseInt(iconHandel.css('padding-top')));
            $('.icon-config #margin-bottom').val(parseInt(iconHandel.css('padding-bottom')));
            $('.icon-config #margin-left').val(parseInt(iconHandel.css('padding-left')));
            $('.icon-config #margin-right').val(parseInt(iconHandel.css('padding-right')));


			//定位
            _top = isNaN(parseInt(iconHandel.css('top'))) ? '' : parseInt(iconHandel.css('top'));
            _bottom = isNaN(parseInt(iconHandel.css('bottom'))) ? '' : parseInt(iconHandel.css('bottom'));
            _left = isNaN(parseInt(iconHandel.css('left'))) ? '' : parseInt(iconHandel.css('left'));
            _right = isNaN(parseInt(iconHandel.css('right'))) ? '' : parseInt(iconHandel.css('right'));
			$('.icon-config #top').val(_top);
            $('.icon-config #bottom').val(_bottom);
            $('.icon-config #left').val(_left);
            $('.icon-config #right').val(_right);


            $('.icon-config #font-size').val(parseInt(iconHandel.css('font-size')));
			$('.div-config #btn_clsFontZize').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('font-size','');
            });
			$('.icon-config #z-index').val(iconHandel.zIndex());

			$('.icon-config .icon-position a').removeClass("on");
            $('.icon-config .icon-position').find("[rel="+iconHandel.css('position')+"]").addClass("on");

			$('.icon-config .icon-float a').removeClass("on");
            $('.icon-config .icon-float a').find("[rel="+iconHandel.css('float')+"]").addClass("on");

			$('.icon-config .icon-display a').removeClass("on");
			$('.icon-config .icon-display').find("[rel="+iconHandel.css('display')+"]").addClass("on");

			

            $('.icon-config #href').val(iconHandel.attr('href'));
            $('.icon-config #text').val(iconHandel.text());
           
	
        });

		$('.icon-config #color_Icon').colorpicker({
            component:'.color_addion'
        });


        $('.icon-config #color_Icon').on('changeColor', function(event) {
            iconHandel.css('color', event.color.toString());
        });

        $('.icon-config #btn_clsIconColor').on('click', function(event) {
            $(this).parent().parent().find('input').val('');
            iconHandel.css('color','');
        });



        $('.icon-config .config').keyup(function(){
            iconHandel.css($(this).attr('name'), $(this).val() + 'px');
            //setConfig();
        });
		


		//z-index
        $('.icon-config #z-index').keyup(function(){
            iconHandel.css('z-index', $(this).val());
        });


		//float
		$(".icon-config").delegate(".icon-float a", "click", function (e) {
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            iconHandel.css('float',$(this).attr("rel"));
        });

		//display
		$(".icon-config").delegate(".icon-display a", "click", function (e) {
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            iconHandel.css('display',$(this).attr("rel"));
        });

		//position
        $(".icon-config").delegate(".icon-position a", "click", function (e) {
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            iconHandel.css('position',$(this).attr("rel"));
        });


        /*$('#cb_iconfont').on('change', function() {
            //console.log($(this).find('span'));
            $('#icon-config').modal('hide');
            var iconToChange = $(this).find('.selected-icon'),
                //iconToChange = nextSpan.find('.selected_icon'),
                selectedIcon = $(this).val();
            console.log(iconToChange);
            console.log(selectedIcon);
            iconHandel.html('<i class="'+iconToChange.find('i').attr('class')+'"></i>');
        });*/
    });
</script>


