<div class="main-right-box">
<h5>表单数据</h5>
<div class="blank20"></div>
<div class="box">
<style type="text/css">
	tr {margin:5px 0px;}
</style>

<script type="text/javascript">
<!--
	$(document).ready(function() {
		$('#tagscontent').disable();
});
//-->
</script>
<?php helper::filterField($field,$fieldlimit); ?>


<form method="post" name="form1" action="">

<div id="tagscontent" class="right_boxtable-responsive">
<table class="table table-hover">
<tbody>

{loop $field $f}
<?php
$name=$f['name'];
if(!isset($data[$name])) $data[$name]='';
if($name==$primary_key) continue; ?>
 
<tr>
<td width="19%" align="right">{$name|lang}</td>
<td width="1%">&nbsp;</td>
<td width="70%">
{form::getform($name,$form,$field,$data)}
</td>
</tr>
 
{/loop}

</tbody>
</table>
</div>
<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<input type="submit" name="submit" value=" 提交 " class="btn btn-primary" />

</form>
<div class="blank30"></div>
</div>
</div>