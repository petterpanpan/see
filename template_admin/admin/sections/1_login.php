<!-- 组件 -->
                                        <div class="visual-drag-box box-element visual-inline-block">
                                            <a href="#close" class="remove label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>
    <span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
                                            <div class="preview">
                                                <img src="{$skin_admin_path}/images/visual/section/login.png">
												<p>登录</p>
                                            </div>
                                            <div class="view">
                                                <div class=" visual-login  visual-inline-block">
			<div class="codearea">
				{if config::get('site_login')=='1'}
{login_js()}
{/if}
			</div>
			<div class="viewarea">
										<a href="#">注册</a>	/	<a href="#">登录</a>
			</div>
		</div>
                                            </div>
                                        </div>
										<!-- 组件结束 -->