<?php




exec("ls downloads;", $output, $return);

if (empty($output)){
	echo 0;
}else{
	$output = implode("\n", $output);
	echo $output;
}

?>
