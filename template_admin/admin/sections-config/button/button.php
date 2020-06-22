<div class="sidebar-nav-margin-input button-config form-inline">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#button-config-attribute" aria-controls="button-config-attribute" role="tab"
            data-toggle="tab">
                属性
            </a>
        </li>
        <li role="presentation">
            <a href="#button-config-txt" aria-controls="button-config-txt" role="tab" data-toggle="tab">
                文字
            </a>
        </li>
		<li role="presentation">
            <a href="#button-config-position" aria-controls="button-config-position" role="tab" data-toggle="tab">
                定位
            </a>
        </li>
        <li role="presentation">
            <a href="#button-config-margin" aria-controls="button-config-margin" role="tab" data-toggle="tab">
                边距
            </a>
        </li>
        <li role="presentation">
            <a href="#button-config-border" aria-controls="button-config-border" role="tab" data-toggle="tab">
                边框
            </a>
        </li>
        
        <li role="presentation">
            <a href="#button-config-background" aria-controls="button-config-background" role="tab"
            data-toggle="tab">
                背景
            </a>
        </li>
        <li role="presentation">
            <a href="#button-config-url" aria-controls="button-config-url" role="tab" data-toggle="tab">
                链接
            </a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- 属性 -->
        <div role="tabpanel" class="tab-pane active" id="button-config-attribute">
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                Display
            </h5>
            <div class="button-display">
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
            <div class="blank30">
            </div>
            <h5 class="tab_1_h5">
                按钮大小
            </h5>
            <div class="row">
                <div class="col-md-6">
                    宽：
                    <input type="input" name="width" id="width" value="" class="config">
                    PX
                </div>
                <div class="col-md-6">
                    高：
                    <input type="input" name="height" id="height" value="0" class="config">
                    PX
                </div>
            </div>
        </div>
        <!-- 属性 -->
        <!-- 文字 -->
        <div role="tabpanel" class="tab-pane" id="button-config-txt">
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
            <!-- <h5 class="tab_1_h5">
            垂直对齐
            </h5>
            <div class="dropdown-menu div-text-typesetting">
            <a href="#" rel="" title="默认">
            None
            </a>
            &nbsp;
            <a href="#" rel="top" title="居上">
            Top
            </a>
            &nbsp;
            <a href="#" rel="middle" title="居中">
            Middle
            </a>
            &nbsp;
            <a href="#" rel="bottom" title="居下">
            Bottom
            </a>
            &nbsp;
            </div> -->
            <h5 class="tab_1_h5">
                文字大小
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
                文字颜色
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
        <div role="tabpanel" class="tab-pane" id="button-config-position">
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                浮动
            </h5>
            <div class="button-float">
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
            <div class="div-text-typesetting button-position">
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
        <div role="tabpanel" class="tab-pane" id="button-config-margin">
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
        <div role="tabpanel" class="tab-pane" id="button-config-border">
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                边框样式
            </h5>
			
            <div class="button-border-style">
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
            <div class="blank30">
            </div>
            <h5 class="tab_1_h5">
                按钮圆角
            </h5>
            圆角：
            <input type="input" name="border-radius" id="border-radius" value="" class="config">
            PX
           
        </div>
        <!-- 边框 -->
        
        <!-- 背景 -->
        <div role="tabpanel" class="tab-pane" id="button-config-background">
            <div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                背景色：
            </h5>
            <div class="input-group" style="width: 200px" id="color_bg_btn">
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
            <div class="blank30">
            </div>
            <h5 class="tab_1_h5">
                背景图：
            </h5>
            <input id="bgurl" type="file" data-preview-file-type="text">
            <!-- <button id="btn_clsBgimg">移除背景图</button> -->
            <script>
                $(function() {
                    $(".button-config #bgurl").fileinput({
                        uploadUrl: '<?php echo url('tool / uploadimage3 ',false);?>',
                        // you must set a valid URL here else you will get an error
                        allowedFileExtensions: ['jpg', 'png', 'gif'],
                        maxFileSize: <?php echo intval(config::get('upload_max_filesize'));?> * 1024,
                        language: 'zh',
                        maxFilesNum: 1,
                        maxFileCount: 1,
                        showPreview: false,
                        showCaption: false,
                        showUploadedThumbs: false
                    }).on('fileerror',
                    function(event, data, msg) {
                        console.log(data.id);
                        console.log(data.index);
                        console.log(data.file);
                        console.log(data.reader);
                        console.log(data.files);
                        // get message
                        alert(msg);
                    }).on('fileuploaded',
                    function(event, data, previewId, index) {
                        response = data.response;
                        if (response.file_data.code == '0') {
                            console.log(response.file_data.name);
                            currButton.css('background-image', 'url(' + response.file_data.name + ')');
                        } else {
                            alert(response.file_data.msg);
                        }
                        console.log(response);
                    }).on('filecleared',
                    function(event) {
                        currButton.css('background-image', '');
                    });;

                });
            </script>
        </div>
        <!-- 背景 -->
        <!-- 链接 -->
        <div role="tabpanel" class="tab-pane" id="button-config-url">
            <div class="blank20">
            </div>
            链接文字：
            <input type="input" name="text" id="text" value="默认" class="set_val" style="width:440px;">
            <div class="blank20">
            </div>
            链接地址：
            <input type="input" name="href" id="href" value="http://" class="set_attr"
            style="width:440px;">
        </div>
        <!-- 链接 -->
    </div>
</div>