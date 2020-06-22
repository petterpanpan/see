<?php
class plugins {
	static function categoryinfo($id) {
		if ($id == 0) {
			$category = category::getInstance ();
			if (is_array ( $id ))
				$id = $id ['catid'];
			$categories = $category->son ( $id );
			$cats = array ();
			foreach ( $categories as $catid ) {
				$_category = $category->category [$catid];
				if ($stype && ! preg_match ( '/-/', $stype ) && $_category ['stype'] != $stype)
					continue;
				if ($stype && preg_match ( '/-/', $stype ) && '-' . $_category ['stype'] == $stype)
					continue;
				$_category ['url'] = category::url ( $_category ['catid'] );
				$cats [] = $_category;
			}
			return $cats;
		}
		$category = category::getInstance ();
		$catinfo [] = $category->category [$id];
		$catinfo [0] ['url'] = category::url ( $id );
		return $catinfo;
	}
	
	public static function specialinfo($id,$_spname='1',$_subtitle='1',$_spcontent='1',$_len=0,$_spimage=1) {
	    //var_dump($_len);
		$special = special::getInstance();
		$fields = 'spid,adddate';
		if($_spname){
		    $fields .= ",title";
        }
        if($_subtitle){
            $fields .= ",subtitle";
        }
        if($_spcontent && $_len != '0'){
            $fields .= ",description";
        }
        //var_dump($_spcontent);
        if($_spimage){
            $fields .= ",banner";
        }
		$where = null;
		if($id) {
            $where = $id;
        }
		$rows = $special->getrows($where,0,'listorder=0,listorder asc,spid desc',$fields);
		//var_dump($rows);
		if(is_array($rows) && !empty($rows)){
		    foreach ($rows as $k => $row){
		        $row['url'] = special::url($row['spid'],$row['ishtml']);
		        //var_dump($row);
		        if($_spcontent && $_len > 0){
		            //var_dump($row);
		            $row['description'] = tool::cn_substr(strip_tags($row['description']),$_len,'UTF-8',false);
		            //var_dump($row);
                }
		        $rows[$k] = $row;
            }
        }
		//$catinfo[0]['url'] = special::url($id,$special->getishtml($id));
		return $rows;
	}
	
	public static function typeinfo($id) {
		$type = type::getInstance ();
		if (is_array ( $id ))
			$id = $id ['typeid'];
		
		$typeinfo [] = $type->type [$id];
		$typeinfo [0] ['url'] = type::url ( $id );
		if(!$typeinfo){
			return;
		}
		
		$types = $type->son ( $id );
		$tys = array ();
		foreach ( $types as $typeid ) {
			$_type = $type->type [$typeid];
			if ($stype && ! preg_match ( '/-/', $stype ) && $_type ['stype'] != $stype)
				continue;
			if ($stype && preg_match ( '/-/', $stype ) && '-' . $_type ['stype'] == $stype)
				continue;
			$_type ['url'] = type::url ( $_type ['typeid'] );
			$tys [] = $_type;
		}
		if(!empty($tys)){
			$typeinfo = array_merge($typeinfo,$tys);
		}
		//var_dump($typeinfo);
		return $typeinfo;
	}
}