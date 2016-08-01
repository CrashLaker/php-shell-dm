<?php




exec("for file in `ls downloads`; do echo \"\$file `cat downloads/\$file`\"; done;", $output, $return);
//var_dump($output);
if (empty($output)){
	echo 0;
}else{
	foreach($output as $key=>$file){
		$file = explode(" ", $file);
		$currentsize = exec("ls -la temp/".$file[0]." | awk '{print $5}'");
		//echo "currentsize : $currentsize<br>";
		$currentsize = floatval($currentsize);
		$file[1] = floatval($file[1]);
		//echo $currentsize . "/" . $file[1];
		$per = $currentsize/$file[1];
		$per = $per*100;
		echo $file[0] . " - " . ceil($per) . "%";
		if ($key != count($output)-1) echo "\n";
	}
}

?>
