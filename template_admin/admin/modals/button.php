<!-- button modal -->
<div class="container-fluid">
    <div class="modal fade" id="button-config" tabindex="-1" role="dialog" aria-labelledby="button-config">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="button-config">属性</h4>
                </div>
                <div class="modal-body">
                    <?php autotempdir('sections-config/button'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- button modal -->
<script type="text/javascript">
    var currButton;
    $(document).ready(function () {
        $('body.edit .visual-right').on("click", "[data-target='#button-config']", function (e) {
            e.preventDefault();
            currButton = $(this).parent().find('.view>a');
            //console.log(currButton);
            $('.button-config #padding-top').val(parseInt(currButton.css('padding-top')));
            $('.button-config #padding-bottom').val(parseInt(currButton.css('padding-bottom')));
            $('.button-config #padding-left').val(parseInt(currButton.css('padding-left')));
            $('.button-config #padding-right').val(parseInt(currButton.css('padding-right')));

            $('.button-config #margin-top').val(parseInt(currButton.css('padding-top')));
            $('.button-config #margin-bottom').val(parseInt(currButton.css('padding-bottom')));
            $('.button-config #margin-left').val(parseInt(currButton.css('padding-left')));
            $('.button-config #margin-right').val(parseInt(currButton.css('padding-right')));

			$('.button-config #border-top-width').val(parseInt(currButton.css('border-top-width')));
            $('.button-config #border-right-width').val(parseInt(currButton.css('border-right-width')));
            $('.button-config #border-bottom-width').val(parseInt(currButton.css('border-bottom-width')));
            $('.button-config #border-left-width').val(parseInt(currButton.css('border-left-width')));

			//定位
            _top = isNaN(parseInt(currButton.css('top'))) ? '' : parseInt(currButton.css('top'));
            _bottom = isNaN(parseInt(currButton.css('bottom'))) ? '' : parseInt(currButton.css('bottom'));
            _left = isNaN(parseInt(currButton.css('left'))) ? '' : parseInt(currButton.css('left'));
            _right = isNaN(parseInt(currButton.css('right'))) ? '' : parseInt(currButton.css('right'));
			$('.button-config #top').val(_top);
            $('.button-config #bottom').val(_bottom);
            $('.button-config #left').val(_left);
            $('.button-config #right').val(_right);


            $('.button-config #font-size').val(parseInt(currButton.css('font-size')));
			$('.div-config #btn_clsFontZize').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('font-size','');
            });

			$('.button-config #z-index').val(currButton.zIndex());

			$('.button-config .button-position a').removeClass("on");
            $('.button-config .button-position').find("[rel="+currButton.css('position')+"]").addClass("on");

			$('.button-config .button-float a').removeClass("on");
            $('.button-config .button-float a').find("[rel="+currButton.css('float')+"]").addClass("on");

			$('.button-config .button-display a').removeClass("on");
			$('.button-config .button-display').find("[rel="+currButton.css('display')+"]").addClass("on");

			$('.button-config .button-border-style a').removeClass("on");
            $('.button-config .button-border-style').find("[rel="+currButton.css('border-style')+"]").addClass("on");

			//边框颜色
			$('.button-config #border-top-color input').val(currButton.css('border-top-color')!='rgba(0, 0, 0, 0)'?currButton.css('border-top-color'):'');
			$('.button-config #border-right-color input').val(currButton.css('border-right-color')!='rgba(0, 0, 0, 0)'?currButton.css('border-right-color'):'');
			$('.button-config #border-bottom-color input').val(currButton.css('border-bottom-color')!='rgba(0, 0, 0, 0)'?currButton.css('border-bottom-color'):'');
			$('.button-config #border-left-color input').val(currButton.css('border-left-color')!='rgba(0, 0, 0, 0)'?currButton.css('border-left-color'):'');

            $('.button-config #color_bg_btn').val(currButton.css('background-color')!='rgba(0, 0, 0, 0)'?currButton.css('background-color'):'');
            $('.button-config #color_font').val(currButton.css('color')!='rgba(0, 0, 0, 0)'?currButton.css('color'):'');
            //currButton.css('background-color','#ff0000');
            //console.log(currButton);

			//DIV 边框上颜色
            $('.button-config #border-top-color').colorpicker({
                component:'.color_addion',
                color: currButton.css('border-top-color')
            });
            $('.button-config #border-top-color').on('changeColor', function(event) {
                //console.log(currButton);
                //console.log(event.color);
                currButton.css('border-top-color', event.color.toString());
            });
            $('.button-config #btn_border-top-color').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currButton.css('border-top-color','');
            });

			//DIV 边框右颜色
            $('.button-config #border-right-color').colorpicker({
                component:'.color_addion',
                color: currButton.css('border-right-color')
            });
            $('.button-config #border-right-color').on('changeColor', function(event) {
                //console.log(currButton);
                //console.log(event.color);
                currButton.css('border-right-color', event.color.toString());
            });
            $('.button-config #btn_border-right-color').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currButton.css('border-right-color','');
            });

			//DIV 边框下颜色
            $('.button-config #border-bottom-color').colorpicker({
                component:'.color_addion',
                color: currButton.css('border-bottom-color')
            });
            $('.button-config #border-bottom-color').on('changeColor', function(event) {
                //console.log(currButton);
                //console.log(event.color);
                currButton.css('border-bottom-color', event.color.toString());
            });
            $('.button-config #btn_border-bottom-color').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currButton.css('border-bottom-color','');
            });

			//DIV 边框左颜色
            $('.button-config #border-left-color').colorpicker({
                component:'.color_addion',
                color: currButton.css('border-left-color')
            });
            $('.button-config #border-left-color').on('changeColor', function(event) {
                //console.log(currButton);
                //console.log(event.color);
                currButton.css('border-left-color', event.color.toString());
            });
            $('.button-config #btn_border-left-color').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currButton.css('border-left-color','');
            });

            $('.button-config #href').val(currButton.attr('href'));
            $('.button-config #text').val(currButton.text());
			});

			$('.button-config #color_bg_btn').colorpicker({
            component:'.color_addion'
			});

        $('.button-config #color_bg_btn').on('changeColor', function(event) {
            currButton.css('background-color', event.color.toString());
        });

        $('.button-config #btn_clsBgColor').on('click', function(event) {
            $(this).parent().parent().find('input').val('');
            currButton.css('background-color','');
        });

		


		$('.button-config #color_font').colorpicker({
            component:'.color_addion'
        });
        $('.button-config #color_font').on('changeColor', function(event) {
            currButton.css('color', event.color.toString());
        });
        $('.button-config #btn_clsFontColor').on('click', function(event) {
            $(this).parent().parent().find('input').val('');
            currButton.css('color','');
        });



        $('.button-config .config').keyup(function(){
            currButton.css($(this).attr('name'), $(this).val() + 'px');
            //setConfig();
        });
		

		$('.button-config .set_attr').keyup(function(){
            currButton.attr($(this).attr('name'), $(this).val());
            //setConfig();
        });

		//z-index
        $('.button-config #z-index').keyup(function(){
            currButton.css('z-index', $(this).val());
        });

        $('.button-config .set_val').keyup(function(){
            currButton.text($(this).val());
            //setConfig();
        });
       
	    

	   //border-style
	   $(".button-config").delegate(".button-border-style a", "click", function (e) {
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currButton.css('border-style',$(this).attr("rel"));
        });

		//float
		$(".button-config").delegate(".button-float a", "click", function (e) {
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currButton.css('float',$(this).attr("rel"));
        });

		//display
		$(".button-config").delegate(".button-display a", "click", function (e) {
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currButton.css('display',$(this).attr("rel"));
        });

		//position
        $(".button-config").delegate(".button-position a", "click", function (e) {
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currButton.css('position',$(this).attr("rel"));
        });

		$(".button-config").delegate(".text-align a", "click", function (e) {
            //console.log(currButton);
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currButton.css('text-align',$(this).attr("rel"));
        });

        

		//class
        $(".button-config").delegate(".dropdown-menu a", "click", function (e) {
            //console.log(currButton);
            e.preventDefault();
            var t = $(this).parent();
            //console.log(t);
            var n = currButton;
            var r = "";
            t.find("a").each(function () {
                r += $(this).attr("rel") + " ";
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            n.removeClass(r);
            n.addClass($(this).attr("rel"));
        });



    });
</script>