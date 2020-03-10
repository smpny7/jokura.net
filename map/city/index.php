<?php
    require __DIR__ . '/../../assets/php/check/maintenanceCheck.php';
    maintenanceCheck();

    $file = fopen("./csv/".$_GET['name'].".csv", "r");
    $i=0; $j=0;
    while($line = fgetcsv($file)){
        foreach ($line as $raw) {
            $city[$i][$j] = $raw;
            $j++;
        }
        $j=0; $i++;
    }
    fclose($file);
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
    <title>マップ（<?php echo $city[0][0]?>）</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/city.css">
</head>

<body>
    <?php require __DIR__ . '/../../assets/php/component/menu.php'?>
    <?php require __DIR__ . '/../../assets/php/component/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="city_container">
            <a href="/map"><img class="city_back" src="/assets/img/back.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
            <div class="city_title"><?php echo $city[0][0]?></div>
            <div class="city_update"><?php echo $city[0][1]?>&nbsp;更新</div>
            <img class="city_img" src="/map/city/img/<?php echo $_GET['name']."/".$city[0][2]?>" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
        </div>

        <a href="/map/building/?name=<?php echo $city[1][1]?>" class="city_list_a">
            <div class="city_list_container">
                <img class="city_list_img" src="/map/city/img/<?php echo $_GET['name']."/".$city[1][2]?>" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="city_list_title"><?php echo $city[1][0]?></div>
                <div class="city_list_detail_container">
                    <div class="city_list_detail_text">詳細を見る</div>
                    <img class="city_list_detail_img" src="/assets/img/next.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                </div>
            </div>
        </a>

        <a href="/map/building/?name=<?php echo $city[1][1]?>" class="city_list_a">
            <div class="city_list_container">
                <img class="city_list_img" src="/map/city/img/<?php echo $_GET['name']."/".$city[1][2]?>" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="city_list_title"><?php echo $city[1][0]?></div>
                <div class="city_list_detail_container">
                    <div class="city_list_detail_text">詳細を見る</div>
                    <img class="city_list_detail_img" src="/assets/img/next.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                </div>
            </div>
        </a>

        <a href="/map/building/?name=<?php echo $city[1][1]?>" class="city_list_a">
            <div class="city_list_container">
                <img class="city_list_img" src="/map/city/img/<?php echo $_GET['name']."/".$city[1][2]?>" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="city_list_title"><?php echo $city[1][0]?></div>
                <div class="city_list_detail_container">
                    <div class="city_list_detail_text">詳細を見る</div>
                    <img class="city_list_detail_img" src="/assets/img/next.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                </div>
            </div>
        </a>

        <div class="pagetop">↑</div>
        <div class="block"></div>
    </main>
    <script type="text/javascript" src="/assets/js/pageTop.js"></script>
</body>
</html>