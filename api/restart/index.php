<?php
    require_once __DIR__ . '/../../assets/php/state.php';
    require_once __DIR__ . '/../../assets/php/check/powerCheck.php';

    if (!$maintenanceMode) {
        echo "{ \"restart\": [ { \"able\": ";

        function readTime($file) {
            $fp = fopen($file, 'r');
            $data = fread($fp, filesize($file));
            fclose($fp);
            return $data;
        }

        function processCheck() {
            $file = __DIR__ . '/../../assets/php/check/temp/processing.txt';
            if (!file_exists($file)) {
                return 1;
            } else {
                if (strtotime(date('Y-m-d H:i:s')) - strtotime(readTime($file)) < 90) {
                    return 0;
                } else {
                    return 1;
                }
            }
        }

        if (power() == 0) {
            echo "0";
        } else if (processCheck()) {
            echo "1";
        } else {
            echo "0";
        }

        if ($_GET['check']) {
            echo ", \"check\": 1";
        } else {
            echo ", \"check\": 0";
        }

        echo " } ] }";
    }
?>