<?php
set_time_limit(0);


//string exec ( string $command [, array &$output [, int &$return_var ]] )
//$link = "http://home.popshi.com/docs/data/bootstrap-3.3.7-dist.zip";
//$folder = "docs";
//$output2 = exec("cd $folder; wget $link", $output, $return);
//$output2 = exec("ls -la", $output, $return);

$id = substr($link, strrpos($link, '/') + 1);
exec("mkdir downloads; touch downloads/$id;");

$output2 = exec("mkdir temp; cd $temp; wget $link;", $output, $return);

exec("rm downloads/$id;");

if ($return == 0){
	exec("mkdir $folder; mv temp/$id $folder/");
}


?>
