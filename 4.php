<?php
//获取句子文件的绝对路径
$path = dirname(__FILE__);
$file = file($path."/4.txt");
//随机读取一行
$arr  = mt_rand( 0, count( $file ) - 1 );
$url  = trim($file[$arr]);
//输出内容
#echo $url;
//303跳转
if (isset($url)) 
{ 
Header("HTTP/1.1 303 See Other"); 
Header("Location: $url"); 
exit; 
} 
?>