<?php
    $filepath = "./../assets/download/feed.zip";
    header("Content-Type: application/force-download");
    header("Content-disposition: attachment; filename=\"".basename($filepath)."\"");
    readfile($filepath);
    exit();
?>