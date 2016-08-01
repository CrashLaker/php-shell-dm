<?php


$link = $_GET["link"];
$folder = $_GET["folder"];

include("download_file.php");

if ($return != 0){
	echo "ERROR!<br>";
}else{
	echo "Ok!<br>";
}






?>
