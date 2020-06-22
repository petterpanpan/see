<div class="sidebar-nav-margin-input icon-config form-inline">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
		<a href="#icon-config-attribute" aria-controls="icon-config-attribute" role="tab" data-toggle="tab">
								属性
		</a>
		</li>
		<li role="presentation">
		<a href="#icon-config-position" aria-controls="icon-config-position" role="tab" data-toggle="tab">
								定位
		</a>
		</li>
		<li role="presentation">
		<a href="#icon-config-margin" aria-controls="icon-config-margin" role="tab" data-toggle="tab">
								边距
		</a>
		</li>
		
	</ul>
	<!-- Tab panes -->
	<div class="tab-content">
		<!-- 属性 -->
		<div role="tabpanel" class="tab-pane active" id="icon-config-attribute">
			<div class="blank20">
			</div>
			<h5 class="tab_1_h5">
								选择图标
			</h5>
			<input type="text" class="selector" id="cb_iconfont" name="cb_iconfont"/>
			<div class="blank20">
			</div>
			<h5 class="tab_1_h5">
								图标大小
			</h5>
			<input type="input" name="font-size" id="font-size" value="" class="config">
							PX
							<button id="btn_clsFontZize" class="btn btn-default">
                        <i class="glyphicon-remove glyphicon" title="删除">
                        </i>
                    </button>
			<div class="blank20">
			</div>
			<h5 class="tab_1_h5">
								图标颜色
			</h5>
			<div class="input-group" style="width: 200px" id="color_Icon">
				<input type="text" class="form-control">
				<div class="input-group-btn">
					<button class="btn btn-default color_addion">
					<i class="glyphicon glyphicon-adjust">
					</i>
					</button>
					<button id="btn_clsIconColor" class="btn btn-default">
					<i class="glyphicon-remove glyphicon" title="删除">
					</i>
					</button>
				</div>
			</div>
		</div>
		<!-- 定位 -->
		<div role="tabpanel" class="tab-pane" id="icon-config-position">
			<div class="blank20">
			</div>
			<h5 class="tab_1_h5">
								浮动
			</h5>
			<div class="icon-float">
				<a href="#" rel="none" title="默认">
									默认
				</a>
	
								&nbsp;
				<a href="#" rel="left" title="左">
									居左
				</a>
								&nbsp;
				<a href="#" rel="right" title="绝对">
									居右
				</a>
								&nbsp;
				<a href="#" rel="inherit" title="继承">
									继承
				</a>
								&nbsp;
			</div>
			<div class="blank20">
            </div>
            <h5 class="tab_1_h5">
                清除
            </h5>
            <div class="div-clear">
                <a href="#" rel="none" title="默认">
                    默认
                </a>
                &nbsp;
                <a href="#" rel="both" title="清除">
                    清除
                </a>
                &nbsp;
                <a href="#" rel="left" title="左">
                    清左
                </a>
                &nbsp;
                <a href="#" rel="right" title="绝对">
                    清右
                </a>
                &nbsp;
                <a href="#" rel="inherit" title="继承">
                    继承
                </a>
                &nbsp;
            </div>
			<div class="blank20">
			</div>
			<h5 class="tab_1_h5">
								定位
			</h5>
			<div class="div-text-typesetting icon-position">
				<a href="#" rel="static" title="默认">
									static
				</a>
								&nbsp;
				<a href="#" rel="absolute" title="绝对">
									absolute
				</a>
								&nbsp;
				<a href="#" rel="fixed" title="绝对">
									fixed
				</a>
								&nbsp;
				<a href="#" rel="relative" title="相对">
									relative
				</a>
								&nbsp;
				<a href="#" rel="inherit" title="继承">
									inherit
				</a>
								&nbsp;
			</div>
			<div class="blank20">
			</div>
			<h5 class="tab_1_h5">
								层级
			</h5>
			<div class="blank10">
			</div>
							Z-index：
			<input type="input" name="z-index" id="z-index" value="" class="config">
			<div class="blank20">
			</div>
			<h5 class="tab_1_h5">
								位置
			</h5>
			<div class="row">
				<div class="col-md-6">
									上：
					<input type="input" name="top" id="top" value="0" class="config">
									PX
				</div>
				<div class="col-md-6">
									下：
					<input type="input" name="bottom" id="bottom" value="0" class="config">
									PX
				</div>
				<div class="clearfix blank10">
				</div>
				<div class="col-md-6">
									左：
					<input type="input" name="left" id="left" value="0" class="config">
									PX
				</div>
				<div class="col-md-6">
									右：
					<input type="input" name="right" id="right" value="0" class="config">
									PX
				</div>
			</div>
		</div>
		<!-- 定位 -->
		<!-- 边距 -->
		<div role="tabpanel" class="tab-pane" id="icon-config-margin">
			<div class="blank20">
			</div>
			<h5 class="tab_1_h5">
								内边距
			</h5>
			<div class="row">
				<div class="col-md-6">
									上：
					<input type="input" name="padding-top" id="padding-top" value="0" class="config">
									PX
				</div>
				<div class="col-md-6">
									下：
					<input type="input" name="padding-bottom" id="padding-bottom" value="0" class="config">
									PX
				</div>
				<div class="clearfix blank10">
				</div>
				<div class="col-md-6">
                    左：
					<input type="input" name="padding-left" id="padding-left" value="0" class="config">
                    PX
				</div>
				<div class="col-md-6">
                    右：
					<input type="input" name="padding-right" id="padding-right" value="0" class="config">
                    PX
				</div>
			</div>
			<div class="blank30">
			</div>
			<h5 class="tab_1_h5">
                外边距
			</h5>
			<div class="row">
				<div class="col-md-6">
                    上：
					<input type="input" name="margin-top" id="margin-top" value="0" class="config">
                    PX
				</div>
				<div class="col-md-6">
                    下：
					<input type="input" name="margin-bottom" id="margin-bottom" value="0" class="config">
                    PX
				</div>
				<div class="clearfix blank10">
				</div>
				<div class="col-md-6">
                    左：
					<input type="input" name="margin-left" id="margin-left" value="0" class="config">
                    PX
				</div>
				<div class="col-md-6">
                    右：
					<input type="input" name="margin-right" id="margin-right" value="0" class="config">
                    PX
				</div>
			</div>
		</div>
		<!-- 边距 -->
		
	</div>
</div>