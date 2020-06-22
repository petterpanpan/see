<div class="sidebar-nav-margin-input div-config form-inline">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#div-config-attribute" aria-controls="div-config-attribute" role="tab" data-toggle="tab">
                属性
            </a>
        </li>
        <li role="presentation">
            <a href="#div-config-txt" aria-controls="div-config-txt" role="tab" data-toggle="tab">
                文字
            </a>
        </li>
        <li role="presentation">
            <a href="#div-config-position" aria-controls="div-config-position" role="tab" data-toggle="tab">
                定位
            </a>
        </li>
        <li role="presentation">
            <a href="#div-config-margin" aria-controls="div-config-margin" role="tab" data-toggle="tab">
                边距
            </a>
        </li>
        <li role="presentation">
            <a href="#div-config-border" aria-controls="div-config-border" role="tab" data-toggle="tab">
                边框
            </a>
        </li>
       
        <li role="presentation">
            <a href="#div-config-background" aria-controls="div-config-background" role="tab" data-toggle="tab">
                背景
            </a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- 属性 -->
        <div role="tabpanel" class="tab-pane active" id="div-config-attribute">
            <div class="blank20">
            </div>
            CSS类:
            <input type="input" name="class" id="class" value="" class="config-attr form-control">
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
                自动获取值，如无需修改，只可编辑layout_！
            </div>
            <div class="blank20">
            </div>
            <div class="row">
                <div class="col-md-5">
                    宽：
                    <input type="input" name="width" id="width" value="" class="config">
                    PX
                </div>
                <div class="col-md-5">
                    高：
                    <input type="input" name="height" id="height" value="0" class="config">
                    PX
                </div>
                <div class="col-md-2">
                    <button name="btn_clsWidthHeight" id="btn_clsWidthHeight" class="btn btn-default">
                        <i class="glyphicon-remove glyphicon" title="清空">
                        </i>
                    </button>
                </div>
            </div>
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
                自动获取值，如无需要请勿修改！
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                Display
            </h5>
            <div class="div-display">
                <a href="#" rel="" title="无">
                    clear
                </a>
                &nbsp;
                <a href="#" rel="none" title="此元素不会被显示。">
                    none
                </a>
                &nbsp;
                <a href="#" rel="block" title="此元素将显示为块级元素，此元素前后会带有换行符。">
                    block
                </a>
                &nbsp;
                <a href="#" rel="inline" title="默认。此元素会被显示为内联元素，元素前后没有换行符。">
                    inline
                </a>
                &nbsp;
                <a href="#" rel="inline-block" title="行内块元素。">
                    inline-block
                </a>
                &nbsp;
                <a href="#" rel="list-item" title="此元素会作为列表显示。">
                    list-item
                </a>
                &nbsp;
                <a href="#" rel="run-in" title="此元素会根据上下文作为块级元素或内联元素显示。">
                    run-in
                </a>
                &nbsp;
                <a href="#" rel="table" title="此元素会作为块级表格来显示（类似 <table>），表格前后带有换行符。">
                    table
                </a>
                &nbsp;
                <a href="#" rel="inline-table" title="此元素会作为内联表格来显示（类似 <table>），表格前后没有换行符。">
                    inline-table
                </a>
                &nbsp;
                <a href="#" rel="inherit" title="规定应该从父元素继承 display 属性的值。">
                    inherit
                </a>
                &nbsp;
            </div>
        </div>
        <!-- 属性 -->
        <!-- 文字 -->
        <div role="tabpanel" class="tab-pane" id="div-config-txt">
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                水平对齐
            </h5>
            <div class="dropdown-menu div-text-typesetting">
                <a href="#" rel="" title="默认">
                    <i class="glyphicon glyphicon-align-justify">
                    </i>
                </a>
                &nbsp;
                <a href="#" rel="text-left" title="居左">
                    <i class="glyphicon glyphicon-align-left">
                    </i>
                </a>
                &nbsp;
                <a href="#" rel="text-center" title="居中">
                    <i class="glyphicon glyphicon-align-center">
                    </i>
                </a>
                &nbsp;
                <a href="#" rel="text-right" title="居右">
                    <i class="glyphicon glyphicon-align-right">
                    </i>
                </a>

                &nbsp; &nbsp; &nbsp;
            </div>
			<!-- <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                垂直对齐
            </h5>
			<div class="dropdown-menu div-text-typesetting">
				<a href="#" rel="" title="默认">
                    <i class="glyphicon glyphicon-align-justify">
                    </i>
                </a>
				&nbsp;
                <a href="#" rel="table-cell" title="垂直居右">
                    <i class="glyphicon glyphicon-resize-vertical">
                    </i>
                </a>
			</div> -->
            <div class="dropdown-menu div-text-typesetting">
                <a href="#" rel="" title="默认">
                    <i class="glyphicon glyphicon-font">
                    </i>
                </a>
                &nbsp;
                <a href="#" rel="text-bold" title="加粗">
                    <i class="glyphicon glyphicon-bold">
                    </i>
                </a>
                &nbsp;
                <a href="#" rel="text-italic" title="斜体">
                    <i class="glyphicon glyphicon-italic">
                    </i>
                </a>
                &nbsp;
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                字体大小
            </h5>
            <input type="input" name="font-size" id="font-size" value="" class="config">
            PX
			<button id="btn_clsFontZize" class="btn btn-default">
                        <i class="glyphicon-remove glyphicon" title="删除">
                        </i>
                    </button>
			
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                字体颜色
            </h5>
            <div class="input-group" style="width: 200px" id="color_font">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-default color_addion">
                        <i class="glyphicon glyphicon-adjust">
                        </i>
                    </button>
                    <button id="btn_clsFontColor" class="btn btn-default">
                        <i class="glyphicon-remove glyphicon" title="删除">
                        </i>
                    </button>
                </div>
            </div>
        </div>
        <!-- 文字 -->
        <!-- 定位 -->
        <div role="tabpanel" class="tab-pane" id="div-config-position">
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                浮动
            </h5>
            <div class="div-float">
                <a href="#" rel="none" title="默认">
                    默认
                </a>
      
                &nbsp;
                <a href="#" rel="left" title="左">
                    居左
                </a>
                &nbsp;
                <a href="#" rel="right" title="绝对">
                    居右
                </a>
                &nbsp;
                <a href="#" rel="inherit" title="继承">
                    继承
                </a>
                &nbsp;
            </div>
			<div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                清除
            </h5>
            <div class="div-clear">
                <a href="#" rel="none" title="默认">
                    默认
                </a>
                &nbsp;
                <a href="#" rel="both" title="清除">
                    清除
                </a>
                &nbsp;
                <a href="#" rel="left" title="左">
                    清左
                </a>
                &nbsp;
                <a href="#" rel="right" title="绝对">
                    清右
                </a>
                &nbsp;
                <a href="#" rel="inherit" title="继承">
                    继承
                </a>
                &nbsp;
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                定位
            </h5>
            <div class="div-text-typesetting div-position">
                <a href="#" rel="static" title="默认">
                    static
                </a>
                &nbsp;
                <a href="#" rel="absolute" title="绝对">
                    absolute
                </a>
                &nbsp;
                <a href="#" rel="fixed" title="绝对">
                    fixed
                </a>
                &nbsp;
                <a href="#" rel="relative" title="相对">
                    relative
                </a>
                &nbsp;
                <a href="#" rel="inherit" title="继承">
                    inherit
                </a>
                &nbsp;
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                层级
            </h5>
            <div class="blank10">
            </div>
            Z-index：
            <input type="input" name="z-index" id="z-index" value="" class="config">
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                位置
            </h5>
            <div class="row">
                <div class="col-md-6">
                    上：
                    <input type="input" name="top" id="top" value="0" class="config">
                    PX
                </div>
                <div class="col-md-6">
                    下：
                    <input type="input" name="bottom" id="bottom" value="0" class="config">
                    PX
                </div>
                <div class="clearfix blank10">
                </div>
                <div class="col-md-6">
                    左：
                    <input type="input" name="left" id="left" value="0" class="config">
                    PX
                </div>
                <div class="col-md-6">
                    右：
                    <input type="input" name="right" id="right" value="0" class="config">
                    PX
                </div>
            </div>
        </div>
        <!-- 定位 -->
        <!-- 边距 -->
        <div role="tabpanel" class="tab-pane" id="div-config-margin">
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                内边距
            </h5>
            <div class="row">
                <div class="col-md-6">
                    上：
                    <input type="input" name="padding-top" id="padding-top" value="0" class="config">
                    PX
                </div>
                <div class="col-md-6">
                    下：
                    <input type="input" name="padding-bottom" id="padding-bottom" value="0"
                    class="config">
                    PX
                </div>
                <div class="clearfix blank10">
                </div>
                <div class="col-md-6">
                    左：
                    <input type="input" name="padding-left" id="padding-left" value="0" class="config">
                    PX
                </div>
                <div class="col-md-6">
                    右：
                    <input type="input" name="padding-right" id="padding-right" value="0"
                    class="config">
                    PX
                </div>
            </div>
            <div class="blank30">
            </div>
            <h5 class="tab_1_h5">
                外边距
            </h5>
            <div class="row">
                <div class="col-md-6">
                    上：
                    <input type="input" name="margin-top" id="margin-top" value="0" class="config">
                    PX
                </div>
                <div class="col-md-6">
                    下：
                    <input type="input" name="margin-bottom" id="margin-bottom" value="0"
                    class="config">
                    PX
                </div>
                <div class="clearfix blank10">
                </div>
                <div class="col-md-6">
                    左：
                    <input type="input" name="margin-left" id="margin-left" value="0" class="config">
                    PX
                </div>
                <div class="col-md-6">
                    右：
                    <input type="input" name="margin-right" id="margin-right" value="0" class="config">
                    PX
                </div>
            </div>
        </div>
        <!-- 边距 -->
        <!-- 边框 -->
        <div role="tabpanel" class="tab-pane" id="div-config-border">
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                边框样式
            </h5>
            <div class="div-border-style">
                <a href="#" rel="none" title="无">
                    none
                </a>
                <a href="#" rel="hidden" title="隐藏">
                    hidden
                </a>
                &nbsp;
                <a href="#" rel="dotted" title="点状虚线">
                    dotted
                </a>
                &nbsp;
                <a href="#" rel="dashed" title="虚线">
                    dashed
                </a>
                &nbsp;
                <a href="#" rel="solid" title="实线">
                    solid
                </a>
                &nbsp;
                <a href="#" rel="double" title="双线">
                    double
                </a>
                &nbsp;
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                边框颜色
            </h5>
            <div class="row">
                <div class="col-md-6">
                    上：
                  
					<div class="input-group" style="width: 200px" id="border-top-color">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-default color_addion">
                        <i class="glyphicon glyphicon-adjust">
                        </i>
                    </button>
                    <button id="btn_border-top-color" class="btn btn-default">
                        <i class="glyphicon-remove glyphicon" title="删除">
                        </i>
                    </button>
                </div>
            </div>
                </div>
                <div class="col-md-6">
                    右：
                    <div class="input-group" style="width: 200px" id="border-right-color">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-default color_addion">
                        <i class="glyphicon glyphicon-adjust">
                        </i>
                    </button>
                    <button id="btn_border-right-color" class="btn btn-default">
                        <i class="glyphicon-remove glyphicon" title="删除">
                        </i>
                    </button>
                </div>
            </div>
                </div>
                <div class="clearfix blank10">
                </div>
                <div class="col-md-6">
                    下：
                    <div class="input-group" style="width: 200px" id="border-bottom-color">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-default color_addion">
                        <i class="glyphicon glyphicon-adjust">
                        </i>
                    </button>
                    <button id="btn_border-bottom-color" class="btn btn-default">
                        <i class="glyphicon-remove glyphicon" title="删除">
                        </i>
                    </button>
                </div>
            </div>
                </div>
                <div class="col-md-6">
                    左：
                    <div class="input-group" style="width: 200px" id="border-left-color">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-default color_addion">
                        <i class="glyphicon glyphicon-adjust">
                        </i>
                    </button>
                    <button id="btn_border-left-color" class="btn btn-default">
                        <i class="glyphicon-remove glyphicon" title="删除">
                        </i>
                    </button>
                </div>
            </div>
                </div>
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                边框宽度
            </h5>
            <div class="row">
                <div class="col-md-6">
                    上：
                    <input type="input" name="border-top-width" id="border-width-top" value="0"
                    class="config">PX
                </div>
                <div class="col-md-6">
                    下：
                    <input type="input" name="border-bottom-width" id="border-width-bottom"
                    value="0" class="config">PX
                </div>
                <div class="clearfix blank10">
                </div>
                <div class="col-md-6">
                    左：
                    <input type="input" name="border-left-width" id="border-width-left" value="0"
                    class="config">PX
                </div>
                <div class="col-md-6">
                    右：
                    <input type="input" name="border-right-width" id="border-width-right"
                    value="0" class="config">PX
                </div>
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                边框圆角
            </h5>
            <input type="input" name="border-radius" id="border-radius" value="" class="config">
            PX
        </div>
        <!-- 边框 -->
        
        <!-- 背景 -->
        <div role="tabpanel" class="tab-pane" id="div-config-background">
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                背景色：
            </h5>
            <div class="input-group" style="width: 200px" id="color_bg">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-default color_addion">
                        <i class="glyphicon glyphicon-adjust">
                        </i>
                    </button>
                    <button id="btn_clsBgColor" class="btn btn-default">
                        <i class="glyphicon-remove glyphicon" title="删除">
                        </i>
                    </button>
                </div>
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                位置：
            </h5>
            <div class="div-background-position">
                <a href="#" rel="" title="默认">
                    默认
                </a>
                &nbsp;
                <a href="#" rel="left" title="居左">
                    居左
                </a>
                &nbsp;
                <a href="#" rel="center" title="居中">
                    居中
                </a>
                &nbsp;
                <a href="#" rel="right" title="居右">
                    居右
                </a>
                &nbsp;
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                背景固定：
            </h5>
            <div class="div-background-attachment">
                <a href="#" rel="" title="默认">
                    默认
                </a>
                &nbsp;
                <a href="#" rel="fixed" title="固定">
                    固定
                </a>
                &nbsp;
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                平铺：
            </h5>
            <div class="div-background-repeat">
                <a href="#" rel="" title="默认">
                    默认
                </a>
                &nbsp;
                <a href="#" rel="no-repeat" title="不重复">
                    不平铺
                </a>
                &nbsp;
                <a href="#" rel="repeat-x" title="水平重复">
                    水平平铺
                </a>
                &nbsp;
                <a href="#" rel="repeat-y" title="垂直重复">
                    垂直平铺
                </a>
                &nbsp;
                <a href="#" rel="repeat" title="平铺">
                    平铺
                </a>
                &nbsp;
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                尺寸：
            </h5>
            <div class="div-background-size">
                <a href="#" rel="" title="默认">
                    默认
                </a>
                &nbsp;
                <a href="#" rel="auto" title="自动">
                    自动
                </a>
                &nbsp;
                <a href="#" rel="cover" title="全屏">
                    全屏
                </a>
                &nbsp;
            </div>
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                背景图：
            </h5>
				
				<button id="btn_clsBgurl" class="pull-left btn btn-default">
                    <i class="glyphicon-remove glyphicon" title="删除"></i>
                </button>
				<input id="bgurl" type="file" data-preview-file-type="text" class="pull-left">
        </div>
		<!-- 背景 -->
    </div>
</div>

<!-- 属性 -->

<script type="text/javascript">
    var currLayoutDiv;
    $(document).ready(function () {
        $('body.edit .visual-right').on("click", "[data-target='#div-config']", function (e) {
            e.preventDefault();
            currLayoutDiv = $(this).parent().find('.view:first>div,.view:first>audio,.view:first>iframe');
            $('.div-config .div-position a').removeClass("on");
            $('.div-config .div-position').find("[rel="+currLayoutDiv.css('position')+"]").addClass("on");

			$('.div-config .div-float a').removeClass("on");
            $('.div-config .div-float').find("[rel="+currLayoutDiv.css('float')+"]").addClass("on");

			$('.div-config .div-clear a').removeClass("on");
            $('.div-config .div-clear').find("[rel="+currLayoutDiv.css('clear')+"]").addClass("on");

			$('.div-config .div-border-style a').removeClass("on");
            $('.div-config .div-border-style').find("[rel="+currLayoutDiv.css('border-style')+"]").addClass("on");

			$('.div-config .div-background-repeat a').removeClass("on");
            $('.div-config .div-background-repeat').find("[rel="+currLayoutDiv.css('background-repeat')+"]").addClass("on");

			$('.div-config .div-background-size a').removeClass("on");
            $('.div-config .div-background-size').find("[rel="+currLayoutDiv.css('background-size')+"]").addClass("on");

			$('.div-config .div-background-attachment a').removeClass("on");
            $('.div-config .div-background-attachment').find("[rel="+currLayoutDiv.css('background-attachment')+"]").addClass("on");

			$('.div-config .div-display a').removeClass("on");
			$('.div-config .div-display').find("[rel="+currLayoutDiv.css('display')+"]").addClass("on");

			$('.div-config #width').val(parseInt(currLayoutDiv.css('width')));
            $('.div-config #height').val(parseInt(currLayoutDiv.css('height')));

            $('.div-config #class').val(currLayoutDiv.attr('class'));

			

            $('.div-config #padding-top').val(parseInt(currLayoutDiv.css('padding-top')));
            $('.div-config #padding-bottom').val(parseInt(currLayoutDiv.css('padding-bottom')));
            $('.div-config #padding-left').val(parseInt(currLayoutDiv.css('padding-left')));
            $('.div-config #padding-right').val(parseInt(currLayoutDiv.css('padding-right')));
			
            $('.div-config #margin-top').val(parseInt(currLayoutDiv.css('margin-top')));
            $('.div-config #margin-bottom').val(parseInt(currLayoutDiv.css('margin-bottom')));
            $('.div-config #margin-left').val(parseInt(currLayoutDiv.css('margin-left')));
            $('.div-config #margin-right').val(parseInt(currLayoutDiv.css('margin-right')));

			$('.div-config #border-top-width').val(parseInt(currLayoutDiv.css('border-top-width')));
            $('.div-config #border-right-width').val(parseInt(currLayoutDiv.css('border-right-width')));
            $('.div-config #border-bottom-width').val(parseInt(currLayoutDiv.css('border-bottom-width')));
            $('.div-config #border-left-width').val(parseInt(currLayoutDiv.css('border-left-width')));
			
			//定位
            _top = isNaN(parseInt(currLayoutDiv.css('top'))) ? '' : parseInt(currLayoutDiv.css('top'));
            _bottom = isNaN(parseInt(currLayoutDiv.css('bottom'))) ? '' : parseInt(currLayoutDiv.css('bottom'));
            _left = isNaN(parseInt(currLayoutDiv.css('left'))) ? '' : parseInt(currLayoutDiv.css('left'));
            _right = isNaN(parseInt(currLayoutDiv.css('right'))) ? '' : parseInt(currLayoutDiv.css('right'));
			$('.div-config #top').val(_top);
            $('.div-config #bottom').val(_bottom);
            $('.div-config #left').val(_left);
            $('.div-config #right').val(_right);





            $('.div-config #font-size input').val(parseInt(currLayoutDiv.css('font-size')));
			$('.div-config #btn_clsFontZize').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('font-size','');
            });
			$('.div-config #z-index').val(currLayoutDiv.zIndex());

            $('.div-config #color_bg').val(currLayoutDiv.css('background-color')!='rgba(0, 0, 0, 0)'?currLayoutDiv.css('background-color'):'');
            $('.div-config #color_font input').val(currLayoutDiv.css('color')!='rgba(0, 0, 0, 0)'?currLayoutDiv.css('color'):'');

			//边框颜色
			$('.div-config #border-top-color input').val(currLayoutDiv.css('border-top-color')!='rgba(0, 0, 0, 0)'?currLayoutDiv.css('border-top-color'):'');
			$('.div-config #border-right-color input').val(currLayoutDiv.css('border-right-color')!='rgba(0, 0, 0, 0)'?currLayoutDiv.css('border-right-color'):'');
			$('.div-config #border-bottom-color input').val(currLayoutDiv.css('border-bottom-color')!='rgba(0, 0, 0, 0)'?currLayoutDiv.css('border-bottom-color'):'');
			$('.div-config #border-left-color input').val(currLayoutDiv.css('border-left-color')!='rgba(0, 0, 0, 0)'?currLayoutDiv.css('border-left-color'):'');


            //DIV 背景颜色
			$('.div-config #color_bg').colorpicker({
            component:'.color_addion'
			});

			$('.div-config #color_bg').on('changeColor', function(event) {
				currLayoutDiv.css('background-color', event.color.toString());
			});


            $('.div-config #btn_clsBgColor').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('background-color','');
            });


			//DIV 边框上颜色
            $('.div-config #border-top-color').colorpicker({
                component:'.color_addion',
                color: currLayoutDiv.css('border-top-color')
            });
            $('.div-config #border-top-color').on('changeColor', function(event) {
                //console.log(currLayoutDiv);
                //console.log(event.color);
                currLayoutDiv.css('border-top-color', event.color.toString());
            });
            $('.div-config #btn_border-top-color').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('border-top-color','');
            });

			//DIV 边框右颜色
            $('.div-config #border-right-color').colorpicker({
                component:'.color_addion',
                color: currLayoutDiv.css('border-right-color')
            });
            $('.div-config #border-right-color').on('changeColor', function(event) {
                //console.log(currLayoutDiv);
                //console.log(event.color);
                currLayoutDiv.css('border-right-color', event.color.toString());
            });
            $('.div-config #btn_border-right-color').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('border-right-color','');
            });

			//DIV 边框下颜色
            $('.div-config #border-bottom-color').colorpicker({
                component:'.color_addion',
                color: currLayoutDiv.css('border-bottom-color')
            });
            $('.div-config #border-bottom-color').on('changeColor', function(event) {
                //console.log(currLayoutDiv);
                //console.log(event.color);
                currLayoutDiv.css('border-bottom-color', event.color.toString());
            });
            $('.div-config #btn_border-bottom-color').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('border-bottom-color','');
            });

			//DIV 边框左颜色
            $('.div-config #border-left-color').colorpicker({
                component:'.color_addion',
                color: currLayoutDiv.css('border-left-color')
            });
            $('.div-config #border-left-color').on('changeColor', function(event) {
                //console.log(currLayoutDiv);
                //console.log(event.color);
                currLayoutDiv.css('border-left-color', event.color.toString());
            });
            $('.div-config #btn_border-left-color').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('border-left-color','');
            });


            $('.div-config #color_font').colorpicker({
                component:'.color_addion',
                color: currLayoutDiv.css('color')
            });
            $('.div-config #color_font').on('changeColor', function(event) {
                currLayoutDiv.css('color', event.color.toString());
            });
            $('.div-config #btn_clsFontColor').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('color','');
            });
	
			

            //背景图
            $(".div-config #bgurl").fileinput({
                uploadUrl: '<?php echo url('tool/uploadimage3 ',false);?>',
                // you must set a valid URL here else you will get an error
                allowedFileExtensions: ['jpg', 'png', 'gif'],
                maxFileSize: <?php echo intval(config::get('upload_max_filesize'));?> * 1024,
                language: 'zh',
                maxFilesNum: 1,
                maxFileCount: 1,
                showPreview: false,
                showCaption: false,
                showUploadedThumbs: false
            }).on('fileerror',function(event, data, msg) {
                console.log(data.id);
                console.log(data.index);
                console.log(data.file);
                console.log(data.reader);
                console.log(data.files);
                // get message
                alert(msg);
            }).on('fileuploaded',function(event, data, previewId, index) {
                response = data.response;
                if (response.file_data.code == '0') {
                    //console.log(response.file_data.name);
                    currLayoutDiv.css('background-image', 'url(' + response.file_data.name + ')');
                } else {
                    alert(response.file_data.msg);
                }
                //console.log(response);
            }).on('filecleared', function (event) {
                currLayoutDiv.css('background-image', 'url(' + response.file_data.name + ')');
            });
            //$(".div-config #bgurl").fileinput('reset');
            //console.log($(".div-config #bgurl"));

            //currLayoutDiv.css('background-color','#ff0000');
            //console.log(currLayoutDiv);
        });


		$('.div-config #btn_clsBgurl').on('click', function(event) {
                $(this).parent().parent().find('input').val('');
                currLayoutDiv.css('background-image','');
            });


        //width and height
		$('.div-config #btn_clswidth').click(function () {
            $('.div-config #width').val('');
            currLayoutDiv.css('width','');
        });
        $('.div-config #btn_clsheight').click(function () {
            $('.div-config #height').val('');
            currLayoutDiv.css('height','');
        });
        $('.div-config #btn_clsWidthHeight').on('click', function(event) {
            $('.div-config #width,.div-config #height').val("");
        });

        //text color
        $('#setfontColor').colorpicker({
            component:'.color_addion'
        });
        $('#setfontColor').on('changeColor', function(event) {
            document.execCommand("ForeColor",false,event.color.toString())
        });

        //attr(css)
        $('.div-config .config').keyup(function(){
            currLayoutDiv.css($(this).attr('name'), $(this).val() + 'px');
        });

        //attr(class)
        $('.div-config .config-attr').blur(function(){
            currLayoutDiv.attr($(this).attr('name'), $(this).val());
        });

        //z-index
        $('.div-config #z-index').keyup(function(){
            currLayoutDiv.css('z-index', $(this).val());
        });


        //class
        $(".div-config").delegate(".dropdown-menu a", "click", function (e) {
            //console.log(currLayoutDiv);
            e.preventDefault();
            var t = $(this).parent();
            //console.log(t);
            var n = currLayoutDiv;
            var r = "";
            t.find("a").each(function () {
                r += $(this).attr("rel") + " ";
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            n.removeClass(r);
            n.addClass($(this).attr("rel"));
        });

        //position
        $(".div-config").delegate(".div-position a", "click", function (e) {
            //console.log(currLayoutDiv);
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currLayoutDiv.css('position',$(this).attr("rel"));
        });

		
		//border-style
		$(".div-config").delegate(".div-border-style a", "click", function (e) {
            //console.log(currLayoutDiv);
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currLayoutDiv.css('border-style',$(this).attr("rel"));
        });


        //float
		$(".div-config").delegate(".div-float a", "click", function (e) {
            //console.log(currLayoutDiv);
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currLayoutDiv.css('float',$(this).attr("rel"));
        });

		//clear
		$(".div-config").delegate(".div-clear a", "click", function (e) {
            //console.log(currLayoutDiv);
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currLayoutDiv.css('clear',$(this).attr("rel"));
        });

		//display
		$(".div-config").delegate(".div-display a", "click", function (e) {
            //console.log(currLayoutDiv);
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currLayoutDiv.css('display',$(this).attr("rel"));
        });

		//background position
		$(".div-config").delegate(".div-background-position a", "click", function (e) {
            //console.log(currLayoutDiv);
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currLayoutDiv.css('background-position',$(this).attr("rel"));
        });

		//background size
		$(".div-config").delegate(".div-background-size a", "click", function (e) {
            //console.log(currLayoutDiv);
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currLayoutDiv.css('background-size',$(this).attr("rel"));
        });

		//background repeat
		$(".div-config").delegate(".div-background-repeat a", "click", function (e) {
            //console.log(currLayoutDiv);
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currLayoutDiv.css('background-repeat',$(this).attr("rel"));
        });

        //background attachment
		$(".div-config").delegate(".div-background-attachment a", "click", function (e) {
            //console.log(currLayoutDiv);
            e.preventDefault();
            var t = $(this).parent();
            t.find("a").each(function () {
                $(this).removeClass("on");
            });
            $(this).addClass("on");
            currLayoutDiv.css('background-attachment',$(this).attr("rel"));
        });
    });
</script>
<!-- 属性 -->

