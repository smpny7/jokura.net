<?php
    require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
    maintenanceCheck();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>バックアップ履歴</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/history.css">
</head>

<body>
    <?php require __DIR__ . '/../assets/php/component/menu.php'?>
    <?php require __DIR__ . '/../assets/php/component/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
        <div class="block"></div>

        <?php
            require __DIR__ . '/../assets/php/tool/curl.php';
            $curlData = curl("http://jokura-vanila.work/src/showBackupHistory.php?from=jokura.net");
            $ltrim = '/home/jokura_banila/backup/';
            $count = 1;
            foreach (array_reverse($curlData) as $raw) {
                if ($count % 2 == 1) {
                    echo("<div class=\"history_box_left\">
                            <img class=\"history_image\" src=\"/assets/img/history2.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\">
                            <div class=\"history_date\">".date('Y/m/d',strtotime(str_replace('_', ' ', ltrim($raw, $ltrim))))."</div>
                            <div class=\"history_time\">".date('H:i:s',strtotime(str_replace('_', ' ', ltrim($raw, $ltrim))))."</div>
                        </div>");
                } else if($count % 2 == 0){
                    echo("<div class=\"history_box_right\">
                            <img class=\"history_image\" src=\"/assets/img/history2.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\">
                            <div class=\"history_date\">".date('Y/m/d',strtotime(str_replace('_', ' ', ltrim($raw, $ltrim))))."</div>
                            <div class=\"history_time\">".date('H:i:s',strtotime(str_replace('_', ' ', ltrim($raw, $ltrim))))."</div>
                        </div>");
                }
                $count++;
            }
            if($count % 2 == 0){
                echo("<div class=\"history_empty\"></div>");
            }
        ?>

        <div class="block"></div>
    </main>
</body>
</html>
                            <!-- <img class=\"history_delete\" src=\"/assets/img/delete.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\"> -->
