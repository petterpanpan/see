<?php
//仅支持以 .htm 结尾的规则 即 .htm$

return

array(
		
		/*手机版*/
		
		//列表
		array('list-wap-(\d+)\.htm$','archive/list/catid/$1/t/wap'),
		array('list-wap-(\d+)_(\d+)\.htm$','archive/list/catid/$1/page/$2/t/wap'),
		
		//内容
		array('show-wap-(\d+)\.htm$','archive/show/t/wap/aid/$1'),
		array('show-wap-(\d+)_(\d+)\.htm$','archive/show/t/wap/aid/$1/page/$2'),
		
		//标签
		array('tags-wap-(.*?)-(\d+)\.htm$','tag/show/t/wap/tag/$1/page/$2'),
		
		//省
		array('arealist-province-(\d+)\.htm$','area/list/province_id/$1'),
		array('arealist-province-(\d+)-(\d+)\.htm$','area/list/province-id/$1/page/$2'),
		
		//市
		array('arealist-city-(\d+)\.htm$','area/list/city_id/$1'),
		array('arealist-city-(\d+)-(\d+)\.htm$','area/list/city-id/$1/page/$2'),
		
		//县
		array('arealist-section-(\d+)\.htm$','area/list/section-id/$1'),
		array('arealist-section-(\d+)-(\d+)\.htm$','area/list/section-id/$1/page/$2'),
		
		//专题
		array('speciallist-(\d+)\.htm$','special/show/spid/$1'),
		array('speciallist-(\d+)-(\d+)\.htm$','special/show/spid/$1/page/$2'),
		
		//分类
		array('typelist-(\d+)\.htm$','type/list/typeid/$1'),
		array('typelist-(\d+)-(\d+)\.htm$','type/list/typeid/$1/page/$2'),
		
		//列表
		array('list-(\d+)\.htm$','archive/list/catid/$1'),
		array('list-(\d+)-(\d+)\.htm$','archive/list/catid/$1/page/$2'),
		
		//内容
		array('show-(\d+)\.htm$','archive/show/aid/$1'),
		array('show-(\d+)-(\d+)\.htm$','archive/show/aid/$1/page/$2'),
		
		//标签
		array('tags-(.*?)-(\d+)\.htm$','tag/show/tag/$1/page/$2'),
		
		
);

