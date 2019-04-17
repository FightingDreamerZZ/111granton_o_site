<?php
$contentType = mime_content_type('../downloads/download_files/'.$_GET['file']);
//$file = basename($_GET['file']);
$file = '../downloads/download_files/'.$_GET['file'];

if(!file_exists($file)){ // file does not exist
    die('file not found');
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=".$_GET['file']);
    header("Content-Type: ".$contentType);
//    header("Content-Type: application");
//        echo $contentType;

    header("Content-Transfer-Encoding: binary");

    // read the file from disk
    readfile($file);
}