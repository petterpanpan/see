<div class="main-right-box">
<h5>专题列表</h5>
<div class="blank20"></div>
<div class="box">


<form name="listform" id="listform"  action="<?php echo uri(); ?>" method="post">

<input class="btn btn-primary" type="button" value=" 添加专题 " onclick="javascript:window.location.href='<?php echo url('table/add/table/special') ?>'" />

<div class="blank10"></div>

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out"><input title="点击可全选本页的所有项目"  onclick="CheckAll(this.form)" type="checkbox" name="chkall"> </th>
<!--<th>排序</th>-->
<th class="catid"><!--spid-->专题ID</th>
<th class="catname"><!--catname-->专题名称</th>
<th class="manage">操作</th>
</tr>

{loop $data $d}
<?php $spid=$d['spid']; ?>
<tr>
<td align="center" class="s_out"><input onclick="c_chang(this)" type="checkbox" value="{$spid}" name="select[]"></td>
<!--<td>{form::input("listorder[$d[$primary_key]]",$d['listorder'],'size=3')}</td>-->
<td align="center" class="catid">{$d['spid']}</td>
<td align="center" class="catname"><a href="<?php echo url("special/show/spid/$spid", false); ?>" target="_blank">{$d['title']}</a></td>

<td align="center" class="manage">
<a href="<?php echo url("special/show/spid/$spid", false); ?>" target="_blank" title="查看"><i class="glyphicon glyphicon-eye-open"></i></a>

<a href="<?php echo modify("/act/edit/table/$table/id/$spid"); ?>" title="编辑"><i class="glyphicon glyphicon-edit"></i></a>


<a onclick="javascript: return confirm('确实要删除吗?');" href="<?php echo modify("/act/delete/table/special/id/$spid/token/$token"); ?>" title="删除"><i class="glyphicon glyphicon-trash"></i></a>

<!-- <a href="<?php echo modify("/act/list/table/archive/spid/$spid"); ?>" title="管理"><i class="glyphicon glyphicon-list-alt"></i></a> -->

</td>
</tr>

{/loop}

</tbody>
</table>



</div>


<div class="line"></div>


<div class="page"><?php echo pagination::html($record_count); ?></div>

<input type="hidden" name="batch" value=" " class="btn btn-primary" />

</form>

<div class="blank30"></div>
</div>
</div>
