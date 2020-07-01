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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マップ</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/map.css">
</head>

<body>
    <?php require __DIR__ . '/../assets/php/component/menu.php' ?>
    <?php require __DIR__ . '/../assets/php/component/header.php' ?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="map_container">
            <div class="map_update">2020.03.15&nbsp;更新</div>
            <img class="map_overall" src="/map/img/overall.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="region_container">
                <a href="city/?region=shinTairiku" class="map_region map_region_shinTairiku"></a>
                <a href="city/?region=kaiteishinden" class="map_region map_region_kaiteishinden"></a>
                <a href="city/?region=trapTower" class="map_region map_region_trapTower"></a>
                <a href="city/?region=mapTower" class="map_region map_region_mapTower"></a>
                <a href="toshi.php" class="map_region map_region_toshi"></a>
            </div>
            <div class="map_text">エリアを選択してください</div>
        </div>
    </main>
</body>

</html>