<?php
set_time_limit(0);


//string exec ( string $command [, array &$output [, int &$return_var ]] )
//$link = "http://home.popshi.com/docs/data/bootstrap-3.3.7-dist.zip";
//$folder = "docs";
//$output2 = exec("cd $folder; wget $link", $output, $return);
//$output2 = exec("ls -la", $output, $return);


$output2 = exec("mkdir $folder; cd $folder; wget $link;", $output, $return);





?>
