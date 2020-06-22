<div class="modal fade" id="template-contact-tag" tabindex="-1" role="dialog"
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
                    联系方式
                </h4>
            </div>
            <div class="modal-body">
                <form method="post" name="frmTel" id="frmTel" action="">
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            电话
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="tel" name="tel" class="form-control select tel">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            地址
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="address" name="address" class="form-control select address">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            邮编
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="postcode" name="postcode" class="form-control select postcode">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            手机
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="mobile" name="mobile" class="form-control select mobile">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            传真
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="fax" name="fax" class="form-control select fax">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            邮箱
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="email" name="email" class="form-control select email">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 text-right">
                            投诉邮箱
                        </div>
                        <div class="col-xs-6 col-sm-7 col-md-7 col-lg-8 text-left">
                            <select id="complaint_email" name="complaint_email" class="form-control select complaint_email">
                                <option value="1">
                                    是
                                </option>
                                <option value="0">
                                    否
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    关闭
                </button>
                <button id="saveTelStyle" type="button" class="btn btn-primary" data-dismiss="modal">保存
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var telHandel;

    $(document).ready(function () {

        $('body.edit .visual-right').on("click", "[data-target='#template-contact-tag']", function (e) {
            e.preventDefault();
            telHandel = $(this).parent().find('.view');
            //console.log(telHandel.find('.custtag.tel').length);
            $('#frmTel .tel').val(telHandel.find('.custtag.tel').length);
            $('#frmTel .address').val(telHandel.find('.custtag.address').length);
            $('#frmTel .postcode').val(telHandel.find('.custtag.postcode').length);
            $('#frmTel .mobile').val(telHandel.find('.custtag.mobile').length);
            $('#frmTel .fax').val(telHandel.find('.custtag.fax').length);
            $('#frmTel .email').val(telHandel.find('.custtag.email').length);
            $('#frmTel .complaint_email').val(telHandel.find('.custtag.complaint_email').length);
            //console.log(navHandel);
            //contenthandle.setData(eText);
        });

        $("#saveTelStyle").click(function (e) {
            e.preventDefault();
            //alert($("input[name=navstyle]:checked").val());
            //data = {'listtemplate': $("#listtemplate").val()};
            data = $('#frmTel').serialize();
            $.post('{url("template/getTel")}', data, function (res) {
                //console.log(telHandel.html());
                telHandel.html(res);
                //navHandel.html('<div class="nav" rel="nav(' + $("input[name=navstyle]:checked").val() + ')">' + res + '</div>');
            });

            //return false;

        });
    });

</script>