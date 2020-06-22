<?php
$path = ROOT.'/template/'.config::get('template_dir').'/annountag/';
$tagfileList = listDirOne($path, 'html');
$names = array(
    'list_1.html' => '列表样式1',
    'list_2.html' => '列表样式2',
);
$array = array();
foreach($tagfileList as $value){
    $path = str_replace('\\', '/', $path);
    $value = str_replace($path, '', $value);
    if(substr($value,0,4)=='list'){
        $array[$value] = isset($names[$value]) && $names[$value] != '' ? $value.'('.$names[$value].')' : $value;
    }
}
return $array;