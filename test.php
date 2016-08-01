
<?php
$file = 'http://example.com/file.zip';
$file = "http://julienleonard.com/wp-content/uploads/2015/06/zhongguo.jpg";
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

echo $contentLength;

?>
