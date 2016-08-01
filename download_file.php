<?php
set_time_limit(0);


//string exec ( string $command [, array &$output [, int &$return_var ]] )
//$link = "http://home.popshi.com/docs/data/bootstrap-3.3.7-dist.zip";
//$folder = "docs";
//$output2 = exec("cd $folder; wget $link", $output, $return);
//$output2 = exec("ls -la", $output, $return);

$id = substr($link, strrpos($link, '/') + 1);

$filesize = getfilesize($link);

exec("ls downloads/$id;", $output, $return);

if ($return == 0) goto end;

exec("mkdir downloads; echo $filesize > downloads/$id;");


$output2 = exec("mkdir temp; cd temp; wget -nv $link 2>&1 /dev/null;", $output, $return);

exec("rm downloads/$id;");

if ($return == 0){
	exec("mkdir $folder; mv temp/$id $folder/");
}


end:






function getfilesize($file){
$ch = curl_init($file);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    $data = curl_exec($ch);
    curl_close($ch);

    if (preg_match('/Content-Length: (\d+)/', $data, $matches)) {

        // Contains file size in bytes
        $contentLength = (int)$matches[1];

    }
	return $contentLength;
}

?>
