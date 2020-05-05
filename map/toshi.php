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
    <title>マップ（都市）</title>
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
            <div class="map_back_container"><a href="/map" class="map_back">全体図へ</a></div>
            <div class="map_update">2020.03.15&nbsp;更新</div>
            <img class="map_overall" src="/map/img/overall_toshi.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="region_container">
                <a href="city/?region=camp" class="map_region map_region_camp"></a>
                <a href="city/?region=hotelTown" class="map_region map_region_hotelTown"></a>
                <a href="city/?region=sabaku" class="map_region map_region_sabaku"></a>
                <a href="city/?region=shigechikaJo" class="map_region map_region_shigechikaJo"></a>
                <a href="city/?region=shinToshi" class="map_region map_region_shinToshi"></a>
            </div>
            <div class="map_text">エリアを選択してください</div>
        </div>
    </main>
    <script type="text/javascript" src="/assets/js/landscape.js"></script>
    <img id="landscape" src="/assets/img/landscape.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
</body>
</html>