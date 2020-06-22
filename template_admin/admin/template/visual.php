<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>
        可视化编辑 - <?php echo get('sitename'); ?>
    </title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

	<!-- External CSS -->

    <link rel="stylesheet" href="{$skin_admin_path}/css/jquery.mloading.css">
    <link rel="stylesheet" href="{$skin_admin_path}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$skin_path}/css/style.css" />
	<link rel="stylesheet" href="{$skin_path}/js/slide/bootstrap-touch-slider.css">
	<link rel="stylesheet" href="{$skin_path}/css/clear.css" />
	<link rel="stylesheet" href="{$skin_path}/css/add.css">
    <link rel="stylesheet" href="{$skin_admin_path}/css/visual.css">
	
<!-- JavaScript -->
    <script type="text/javascript" src="{$base_url}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{$base_url}/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{$base_url}/js/jquery.ui.touch-punch.min.js"></script>
      <script type="text/javascript" src="{$skin_admin_path}/js/jquery.mloading.js"></script>
    <script type="text/javascript" src="{$skin_admin_path}/js/jquery.htmlclean.js"></script>
    <script src="{$base_url}/js/colorpicker/js/bootstrap-colorpicker.js" type="text/javascript"></script>
    <link rel="stylesheet" href="{$base_url}/js/colorpicker/css/bootstrap-colorpicker.css" type="text/css"/>
<script type="text/javascript">
window.onerror=function(){return true;};
window.onload=function()
{
for(var ii=0; ii<document.links.length; ii++)
document.links$[ii].onfocus=function(){this.blur()}
}
</script>
    <script type="text/javascript" src="{$skin_admin_path}/js/visual.js"></script>

	<!-- 上传组件 -->
	<script src="{$base_url}/js/fileinput/js/fileinput.js" type="text/javascript">
        </script>
        <script src="{$base_url}/js/fileinput/js/locales/zh.js" type="text/javascript">
        </script>
        <link href="{$base_url}/js/fileinput/css/fileinput.css" media="all" rel="stylesheet"
        type="text/css" />

 <!-- 加载进度条 -->
<script src="{$skin_admin_path}/js/pace.min.js"></script>  

    <script>
        {
            function getElementsByClass(key) {
                var arr = new Array();
                var tags = document.getElementsByTagName("*");
                for (var i = 0; i < tags.length; i++) {
                    if (tags[i].className.match(new RegExp('(\\s|^)' + key + '(\\s|$)'))) {
                        arr.push(tags[i]);
                    }
                }
                return arr;
            }

            
        }
    </script>


    <!-- 上下移动 -->
    <script type="text/javascript">
        $(function () {
            $(document).on('click', '.div-down', null, function () {
                var parentsDiv = $(this).parents(".position-move");
                var next = parentsDiv.next();
                if (next.html() != undefined) {
                    //next.after(parentsDiv);
                    next.fadeOut("slow", function () {
                        $(this).after(parentsDiv);
                    }).fadeIn();

                } else {
                    alert("到达最底部！");
                }
            });
			$(document).on('click', '.div-up', function () {
                var parentsDiv = $(this).parents(".position-move");
                var prev = parentsDiv.prev();
                if (prev.html() != undefined) {
                    //prev.before(parentsDiv);
                    prev.fadeOut("slow", function () {
                        $(this).before(parentsDiv);
                    }).fadeIn();
                } else {
                    alert("到达最顶部了");
                }
            });


        });
		
		$(window).bind('beforeunload',function(){
		return '请确认数据是否保存！';
		});

    </script>

	

</head>

<body class="edit">




    <div id="visual-left-btn" href="" class="">
        <i class="glyphicon glyphicon-align-justify"></i>
    </div>


<div class="container-fluid">
    <div class="visual-top">

        <ul id="menu-layoutit" class="pull-left">
            <li>
                <a class="logo" href="{$base_url}/index.php?admin_dir={get('admin_dir')}&site=default">
                    <img src="{$base_url}/images/logo.png" alt="logo">
                </a>
            </li>
            <li class="dropdown select-template">
                <div class="btn-group nav-operation">
                    <button type="button" class="btn btn-success" id="visual-select-template"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        选择：<?php echo $tempname; ?>
                    </button>
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                                    <span class="caret">
                                    </span>
                        <span class="sr-only">
                                        Toggle Dropdown
                                    </span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuDivider">

					<?php

if(session::get('ver') == 'corp') {
    ?>
                        <li>
                            <a href="<?php echo url('template/visual/tempname/top'); ?>">
                                全站页顶
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('template/visual/tempname/bottom'); ?>">
                                全站页底
                            </a>
                        </li>
                        <li role="separator" class="divider">
                        </li>
						    <?php
}
?>
                        <li>
                            <a href="<?php echo url('template/visual/tempname/index-index'); ?>">
                                网站首页
                            </a>
                        </li>
						<?php

if(session::get('ver') == 'corp') {
    ?>
                      <!--   <li role="separator" class="divider">
                        </li>
                        
						<li>
                            <a href="<?php echo url('template/visual/tempname/announ-show'); ?>">
                                公告页面
                            </a>
                        </li> -->
                        <li role="separator" class="divider">
                        </li>
						
                        
							<li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-submenu="">栏目模板 	<span class="caret"></span></a>
							<ul class="dropdown-menu">
							<?php 
                                    $listtpl =  front::$view->archive_tpl_list('archive/list');
                                    if(is_array($listtpl) && !empty($listtpl)){
                                        foreach($listtpl as $key => $tpl){ 
                                    ?>
                                    <li>
                                            <a href="<?php echo url('template/visual/tempname/'.$key); ?>">
                                                <?php echo $tpl;?>
                                            </a>
                                        </li>
                                    <?php
                                        }
                                    }
                                    ?>
						</ul>
							</li>

							<li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-submenu="">
                                内容模板	<span class="caret"></span>
                            </a>
							<ul class="dropdown-menu">
								<?php 
                                    $showtpl =  front::$view->archive_tpl_list('archive/show');
                                    if(is_array($showtpl) && !empty($showtpl)){
                                        foreach($showtpl as $key => $tpl){ 
                                    ?>
                                    <li>
                                            <a href="<?php echo url('template/visual/tempname/'.$key); ?>">
                                                <?php echo $tpl;?>
                                            </a>
                                        </li>
                                     <?php
                                        }
                                    }
                                    ?>
							</ul>
							</li>

							<li role="separator" class="divider">
                        </li>
                        <!-- <li>
                            <a href="<?php echo url('template/visual/tempname/guestbook-index'); ?>">
                                留言页面
                            </a>
                        </li>
                        <li role="separator" class="divider">
                        </li>
                        <li>
                            <a href="<?php echo url('template/visual/tempname/myform-myform'); ?>">
                                自定义表单
                            </a>
                        </li>
                        <li role="separator" class="divider">
                        </li>
                        <li>
                            <a href="<?php echo url('template/visual/tempname/type-index'); ?>">
                                分类页面
                            </a>
                        </li>
                        <li role="separator" class="divider">
                        </li>
                        <li>
                            <a href="<?php echo url('template/visual/tempname/special-index'); ?>">
                                专题页面
                            </a>
                        </li> -->
						 <?php
}
?>
                    </ul>
                </div>

            </li>
            <li class="btn-group visual-top-function">
                     <?php
                if(session::get('ver') == 'corp') {
                    ?>
                        <button class="btn btn-primary" href="#" data-target="#template-add" role="button"
                            data-toggle="modal">
                        新建
                    </button>
                    <button class="btn btn-primary" href="#" data-target="#template-copy" role="button"
                            data-toggle="modal">
                        复制
                    </button>
                    <?php
                }
                ?>
					<button type="button" class="btn btn-primary" id="button-download-modal"
                            data-target="#downloadModal" role="button" data-toggle="modal">

                        检查
                    </button>

<button class="btn btn-primary" href="#clear" id="clear">
                                清空
                            </button>

							<button type="button" class="btn btn-primary" id="gridlines">
							网格线
                            </button>

            </li>


<li>&nbsp;</li>
            <li>
                <a href="#undo" id="undo"><i
                                class="glyphicon glyphicon-repeat"></i> 撤销
                    </a>
					&nbsp;&nbsp;
                    <a href="#redo" id="redo"> 重做 <i
                                class="glyphicon glyphicon-refresh"></i>
                    </a>
          
            </li>
          
          
        </ul>

<ul class='editControls' class="view">
			
							<div class='btn-group'>
							<a class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="字体">
                                    <i class='glyphicon glyphicon-font'></i> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu setfont font-size-dropdown">
                                    <li><a href="#" style="font-family: 微软雅黑;">微软雅黑</a></li>
                                    <li><a href="#" style="font-family: 楷体;">楷 体</a></li>
                                    <li><a href="#" style="font-family: 隶书;">隶 书</a></li>
                                </ul>
                            </div>
                            <div class='btn-group'>
                                <a  class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="字号">
                                    <i class='glyphicon glyphicon-text-size'></i> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu setfontSize font-size-dropdown">
                                    <li><a href="#" rel="1"><font size="1">1</font></a></li>
                                    <li><a href="#" rel="2"><font size="2">2</font></a></li>
                                    <li><a href="#" rel="3"><font size="3">3</font></a></li>
                                    <li><a href="#" rel="4"><font size="4">4</font></a></li>
                                    <li><a href="#" rel="5"><font size="5">5</font></a></li>
                                    <li><a href="#" rel="6"><font size="6">6</font></a></li>
                                    <li><a href="#" rel="7"><font size="7">7</font></a></li>
		
                                </ul>
                            </div>
                            <div class='btn-group'>
                                <a id="setfontColor" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false" title="颜色">
                                    <i class='glyphicon glyphicon-text-color'></i> <span class="caret"></span>
                                </a>
                            </div>
                                <div class='btn-group'>
								<a class='btn' data-role='bold' href='#' title="加粗"><strong>B</strong></a>
								<a class='btn' data-role='italic' href='#' title="斜体"><em><strong>I</strong></em></a>
								<a class='btn' data-role='underline' href='#' title="下划线"><u><strong>U</strong></u></a>
								<a class='btn' data-role='strikeThrough' href='#' title="中划线"><strike><strong>A</strong></strike></a>
								
								
							</div>
							<div class='btn-group'>
								<a class='btn' data-role='justifyLeft' href='#'><i class='glyphicon glyphicon-align-left' title="居左"></i></a>
								<a class='btn' data-role='justifyCenter' href='#'><i class='glyphicon glyphicon-align-center' title="居中"></i></a>
								<a class='btn' data-role='justifyRight' href='#'><i class='glyphicon glyphicon-align-right' title="居右"></i></a>
								<a class='btn' data-role='justifyFull' href='#'><i class='glyphicon glyphicon-align-justify' title="两端对齐"></i></a>
								<a class='btn' data-role='createLink' href='#'><i class='glyphicon glyphicon-link' title="链接"></i></a>
                                <a class='btn' data-role='unlink' href='#' title="删除链接"><i class="glyphicon-unlink"></i></a>
							</div>
							
						</ul>

						

        <ul class="pull-right navbar-right">
            <li class="visual-save btn-success">
                <a href="#" onClick="saveLayout();return false;">
                    保存
                </a>
            </li>
            <li class="visual-view btn-info">
                <a href="<?php echo url('index/index', false); ?>" target="_blank">
                    预览
                </a>
            </li>
            <li>
                <a href="<?php echo url('index/index'); ?>" class="sign-out">
                    <i class="glyphicon glyphicon-off">
                    </i>
                    <span>离开编辑</span>
                </a>
            </li>

            <li class="dropdown admin-info">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="glyphicon glyphicon-user">
                    </i>
                    <?php echo $user->username; ?>
                    <span class="caret">
                                </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?case=user&act=edit&table=user">
                           
                            编辑资料
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>/index.php?case=index&act=logout&admin_dir={config::get('admin_dir')}">
                          
                            退出
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!--/.nav-collapse -->

    <!--/.container-fluid -->
</div>



<!-- 右侧 --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



<!-- 可编辑区域 -->
<div class="visual-right" id="visual-right">

<?php echo $tempcontent; ?>
</div>



    <!-- 左侧 -->
    <div id="visual-left" class="visual-left" style=" left: -280px;">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="row">


                <!-- 布局面板开始 -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active" role="presentation">
                        <a href="#tab_1" data-toggle="tab">
                            <i class="glyphicon glyphicon-list">
                            </i>
                            布局
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#tab_2" data-toggle="tab">
                            <i class="glyphicon glyphicon-magnet">
                            </i>
                            模块
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#tab_3" data-toggle="tab">
                            <i class="glyphicon glyphicon-tasks">
                            </i>
                            组件
                        </a>
                    </li>
                </ul>

                <!-- 布局面板结束 -->
		<div class="sidebar-line" style=" left: -280px;"></div>

        <div class="tab-content" id="tab_content">
            <!-- 布局开始 -->

            <div role="tabpanel" class="tab-pane active" id="tab_1">
                <div class="row-fluid">
                    
                        <!-- 布局栅格开始 -->
                        <div class="blank60"></div>
                        
                        <?php autotempdir('layouts'); ?>

                        <div class="blank30"></div>
						
						<h5 class="tab_1_h5">网页背景：</h5>
						
						<div class="blank30"></div>
			
                        <p>*可在输入框输入栅格数字，数字以空格间隔，满12整数即可。</p>
                        <div class="alert alert-danger" role="alert"><span
                                    class="glyphicon glyphicon-warning-sign"></span> <strong>注意：</strong>
                            所有排版内容，必须放置在宽屏或盒子框内！
                        </div>
						
                        <!-- 布局栅格结束 -->
                  
                    <div class="blank30">
                    </div>
                </div>
            </div>
            <!-- 布局结束 -->
            <!-- 模块开始 -->
            <div role="tabpanel" class="tab-pane" id="tab_2">
                <div class="row-fluid">
                    <div class="padding-10">
						<div class="blank60"></div>
                        <?php autotempdir('sections'); ?>
                        <!-- 模块结束 -->
                    </div>
                    <div class="blank30">
                    </div>
                </div>
            </div>
            <!-- 模块结束 -->
            <!-- 组件开始 -->
            <div class="tab-pane" id="tab_3">
                <div class="padding-10">
					<div class="blank60">
					</div>
					<!--                    <div class="btn btn-success btn-update">-->
					<!--                        <i class="glyphicon glyphicon-refresh"></i>&nbsp; &nbsp;&nbsp;&nbsp;换一套风格-->
					<!--                    </div>-->
                    <!-- 组件开始 -->
                    <?php autofronttempdir('modules'); ?>
                    <!-- 组件结束 -->
                </div>
                <div class="blank30"></div>
            </div>
        </div>
        <!-- 组件结束 -->

    </div>
    <!-- 布局面板结束 -->
</div>
</div>
<!-- 左侧结束 -->


<!-- 编辑区 -->
<div id="download-layout">
    <div class="view-html">
		

    </div>
</div>
<!-- 编辑区 -->

<!-- 模态框 -->
<?php autotempdir('modals'); ?>
<script type="text/javascript">
    function saveLayout() {
        //return;
        //downloadLayoutSrc();
        $("body").mLoading({
            text:"正在保存...",
        });
        cache_text = $('.visual-right').html().replace(/\(&quot;/g,"('");
        cache_text = cache_text.replace(/&quot;\)/g,"')");
        $.ajax({
            type: "POST",
            url: "<?php echo url('template/savetemp');?>",
            data: {
                'name': '<?php echo $tempname;?>',
                'content': cache_text,
                'tempdata': getLayoutSrc()
            },
            success: function (data) {
                //updateButtonsVisibility();
                $("body").mLoading("hide");
                alert(data);
            }
        });
    }

    $(document).on('hidden.bs.modal',
        function (e) {
            $(e.target).removeData('bs.modal');
        });

</script>

<div class="container-fluid">
<div class="modal fade" id="downloadModal" tabindex="-1" role="dialog"
     aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    检查源码
                </h4>
            </div>
            <div class="modal-body">
                <div id="download-logged" class="">
                    <div class="alert alert-info">

                        查看源码结构
                    </div>
                    <p>
                                <textarea>
                                </textarea>
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>



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


<!-- layouts modal -->
<div class="container-fluid">
<div class="modal fade" id="div-config" tabindex="-1" role="dialog" aria-labelledby="div-config-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="div-config-label">属性</h4>
            </div>
            <div class="modal-body">
                <?php autotempdir('sections-config/layouts'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- layouts modal -->



<!-- 左侧超过屏幕竖排滚动 -->
<script src="{$base_url}/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript">
    <!--
     $(function(){
            $("body,#tab_content,.modal-body").niceScroll({
                cursorborder:"",
                cursorcolor:"#cccccc",
                boxzoom:false,
autohidemode:true,
					cursoropacitymin:0, 
        cursoropacitymax:1
            });
        });
    //-->
</script>
<!-- 左侧超过屏幕竖排滚动 -->


<!-- 导航文本编辑 -->
<script>

			$(function() {
			    $('.setfont a').click(function (e) {
			        e.preventDefault();
                    document.execCommand('fontName', false, $(this).css('font-family'));
                });
                $('.setfontSize a').click(function (e) {
                    e.preventDefault();
                    console.log($(this).attr('rel'));
                    document.execCommand('FontSize', false, $(this).attr('rel'));
                });
                $('.setfont a').click(function (e) {
                    e.preventDefault();
                    document.execCommand('fontName', false, $(this).css('font-family'));
                });
				$('.editControls a').click(function(e) {
                    console.log($(this).data('role'));
					switch($(this).data('role')) {
                        case 'createLink':
                            url = prompt("请输入链接地址!");
                            document.execCommand($(this).data('role'), false, url);
                            break;
						default:
							document.execCommand($(this).data('role'), false, null);
							break;
					}
					
				})
			});

		</script>

<!-- 导航文本编辑 -->


<!-- 非文本编辑不显示编辑器 -->
<script type="text/javascript">
<!--

$(function(){
    $(document).on('click',".visual-right .visual-text",function(event){
        event.stopImmediatePropagation();
        $('.editControls').fadeIn(500).show();
    });
 
    $('#visual-right').bind("click",function(){
        //event.stopImmediatePropagation();
	    $('.editControls').fadeOut(500).hide();
    })
});
//-->
</script>
<!-- 非文本编辑不显示编辑器 -->


<!-- 删除布局含标签 -->
<script>
    $(function () {
        $(document).on("click",".visual-right .remove",
            function (e) {
                e.preventDefault();
                if (confirm('确定删除标签和元素吗?')) {
                    html = $(this).parent().find('.view .tagname').html();
                    if (html && (/tag_.*?/).test(html)) {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo url('template/deltag'); ?>",
                            data: {
                                'tag': html,
                            },
                            success: function (res) {
                                //updateButtonsVisibility();
                                console.log(res);
                            }
                        });
                    }
                    $(this).parent().remove();
                    if (!$(".visual-right .lyrow").length > 0) {
                        clearDemo()
                    }
                }
            });
    });
</script>
<!-- 删除布局含标签 -->


<!-- 防止hover多层嵌套显示 -->
<script type="text/javascript">
<!--
	$(function() {
        $(document).on('mouseover',"#visual-right div.ui-draggable",function(e) {
            if(!$(this).hasClass("modal"))
                $(this).addClass("hover");
            e.stopPropagation();
        });
        $(document).on('mouseout',"#visual-right div.ui-draggable",function(e) {
            if($(this).hasClass("hover"))
                $(this).removeClass("hover");
            e.stopPropagation();
        });
        $('.visual-left').find('[data-toggle=modal]').click(function () {
            return false;
        });

    });
//-->
</script>
<!-- 防止hover多层嵌套显示 -->












<!-- Bootstrap core Javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{$base_url}/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{$base_url}/js/ie/ie10-viewport-bug-workaround.js"></script>
<!--[if lt IE 9]><!-->
<script src="{$base_url}/js/ie/html5shiv.min.js"></script>
<script src="{$base_url}/js/ie/respond.min.js"></script>
<![endif]-->

<!-- 幻灯 -->
<script src="{$skin_path}/js/slide/jquery.touchSwipe.min.js"></script>
<script src="{$skin_path}/js/slide/bootstrap-touch-slider.js"></script>

<!-- 左侧菜单展开 -->
<script src="{$skin_admin_path}/js/custom-scripts-visual.js"></script> 
<!-- 左侧菜单展开 -->

<!-- 顶部多层菜单 -->
<script type="text/javascript">
<!--
	$(function () {
    $(".visual-top .dropdown").mouseover(function () {
        $(this).addClass("open");
    });

    $(".visual-top .dropdown").mouseleave(function(){
        $(this).removeClass("open");
    })

})
//-->
</script>
<!-- 顶部多层菜单 -->


<!-- 左侧树形菜单 -->
<link href="{$skin_path}/css/add.css" rel="stylesheet">
<link rel="stylesheet" href="{$skin_path}/css/metisMenu.css">
<script src="{$skin_path}/js/metisMenu.js"></script>
<script>
    $(function () {
        $('#list-category').metisMenu();
    });
</script>
<!-- 左侧树形菜单 -->

<!-- 隐藏网格 -->
<script>
$(document).ready(function(){
  $("#gridlines").click(function(){
    $("#visual-right div.ui-sortable").toggleClass("visual-outline-remove");
  });
});
</script>
<!-- 隐藏网格 -->


<!-- 判断div为空 -->

<script type="text/javascript">
<!--
 $(document).ready(function() {
    if($("#visual-right .lyrow .view .ui-sortable").find("box-element").length>0){
		$(this).css("background","blue");
    }else{
        $(this).css("background","red");
    }
});
//-->
</script>

<!-- 判断div为空 -->

<!-- 图片轮播 -->
<script src="{$skin_path}/js/owl.carousel.min.js"></script> 
<script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        items : 3,
        lazyLoad : true,
        navigation : true
      });

    });
</script> 
<!-- 图片轮播 -->

<!-- 模态框拖动 -->
<script type="text/javascript">
<!--
	$('.modal').draggable();
//-->
</script>

<!-- 字体图标 -->
<link rel="stylesheet" type="text/css" href="{$base_url}/js/fonticon/icomoon.css" />
<script type="text/javascript" src="{$base_url}/js/fonticon/fonticon.js"></script></body>
<!-- 字体图标 -->
</body>
</html>