<?php
include "connection.php";



error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once 'function.php';

$filename = trim($_GET["link"]);
// if file name is not empty
if ($filename != '') {
    // check if given file is a regular file 
    // and also check if file or directory exists
    if (is_file($filename) && file_exists($filename)) {
        // mime_type is a custom function defined in function.php
        $file_mime_type = mime_type($filename);
        if ($file_mime_type != null) {
            // now force download the file.
            header('Pragma: no-cache');
            header('Expires: 0');
            header("Content-type: $file_mime_type");
            header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
            header('Content-Length: ' . filesize($filename));
            header('Connection: close');
            readfile($filename);
        }
    }
}
exit;