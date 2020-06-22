<!-- 组件 -->
                                        <div class="visual-drag-box box-element">
                                           <a href="#close" class="remove label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>
   <span class="drag drag-container label label-default btn-sections-config" data-target="#div-config" role="button" data-toggle="modal" title="层属性"><i class="glyphicon glyphicon-cog"></i></span>
                                            <div class="preview">
                                                <img src="{$skin_admin_path}/images/visual/section/subscription.png">
												<p>邮件订阅</p>
                                            </div>
                                            <div class="view">
				<div class=" visual-subscription">
                                                <form name="listform" id="listform"  action="<?php echo url('archive/email');?>" method="post">
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-10">
                                                        <div class="input-group">
                                                            <input type="text"  name="email" id="email" value=""  class="form-control" placeholder="请输入订阅邮箱！">
                                                            <span class="input-group-btn">
<button class="btn btn-default" name="submit" type="submit">提交</button>
</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1"></div>
                                                </form>
												<div class="clearfix"></div>
								</div>
                                            </div>
                                        </div>
										<!-- 组件结束 -->