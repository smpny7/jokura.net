<?php
    $file = 'temp/processing.txt';

    function writeNow($file) {
        $fp = fopen($file, 'c+');
        fwrite($fp, date('Y-m-d H:i:s'));
        fclose($fp);
    }

    function readTime($file) {
        $fp = fopen($file, 'r');
        $data = fread($fp, filesize($file));
        fclose($fp);
        return $data;
    }

    if (!file_exists($file)) {
        writeNow($file);
        return 1;
    } else {
        if (strtotime(date('Y-m-d H:i:s')) - strtotime(readTime($file)) < 90) {
            return 0;
        } else {
            writeNow($file);
            return 1;
        }
    }
?>