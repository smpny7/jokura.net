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
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-160052296-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マップ</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/map.css">
</head>

<body>
    <?php require __DIR__ . '/../assets/php/component/menu.php'?>
    <?php require __DIR__ . '/../assets/php/component/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="map_container">
            <div class="map_update">2020.03.15&nbsp;更新</div>
            <img class="map_overall" src="/map/overall.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <a href="city/?name=shintoshi" class="map_region_shintoshi"></a>
            <a href="/" class="map_region_kaiteishinden"></a>
            <a href="/" class="map_region_traptower"></a>
            <a href="/" class="map_region_mura"></a>
            <a href="/" class="map_region_maptower"></a>
            <a href="/" class="map_region_toshi"></a>
            <div class="map_text">地域を選択してください</div>
        </div>
    </main>
</body>
</html>