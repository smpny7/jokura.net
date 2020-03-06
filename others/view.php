<?php
    require '../assets/php/curl.php';
    $curlData = curl("http://jokura-vanila.work/src/showBackupHistory.php?from=jokura.net");

    foreach ($curlData as $raw) {
        echo $raw."<br>";
    }
?>