<?php
    require './curl.php';
    $curlData = curl("http://jokura-vanila.work/src/showBackupHistory.php");

    foreach ($curlData as $raw) {
        echo $raw."<br>";
    }
?>