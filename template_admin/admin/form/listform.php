<style type="text/css">
.main .main-right-box {
position: absolute;
top:130px;
right:30px;
left:30px;
bottom:30px;
}
</style>


<div class="main-right-box">
<h5>表单列表</h5>
<div class="blank20"></div>
<div class="box"><div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-warning-sign"></span>	<strong>表单链接调用格式：</strong>	 <span>{</span>myform("my_表单名称")<span>}</span>
</div>


<a href="{$base_url}/index.php?case=form&act=addform&admin_dir={get('admin_dir')}&site=default" class="btn btn-primary">添加表单</a>



<div class="blank30"></div>

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out">名称(记录数)</th>
<th class="catname">表名</th>
<th class="manage">操作</th>
</tr>
</thead>
<tbody>
{loop $tables $t}
<tr>
<td class="s_out" align="center">{=@setting::$var[$t]['myform']['cname']}&nbsp;
    (&nbsp;<font color="red"><?php  $_table=new defind($t); echo $_table->rec_count();?></font>&nbsp;)
</td>
<td class="catname" align="center">{$t}</td>
<td class="manage" align="center">

<a  href="{url('form/add/form/'.$t,false)}" target="_blank" title="预览"><i class="glyphicon glyphicon-eye-open"></i></a>

<a href="{url('table/list/table/'.$t)}" title="查看"><i class="glyphicon glyphicon-folder-open"></i></a>

<a  href="<?php echo modify("/act/editform/table/$t");?>" title="编辑"><i class="glyphicon glyphicon-edit"></i></a>

<a href="<?php echo url::create('field/list/table/'.$t)?>" title="字段列表"><i class="glyphicon glyphicon-list-alt"></i></a>

<a href="<?php echo url::create('field/add/table/'.$t)?>" title="添加字段"><i class="glyphicon glyphicon-plus"></i></a>

<a  onclick="javascript: return confirm('删除表单会删除表单中所有的记录！确认删除吗?');" href="<?php echo modify("/act/delete/table/$t");?>" title="删除"><i class="glyphicon glyphicon-trash"></i></a>

<a href="<?php echo modify("/act/export/table/$t");?>" target="_blank" title="导出"><i class="glyphicon glyphicon-floppy-save"></i></a>

</td>
</tr>
{/loop}

</tbody>
</table>

</div>
<div class="blank30"></div>
</div>
</div>

