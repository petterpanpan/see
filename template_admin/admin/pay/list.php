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
<h5>支付方式列表</h5>
<div class="blank20"></div>
<div class="box">
<style type="text/css">
	.tips {width:100%;}
</style>

<form name="listform" id="listform"  action="<?php echo uri();?>" method="post">

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
          <th class="catname"><!--name-->支付方式</th>
          <th class="htmldir"><!--rate-->支付费率</th>
          <th class="htmldir"><!--ver-->插件版本</th>
          <th class="manage">操作</th>
        </tr>

</thead>
<tbody>
{loop $data $d}
<tr>
<td class="catname">{$d['name']}
</td>
<td class="htmldir" align="center">{cut($d['pay_fee'])}%</td>
<td class="htmldir" align="center">{cut($d['version'])}</td>

<td align="center" class="manage">
<?php if ($d['install']==0){?>
<a href="<?php echo modify("act/install/table/$table/name/".$d['pay_code']);?>" title="安装"><i class="glyphicon glyphicon-cog"></i></a>
<?php }else{?>
<a href="<?php echo modify("act/edit/table/$table/id/".$d['id']);?>" title="编辑"><i class="glyphicon glyphicon-edit"></i></a>
<a onclick="javascript: return confirm('确实要删除吗?');" href="<?php echo modify("/act/delete/table/$table/id/".$d['id']);?>" title="删除"><i class="glyphicon glyphicon-trash"></i></a>
<?php } ?>
</td>
</tr>
{/loop}


      </tbody>
    </table>
</div>

</form>
<div class="blank30"></div>
</div>
</div>
