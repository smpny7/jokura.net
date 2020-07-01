<?php
require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
maintenanceCheck();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160052296-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-160052296-1');
    </script>

    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロセス拒否</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/backup.css">
</head>

<body>
    <?php require __DIR__ . '/../assets/php/component/menu.php' ?>
    <?php require __DIR__ . '/../assets/php/component/header.php' ?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="backup_box">
            <div class="backup_title">プロセス拒否</div>
            <img class="backup_img" src="/assets/img/processReject.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="backup_contents">サーバが起動していないため<br>バックアップが実行できませんでした。</div>
            <a href="/"><img class="backup_yes" src="/assets/img/yes.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
        </div>
        <div class="block"></div>
    </main>
</body>

</html>