<?php
    require_once __DIR__ . '/../../assets/php/state.php';
    require_once __DIR__ . '/../../assets/php/check/powerCheck.php';

    if (!$maintenanceMode) {

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

        function processCheck() {
            $file = __DIR__ . '/../../assets/php/check/temp/processing.txt';
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
        }

        if (power() == 1 && processCheck() && $_GET['from'] == 'jokura.net') {
            readfile("http://jokura-vanila.work/src/backup.php?from=jokura.net");
        }
    }
?>