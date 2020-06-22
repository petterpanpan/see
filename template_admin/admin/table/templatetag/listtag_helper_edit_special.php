<?php

$tplarray = include(ROOT . '/template/' . config::get('template_dir') . '/tpltag/tag.config.php');
$tplarray = $tplarray['special'];
$tag_config = $data['setting'];
$spname_checked = $subtitle_checked = $spimage_checked = $spcontent_checked = '';
if($tag_config['spname']) $spname_checked = 'checked';
if($tag_config['subtitle']) $subtitle_checked = 'checked';
if($tag_config['spimage']) $spimage_checked = 'checked';
if($tag_config['spcontent']) $spcontent_checked = 'checked';
?>


<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
        专题
    </div>
    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
        <?php echo form::select('spid', $tag_config['spid'],special::option('全部专题'));?>
        <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="默认所有栏目!"></span>
    </div>
</div>
<div class="clearfix blank20"></div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
        专题名称
    </div>
    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
        <input type="checkbox" value="1" name="spname" class="radio" id="spname" <?php echo $spname_checked;?> />
        <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="默是否调用专题名称!"></span>
    </div>
</div>
<div class="clearfix blank20"></div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
        副标题
    </div>
    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
        <input type="checkbox" value="1" name="subtitle" class="radio" id="subtitle" <?php echo $subtitle_checked;?> />
        <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="默是否调用副标题!"></span>
    </div>
</div>
<div class="clearfix blank20"></div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
        专题banner图
    </div>
    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
        <input type="checkbox" value="1" class="radio" name="spimage" id="spimage" <?php echo $spimage_checked;?> />
        <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="是否调用说明图片!"></span>
    </div>
</div>
<div class="clearfix blank20"></div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
        专题内容
    </div>
    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
        <input type="checkbox" value="1" class="radio" name="spcontent" id="spcontent" <?php echo $spcontent_checked;?> />
        <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="是否调用专题说明!"></span>
    </div>
</div>
<div class="clearfix blank20"></div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
        截取字数
    </div>
    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
        <?php echo form::input('len', $tag_config['len'], 'class="input_c"');?>
        <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="-1：不限制 0：不调用"></span>
    </div>
</div>
<div class="clearfix blank20"></div>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
        标签模板
    </div>
    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
        <?php echo form::select('tagtemplate', $tag_config['tagtemplate'], $tplarray);?>
        <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="标签模板文件存放在&nbsp;template/当前使用模板目录/tpltag/tag_special_*.html!"></span>
        <div style="display:none">
            <?php echo form::textarea('tagcontent', 'null', 'cols="70" rows="20"');?>
        </div>
    </div>
</div>
