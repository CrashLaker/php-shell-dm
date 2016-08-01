<?php
set_time_limit(0);


//string exec ( string $command [, array &$output [, int &$return_var ]] )
$link = "http://home.popshi.com/docs/data/bootstrap-3.3.7-dist.zip";
$folder = "docs";
//$output2 = exec("cd $folder; wget $link", $output, $return);
//$output2 = exec("ls -la", $output, $return);
$output2 = exec("dfasdf", $output, $return);

echo "<pre>";
var_dump($output2);
var_dump($output);
var_dump($return);
echo "</pre>";




?>
