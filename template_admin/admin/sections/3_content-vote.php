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
		<img src="{$skin_admin_path}/images/visual/section/vote.png">
		<p>
			内容投票
		</p>
	</div>
	<div class="view">
		<div class=" visual-conent-title">
			<div class="codearea">
				<p class="content-vote">
					#[#vote_js($archive[aid])#]#
				</p>
				<div class="clearfix">
				</div>
			</div>
			<div class="viewarea">
				


<h3><a>Vote</a>&nbsp;&nbsp;<small>投票</small></a></h3>
					<span>——</span>
					
					<hr class="featurette-divider"/>

				<div class="radio">
					<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    投票一
					</label>
				</div>
				<div class="radio">
					<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    投票二
					</label>
				</div>
				<div class="radio">
					<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    投票三
					</label>
				</div>
				<div class="blank10">
				</div>
				<input type="submit" name="submit" value="	提交	" class="btn btn-primary">
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 模块样例一结束 -->