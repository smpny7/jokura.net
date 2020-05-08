<?php
    require_once __DIR__ . '/../../assets/php/state.php';
    if (!$maintenanceMode) {
        echo "{ \"top\": [ { \"state\": ";

        require_once __DIR__ . '/../../assets/php/check/powerCheck.php';
        if (power()) {
            $Query = require_once __DIR__ . '/../../assets/php/query/query.php';
            if ($Query['description']['text'] == "") {
                echo "2";
            } else {
                echo "1";
            }
        } else {
            echo "3";
        }

        echo ", \"backup\": \"";

        require __DIR__ . '/../../assets/php/tool/curl.php';
        $curlData = curl("http://jokura-vanila.work/src/showBackupHistory.php?from=jokura.net");
        $ltrim = '/home/jokura_banila/backup/';
        echo date('Y/m/d',strtotime(str_replace('_', ' ', ltrim(current(array_reverse($curlData)), $ltrim)))) . " " . date('H:i:s',strtotime(str_replace('_', ' ', ltrim(current(array_reverse($curlData)), $ltrim))));

        echo "\", \"online\": ";

        if($Query['players']['max'] == "") {
            echo "0";
        } else {
            echo htmlspecialchars($Query['players']['online']);
        }

        $array = array("Chazuke_0_", "chishige1217200", "fkddn123", "kit130101", "meromin007", "RyuMura", "suzumetengu", "TUIUS", "Xx_piroboy_xX", "YuuYuu523");

        foreach($array as $raw) {
            echo ", \"" . $raw . "\": ";

            $Query = require '../../assets/php/query/query.php';
            for($i=0; $i<12; $i++) {
                if($Query['players']['sample'][$i]['name'] == $raw) {
                    $offline = 0;
                    echo "1";
                    break;
                } else {
                    $offline = 1;
                }
            }
            if($offline == 1) {
                echo "0";
            }
        }

        echo " } ] }";
    }
?>