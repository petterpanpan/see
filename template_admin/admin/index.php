<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get('sitename'); ?> - 后台管理中心</title>
    <link href="{$skin_admin_path}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$skin_admin_path}/css/admin.css" rel="stylesheet" type="text/css"/>
    <script src="{$base_url}/js/jquery.min.js"></script>
    <script src="{$base_url}/js/jquery-browser.js"></script>
<script type="text/javascript">
window.onerror=function(){return true;};
window.onload=function()
{
for(var ii=0; ii<document.links.length; ii++)
document.links$[ii].onfocus=function(){this.blur()}
}
</script>
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

            var timer = window.setInterval(function () {
                var el = getElementsByClass('pace');
                if (el.length > 0) {
                    var a = document.createElement('div');
                    a.setAttribute('class', 'spinner');
                    var b = document.createElement('div');
                    b.setAttribute('class', 'spinner-icon');
                    el[0].appendChild(a);
                    a.appendChild(b);
                    window.clearInterval(timer);
                }
            }, 3);
        }
    </script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="navbar-header" id="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar"
                        aria-expanded="false" aria-controls="sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div id="sideNav" href=""><i class="glyphicon glyphicon-th-list"></i></div>
            </div>
            <div id="navbar" class="navbar-collapse collapse col-sm-9 col-md-10 pull-right">
                <ul class="nav navbar-top-links navbar-right">
                    <li><a href="{$base_url}/" target="_blank" class="btn btn-view">预览</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false">静态
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu tasks">
                            <li>
                                <a href="{$base_url}/index.php?case=cache&act=make_show&admin_dir={get('admin_dir')}&site=default">电脑版静态</a>
                            </li>
                            <li>
                                <a href="{$base_url}/index.php?case=wapcache&act=make_show&admin_dir={get('admin_dir')}&site=default">手机版静态</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{$base_url}/index.php?case=table&act=add&table=archive&admin_dir={get('admin_dir')}">添加</a>
                    <li><a href="{url::create('config/remove')}" class="on">缓存</a></li>
                    <li class="dropdown information"><a class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                        aria-haspopup="true" aria-expanded="false"><i
                                    class="glyphicon glyphicon-bell"></i>
                            <span class="caret"></span></a>
                        <ul id="information" class="dropdown-menu envelope">
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false"><i
                                    class="glyphicon glyphicon-tasks"></i>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu tasks">
                            <li><a href="http://www.cmseasy.cn/" target="_blank">软件官网</a></li>
                            <li><a href="http://www.cmseasy.cn/service/" target="_blank">购买授权</a></li>
                            <li><a href="http://www.cmseasy.org/" target="_blank">问题交流</a></li>
                            <li><a href="http://www.cmseasy.cn/chm/quick/" target="_blank">快速入门</a></li>
                            <li><a href="http://www.cmseasy.cn/chm/" target="_blank">在线教程？</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false"><i
                                    class="glyphicon glyphicon-globe"></i>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu tasks">
                            {loop getwebsite() $d}
                            <li><a href="{$d[addr]}">{$d[name]}</a></li>
                            {/loop}
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false"><i
                                    class="glyphicon glyphicon-user"></i> {$user.username}<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu user">
                            <li><a href="{$base_url}/index.php?case=user&act=edit&table=user"><i
                                            class="fa fa-user fa-fw"></i> 编辑资料</a></li>
                            <li>
                                <a href="{$base_url}/index.php?case=index&act=logout&admin_dir={config::get('admin_dir')}"><i
                                            class="fa fa-sign-out fa-fw"></i> 退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- 左侧 ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
        <div id="sidebar" class="sidebar navbar-side">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <a class="logo col-sm-3 col-md-2"
                   href="{$base_url}/index.php?admin_dir={get('admin_dir')}&site=default"><img
                            src="{$skin_admin_path}/images/logo.png" alt="logo"/></a>
                <div class="blank10"></div>
                <ul class="nav" id="main-menu">
                    <?php $menu = admin_menu::allmenu();
                    $i = 0;
                    $class1 = '';
                    foreach ($menu as $ns => $ms) {
                        if (!chkpower($ms[0])) {
                            continue;
                        }
                        ?>
                        <li>
                            <a class="active-menu waves-effect waves-dark" href="{if !is_array($ms[1])}{$ms[1]}{else}#{/if}">
                                {if $ns == '内容'}<span class="glyphicon glyphicon-plus"></span>
                                {elseif $ns == '用户'}<span class="glyphicon glyphicon-user"></span>
                                {elseif $ns == '订单'}<span class="glyphicon glyphicon-shopping-cart"></span>
                                {elseif $ns == '功能'}<span class="glyphicon glyphicon-th-list"></span>
                                {elseif $ns == '模板'}<span class="glyphicon glyphicon-edit"></span>
                                {elseif $ns == '可视化'}<span class="glyphicon glyphicon-fire"></span>
                                {elseif $ns == '营销'}<span class="glyphicon glyphicon-signal"></span>
                                {elseif $ns == '自定义'}<span class="glyphicon glyphicon-pencil"></span>
                                {else}
                                <span class="glyphicon glyphicon-cog"></span>
                                {/if}
                                {$ns}
                                {if is_array($ms[1])}
                                <i class="glyphicon glyphicon-chevron-right"></i>
                                {/if}</a>
                            {if is_array($ms[1])}
                            <ul class="nav nav_{$i} nav-second-level">
                                <?php
                                foreach($ms[1] as $n => $m) {
                                    if (!chkpower($m[0])) {
                                        continue;
                                    }
                                    $rm = preg_quote($m[1]);
                                    if (preg_match("@$rm@i", $_SERVER['REQUEST_URI'])) {
                                        $curr_ns = $ns;
                                        $curr_n = $n;
                                        $curr_i = $i;
                                    }
                                    ?><li><a href="{$m[1]}">{$n}</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                            {/if}
                        </li>
                        <?php
                        $i++;
                    }
                    ?>
                </ul>
            </div>
        </div>

        <script>$(function () {
                $('.nav_<?php echo $curr_i;?>').addClass('in');
            });</script>
        <!-- 右侧 --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <div id="page-wrapper" class="main">
            <div class="container-fluid">

                <div class="row">

                    <ol class="breadcrumb">
                        <li><a href="{$base_url}/index.php?admin_dir={get('admin_dir')}&site=default" title="后台首页"><i
                                        class="glyphicon glyphicon-home"></i> 首页</a></li>
                        {if $curr_ns}
                        <li><?php echo $curr_ns; ?></li>
                        {/if}
                        {if $curr_n}
                        <li class="active"><a href="<?php echo $menu[$curr_ns][1][$curr_n][1]; ?>"><?php echo $curr_n; ?></a>
                        </li>
                        {/if}
                        <?php if (front::get('deletestate')) echo ' ><li class="active">回收站</li>';
                        if (front::get('needcheck')) echo ' ><li class="active">待审核内容</li>'; ?>
                    </ol>

                    <?php
                    $this->render();
                    ?>
                </div>

                <div class="blank30"></div>
                <div class="copy">{getCopyRight()}</div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <div class="blank30"></div>
</div>


<script type="text/javascript">
    <!--

    //标签页
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    //去掉虚线框
    function bluring() {
        if (event.srcElement.tagName == "A" || event.srcElement.tagName == "IMG") document.body.focus();
    }

    document.onfocusin = bluring;

    //点击关闭提示信息层
    function turnoff(obj) {
        document.getElementById(obj).style.display = "none";
    }

    //信息提示框
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    //-->
</script>

<?php if (hasflash()) { ?>
    <div id='message'>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            <span class="glyphicon glyphicon-warning-sign"></span> <?php echo showflash(); ?>
        </div>
    </div>
    <script type="text/javascript">
        <!--
        function lick() {
            $("#message").hide();
        }

        window.setTimeout("lick()", 3000);
        //-->
    </script>
<?php } ?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{$base_url}/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="{$skin_admin_path}/js/jquery.metisMenu.js"></script>
<!-- Custom Js -->
<script src="{$skin_admin_path}/js/custom-scripts.js"></script>
<script language="javascript" type="text/javascript" src="{$skin_admin_path}/js/admin.js"></script>


<script src="{$base_url}/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript">
    <!--
    $(function () {
        $(".sidebar").niceScroll({
            cursorborder: "",
            cursorcolor: "#ffffff",
            boxzoom: false,
            autohidemode: true,
            cursoropacitymin: 0,
            cursoropacitymax: 1
        });
    });
    //-->
</script>

<script>
    $(document).ready(function () {
        $.get('./lib/tool/getinf.php?type=officialinf', function (data) {
            $("#information").append(data);
        });
    });
</script>
<!--[if lt IE 9]><!-->
<script src="{$base_url}/js/ie/html5shiv.min.js"></script>
<script src="{$base_url}/js/ie/respond.min.js"></script>
<![endif]-->

</body>
</html>