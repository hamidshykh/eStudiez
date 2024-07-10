<?php

$file = $_GET['file'] .".pdf" ;
header("content-disposition: attachment; filename=" . urlencode($file));
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($file));

$fb = fopen($file, "R");
while(!feof($fb)){
    echo fread($fb, 8192);
    flush();
}

fclose($fb);

?>
