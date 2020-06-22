<script>
    $(function(){
        $('#frmGuestbookSubmit').submit(function() {
            if($('#nickname').val() == ''){
                alert("请输入用户名！");
                $('#nickname').focus();
                return false;
            }
            if($('#title').val() == ''){
                alert("请填写标题");
                $('#title').focus();
                return false;
            }
            if($('#guestemail').val() == ''){
                alert("<?php echo lang('please_fill_in_the_mailbox');?>");
                $('#guestemail').focus();
                return false;
            }
            if(!chkEmail($('#guestemail').val())){
                alert("邮箱格式不对");
                $('#guestemail').focus();
                return false;
            }
            if($('#guesttel').val() == ''){
                alert('请输入有效的手机号码！');
                $('#guesttel').focus();
                return false;
            }
            if(!chkMobile($('#guesttel').val())){
                alert("手机格式不对");
                $('#guesttel').focus();
                return false;
            }
            if($('#content').val() == ''){
                alert("<?php echo lang('p_content');?>");
                $('#content').focus();
                return false;
            }
        });
    });
</script>
<form id="frmGuestbookSubmit" method="post" action="<?php echo url('guestbook/index');?>" name="frmGuestbookSubmit" class="form_message">

<div><?php echo lang('name');?><span>Name</span></div>

<input name="nickname" id="nickname" value="" class="guestbook_input" />

<div><?php echo lang('title');?><span>Title</span></div>

<input type="text" name="title" id="title" value="" class="guestbook_input" />

<div><?php echo lang('email');?><span>Emali</span></div>

<input name="guestemail" id="guestemail" value="" class="guestbook_input" />

<div><?php echo lang('guesttel');?><span>Tel</span></div>

<input name="guesttel" id="guesttel" value="" class="guestbook_input" />

<div><?php echo lang('content');?><span>Content</span></div>

<textarea id="content" name="content" class="guestbook_textarea"></textarea>

<?php if(config::get('verifycode')=='1'){?>
<input type='text' id="verify"  tabindex="3"  name="verify" /><?php echo verify();?>
<?php } ?>


<?php if(config::get('verifycode') == 2){?>
<div class="blank10"></div>
    <div id="verifycode_guest"></div>
    <script src="http://api.geetest.com/get.php"></script>
    <script>
        var loadGeetest1 = function(config) {
            window.gt_captcha_obj = new window.Geetest({
                gt : config.gt,
                challenge : config.challenge,
                product : 'float',
                offline : !config.success
            });
            gt_captcha_obj.appendTo("#verifycode_guest");
        };

        $.ajax({
                url : '<?php echo url('tool/geetest');?>',
            type : "get",
            dataType : 'JSON',
            success : function(result) {
            //console.log(result);
            loadGeetest1(result)
        }
        });
    </script>
<?php } ?>

<div class="blank20"></div>
<input type="submit" name="submit" value="<?php echo lang('submit_on');?>" class="guestbook_btn">
</form>