<!-- 组件 -->
<div class="visual-drag-box box-element visual-inline-block">
    <a href="#close" class="remove label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>
    <span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button"
          data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>

	<span class="drag label label-default btn-pic-config" data-target="#template-contact-tag" role="button" data-toggle="modal" title="设置">
            <i class="glyphicon glyphicon-pencil"></i></span>



    <div class="preview">
        <img src="{$skin_admin_path}/images/visual/section/contact.png">
        <p>联系</p>
    </div>
    <div class="view">
        <div class=" visual-contact visual-inline-block">

            <p>{lang('address')}：<span class="custtag address" rel="config::get('address')">
        <?php echo config::get('address'); ?>
        </span></p>

            <p>{lang('postcode')}：<span class="custtag postcode" rel="config::get('postcode')">
        <?php echo config::get('postcode'); ?>
        </span></p>

            <p>{lang('tel')}：<span class="custtag tel" rel="config::get('tel')">
        <?php echo config::get('tel'); ?>
        </span></p>

            <p>{lang('fax')}：<span class="custtag fax" rel="config::get('fax')">
        <?php echo config::get('fax'); ?>
        </span></p>

            <p>{lang('mobile')}：<span class="custtag mobile" rel="config::get('mobile')">
        <?php echo config::get('mobile'); ?>
        </span></p>

            <p>{lang('email')}：<span class="custtag email" rel="config::get('email')">
        <?php echo config::get('email'); ?>
        </span></p>

            <p>{lang('complaint')}{lang('email')}：<span class="custtag complaint_email" rel="config::get('complaint_email')">
        <?php echo config::get('complaint_email'); ?>
        </span></p>


       
        </div>


    </div>
</div>
<!-- 组件结束 -->