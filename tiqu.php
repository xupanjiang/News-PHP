<?php
$str = file_get_contents("http://localhost:8088/news/newsdetail.php?id=189");
var_dump(gPic_Url($str));
 
//提取URL
function gFile_Url($content){
    preg_match_all("'<\s*a\s.*?href\s*=\s*([\"\'])?(?(1)(.*?)\\1|([^\s\>]+))[^>]*>?(.*?)</a>'isx",$content,$links); 
    while(list($key,$val) = each($links[2])) { 
        if(!empty($val)) 
        $match[] = $val; 
    } 
    while(list($key,$val) = each($links[3])) { 
        if(!empty($val)) 
        $match[] = $val; 
    } 
    return $match; 
}
//提取图片
function gPic_Url($content){
    $pattern搜索="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/";//正则
    preg_match_all($pattern,$content,$match);//匹配图片
    return $match[1];//返回所有图片的路径
}
?>