<?php


$folder = $_GET["folder"];
$file = file("folders.txt");
$do = 1;
foreach($file as $line){
	if ($line == $folder) {
		$do = 0;
		break;
	}
}

if ($do){
	file_put_contents("folders.txt", $folder."\n", FILE_APPEND);
}

?>
