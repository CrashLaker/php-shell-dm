<?php



$link = "http://img13.deviantart.net/3f9c/i/2015/169/c/4/china__zhongguo____pinyin_academy_by_owenprescott-d8xtv6g.jpg";
$folder = "image";

include("download_file.php");

if ($return != 0){
	echo "ERROR!<br>";
}else{
	echo "Ok!<br>";
}






?>
