<div class="main-right-box">
    <h5>在线模板列表</h5>
    <div class="blank20"></div>
    <div class="box">

        {if config::get('template_view')=='0'}

        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <span class="glyphicon glyphicon-warning-sign"></span> 无更多模板！<a href="javascript:history.back(-1)"
                                                                            class="register_btn">返回</a>
        </div>
        {else}
        <div class="div_tpllist"><?php echo $tpllist; ?></div>
        <div id="info_res"></div>
        <!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">提示：</h4></div><div class="modal-body"><p>正在下载安装。。。不要刷新本页！！！</p></div></div></div></div>-->
        <div class="modal fade" id="downModal" tabindex="-1" role="dialog" aria-labelledby="downModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="false">&times;</span></button>
                        <h4 class="modal-title" id="downModalLabel">下载模版</h4>
                    </div>
                    <div class="modal-body">
                        <p>文件大小：<span id="file-size">0</span> Bytes</p>
                        <!-- 进度条 -->
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                <span id="imported-progress">0</span>%
                            </div>
                        </div>
                        <p id="statusText">正在下载安装。。。不要刷新本页！！！</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var isdownloading = false;

            function updateProgress(progress) {
                $('#imported-progress').html(progress);
                $('.progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);
            }

            function updateState(progress) {
                $('#statusText').html(progress);
                //$('.progress-bar').css('width', progress+'%').attr('aria-valuenow', progress);
            }

            function showAjaxError(XMLHttpRequest, textStatus, errorThrown) {
                console.log('ajax error');
                console.log(XMLHttpRequest);
                console.log(textStatus);
                console.log(errorThrown);
            }

            function downloadFile($f,isSql) {
                var file_size = 0;
                var progress = 0;
                var filename = $f;

                console.log("Prepared to download");
                updateState('准备下载模版文件...');

                $('#downModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });

                var def = $.get('{url('template/down/action/prepare-download',true)}', {'f': filename, 'sql': isSql}, null, 'json');
                def.then(function (res) {
                    console.log(res);
                    file_size = res.file_size;
                    $('#file-size').html(file_size);
                    console.log("started downloading");
                    updateState('开始下载模版文件...');
                    //isdownloading = false;
                    //$('#myModal').modal('hide');
                    //$('#info_res').html(res.msg);


                    url = '{url('template/down/action/start-download',true)}';
                    promise =  $.get(url,{'f': filename, 'sql': isSql} ,null, 'json');

                    var interval_id = window.setInterval(function () {
                        $('#imported-progress').html(progress);
                        $('.progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);
                        if (progress >= 100) {
                            clearInterval(interval_id);
                            // 到此远程文件下载完成，继续其他逻辑
                            updateState('下载成功,开始安装模板...');
                            $.ajax({
                                url : "{url('template/down/action/exzip',true)}",
                                data: {'f': filename, 'sql': isSql},
                                dataType:'json',
                                type : 'GET'
                            }).done(function(res){
                                if(res['code'] === 0){
                                    updateState('安装完成,2秒后跳转到后台!');
                                    setTimeout("window.location.href='admin';",2000);
                                }else{
                                    updateState(res['msg']);
                                }
                            }).fail(showAjaxError);
                        } else {
                            $.ajax({
                                url: "{url('template/down/action/get-file-size',true)}",
                                data: {'f': filename, 'sql': isSql},
                                dataType: 'json',
                                type: 'get'
                            }).done(function (json) {
                                //console.log("Progress: "+json);
                                //console.log("Progress: "+json.size);
                                //console.log("Progress: "+file_size);
                                progress = (json.size / file_size * 100).toFixed(2);
                                updateProgress(progress);
                                console.log("Progress: " + progress);
                            }).fail(showAjaxError);
                        }
                    }, 999);


                    return promise;
                }, function (res) {
                    updateState('发生错误 '+res.responseText);
                    console.error(res);
                }).then(function (json) {
                    // set progress to 100 when got the response
                    progress = 100;
                    console.log("Downloading finished");
                    console.log(json);
                }, function (res) {
                    updateState('发生错误 '+res.responseText);
                    console.error(res);
                });
                return;

                $.ajax({
                    url: './download.php?action=prepare-download&f=' + f,
                    type: 'GET',
                    dataType: 'json',
                    beforeSend: function () {
                        $('#update-button').html('<i class="fa fa-spinner fa-spin"></i> 正在准备').prop('disabled', 'disabled');
                    },
                })
                    .done(function (json) {
                        console.log(json);

                        file_size = json.file_size;

                        $('#file-size').html(file_size);

                        // 显示进度条

                        console.log("started downloading");
                        $.ajax({
                            url: './download.php?action=start-download&f=' + f,
                            type: 'GET',
                            //timeout : 1000, //超时时间设置，单位毫秒
                            dataType: 'json'
                        }).done(function (json) {
                            // set progress to 100 when got the response
                            progress = 100;

                            console.log("Downloading finished");
                            console.log(json);
                        }).fail(showAjaxError);

                        var interval_id = window.setInterval(function () {

                            $('#imported-progress').html(progress);
                            $('.progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);

                            if (progress >= 100) {
                                clearInterval(interval_id);

                                // 到此远程文件下载完成，继续其他逻辑
                                updateState('开始解压文件');
                                $.ajax({
                                    url: 'download.php?action=exzip&f=' + f,
                                    dataType: 'json',
                                    type: 'GET'
                                }).done(function (json) {
                                    if (json.rs == 'ok') {
                                        updateState('安装完成,跳转到后台!');
                                        setTimeout("window.location.href='admin';", 1000);
                                    } else {
                                        updateState(rs);
                                    }
                                }).fail(showAjaxError);
                            } else {
                                $.ajax({
                                    url: './download.php?action=get-file-size&f=' + f,
                                    dataType: 'json',
                                    type: 'GET'
                                })
                                    .done(function (json) {
                                        //console.log("Progress: "+json);
                                        //console.log("Progress: "+json.size);
                                        //console.log("Progress: "+file_size);
                                        progress = (json.size / file_size * 100).toFixed(2);

                                        updateProgress(progress);

                                        console.log("Progress: " + progress);
                                    })
                                    .fail(showAjaxError);
                            }

                        }, 999);

                    }).fail(showAjaxError);
            }

            $(function () {
                $('#template-list a.btn_template').click(function (e) {
                    var templatename = $(this).data('rel');
                    //$('#downModal').modal('show');
                    //return false;
                    //console.log(a);
                    if (!isdownloading) {
                        $('#info_res').html('');
                        if (confirm('是否确认下载模板？')) {
                            var isSql = confirm('是否使用模板内置数据?');
                            downloadFile(templatename,isSql);
                            //isdownloading = true;
                            //var isSql = confirm('是否使用模板内置数据?');
                            //
                            //$('#downModal').modal('show');
                            /*var def = $.post('{url('template/down',true)}', {'f': a, 'sql': isSql}, null, 'json');
                            def.then(function (res) {
                                isdownloading = false;
                                $('#myModal').modal('hide');
                                $('#info_res').html(res.msg);
                            }, function (res) {
                                console.error(res);
                            });*/
                        }
                    } else {
                        alert('请等待下载完成!');
                    }
                    return false;
                });
            });
        </script>

        <div class="blank30"></div>

        <style type="text/css">
            .page_box {
                padding-right: 50px;
            }
        </style>
        <div class="page_btn clear">
<span class="page_box">
<a class="prev">上一页</a><span class="num"><span class="current_page">1</span><span style="padding:0 3px;">/</span><span
                class="total"></span></span><a class="next">下一页</a>
</span>
        </div>


        <div class="blank30"></div>
        {/if}

        <div class="blank30"></div>
    </div>
</div>
