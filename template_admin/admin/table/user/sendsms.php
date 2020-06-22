
<div class="main-right-box">
<h5>发送短信</h5>
<div class="blank20"></div>
<div class="box">


<ul class="nav nav-tabs" role="tablist">
<li><a href="{$base_url}/index.php?case=table&act=send&table=user&admin_dir={get('admin_dir')}&site=default">发送邮件</a></li>
<li><a href="{$base_url}/index.php?case=table&act=mail&table=user&admin_dir={get('admin_dir')}&site=default">注册会员群发</a></li>
<li><a href="{$base_url}/index.php?case=table&act=send&table=user&type=subscription&admin_dir={get('admin_dir')}&site=default">订阅会员群发</a></li>
    <li class="active"><a href="{$base_url}/index.php?case=table&act=sendsms&table=user&admin_dir={get('admin_dir')}&site=default">发送短信</a></li>
</ul>
<div class="clearfix blank30"></div>
<form method="post" name="mail_form1" action=""  onsubmit="return checkform();">
<input type="hidden" name="onlymodify" value=""/>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">手机号码</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<textarea name="mail_address" id="mail_address" class="form-control textarea"><?php if(front::$get['st']) {?>{table_user::sms_before()}<?php }?></textarea>
<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="发送格式示例: 18800001111,<br>18800002222,<br>18800003333,..."></span>
</div>
</div>
<div class="clearfix blank20"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">发送内容</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<textarea name="content" id="sendmail" class="form-control textarea"></textarea>
<span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="可以输入合法的html代码"></span>
</div>
</div>
<div class="clearfix blank20"></div>

<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<input type="submit" name="submit" value="发送" class="btn btn-primary" />
</form>
<div class="blank30"></div>
</div>
</div>
