<div class="lyrow position-move ui-draggable box-layout">
	<span class="drag drag-container label label-default div-up" title="上移"><i class="glyphicon glyphicon-arrow-up">
                                                </i></span>

	<span class="drag drag-container label label-default div-down" title="下移"><i class="glyphicon glyphicon-arrow-down">
                                                </i></span>

	<a href="#close" class="remove remove-container label label-danger" title="删除">
        <i class="glyphicon-remove glyphicon">
        </i>
    </a>

	<span class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal" title="层属性">
        <i class="glyphicon glyphicon-cog" title="层属性"></i>		层属性
    </span>
	
	<div class="preview">
		<img src="{$skin_admin_path}/images/visual/section/nav.png">
		<p>导航</p>
	</div>
	<div class="view" contenteditable="true">

		<div class="container-fluid clearfix column navbar navbar-default">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">{get('sitename')}</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<div class="box box-element box-pic ui-draggable top-nav-right navbar-right">
    <a href="#close" class="remove label label-danger">
        <i class="glyphicon-remove glyphicon" title="删除">
        </i>
    </a>
	<span class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal">
        <i class="glyphicon glyphicon-cog" title="层属性"></i>	层属性
    </span>
	<div class="view">
<div class="top-nav-right navbar-right">
<ul>
<li id="fat-menu" class="dropdown">
<a class="dropdown-toggleglyphicon glyphicon glyphicon-globe" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
<ul class="dropdown-menu" aria-labelledby="drop3">
<li><a id="StranLink" name="StranLink">繁體</a></li>
<div class="codearea">
				#[#loop getwebsite() $d#]#
<li><a href="{$d['url']}" target="_blank">#[#$d['name']#]#</a></li>
#[#/loop#]#
			</div>
			<div class="viewarea">
				<li>
							<a href="http://hk.cmseasy.com/" target="_blank">香港网站</a>
						</li>
						<li>
							<a href="http://test.cmseasy.cn/" target="_blank">公司网站</a>
						</li>
			</div>
</ul>
</li>
<li class="glyphicon glyphicon-shopping-cart nav-shopping"><a href="{url('archive/orders',true)}" target="_blank"></a></li>
<li class="glyphicon glyphicon-search" data-toggle="modal" data-target=".bs-example-modal-lg-search" aria-hidden="true"></li>
</ul>
</div>
</div>
</div>

		<div class="container">






<div class="box box-element box-pic ui-draggable navbar-brand">
    <a href="#close" class="remove label label-danger">
        <i class="glyphicon-remove glyphicon" title="删除">
        </i>
    </a>
    <span class="drag drag-container label label-default div-drag" data-target="#div-config" role="button" data-toggle="modal">
        <i class="glyphicon glyphicon-cog" title="层属性"></i>	层属性
    </span>





    <span class="configuration configuration-pic"><a class="btn btn-config" data-target="#imageModel" role="button" data-toggle="modal" href="#">
                                                        <i class="glyphicon glyphicon-picture" title="图片">
        </i>
                                                    </a></span>

    <div class="preview">
        <img src="./images/logo.png">
        <p>图片</p>
    </div>
    <div class="view">
        <div class="row" style="float: left;">
			<div class="codearea">
				<a href="#[#$site_url#]#" class="navbar-brand text-center"><img src="#[#get('site_logo')#]#" class="img-responsive" alt="#[#get('sitename')#]#" /></a>
			</div>
			<div class="viewarea">
				<a href="#" class="navbar-brand text-center"><img src="{$skin_admin_path}/images/visual/section/logo.png"></a>
			</div>
        </div>
    </div>
</div>


<div class="nav" rel="nav(1)">
						{nav(1)}
		</div>



</div>
		</div>
	</div>
</div>