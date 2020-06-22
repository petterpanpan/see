<!-- 模块样例一 -->
<div class="visual-drag-box box-element">
	<a href="#close" class="remove label label-danger" title="删除">
	<i class="glyphicon-remove glyphicon">
	</i>
	</a>
	<span class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal" title="层属性">
	<i class="glyphicon glyphicon-cog"></i>
	</span>
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/form.png">
		<p>
			内容自定义表单
		</p>
	</div>
	<div class="view">
		<div class=" visual-conent-form">
			<div class="codearea">
		

				<!-- 自定义表单开始 -->
#[#if $archive['showform']#]#
		#[#template '../user/myform/nrform.html'#]#
		<div class="clearfix">
				</div>
		#[#else#]#
#[#lang(noet)#]#
#[#lang('custom_fields')#]#
<div class="clearfix">
				</div>
#[#/if#]#
		<!-- 自定义表单结束 -->

				<div class="clearfix">
				</div>
			</div>
			<div class="viewarea">
											
<div class="t_1">
<div>
<h3>应聘</h3>
<p>Form List</p>
</div>
</div>
<div class="blank30"></div>

<div style="padding-bottom:20px;">
	<div style="background:#2C74C7; height:2px; font-size:2px;">
	</div>
	<table class="table table-hover table-striped" align="center">
	<tr>
		<td class="left">
			表单框
		</td>
		<td>
			<input type="text" value="" class="form-control"/>
		</td>
	</tr>
	<tr>
		<td class="left">
			表单选择
		</td>
		<td>
			<select class="form-control" class="form-control select">
				<option value="1">选择一</option>
				<option value="2">选择二</option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="left">
			表单框
		</td>
		<td>
			<input type="text" value="" class="form-control"/>
		</td>
	</tr>
	<tr>
		<td class="left">
			表单框
		</td>
		<td>
			<input type="text" value="" class="form-control"/>
		</td>
	</tr>
	<tr>
		<td class="left">
			描述框
		</td>
		<td>
			<textarea class="form-control textarea"></textarea>
		</td>
	</tr>
	<input type='hidden' id="aid" name="aid" value="50"/>
	<tr>
		<td>
		</td>
		<td align="left">
			<input type="submit" name="submit" value=" 提交 " class="btn btn-primary">
		</td>
	</tr>
	</table>
</div>

				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->