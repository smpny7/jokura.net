<?php

include '../assets/php/maintenance.php';
if(state() && !isset($_GET['root'])) {
    header('Location: /maintenance');
    exit;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ピクチャ</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/gallery.css">
</head>

<body>
    <?php include '../assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
        <div class="block"></div>
        <?php
            $result = glob('./img/*');
            foreach (array_reverse($result) as $raw) {
                preg_match("/(.*)(?:\.([^.]+$))/",ltrim($raw, './img/'),$filename);
                $number = mb_substr($filename[1], 0, 3);
                $photographer = mb_substr($filename[1], 4);
                echo $number.$photographer."<br>";

            }
        ?>
        <div class="block"></div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
