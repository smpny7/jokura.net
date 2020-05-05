<?php
    require __DIR__ . '/../../assets/php/check/maintenanceCheck.php';
    maintenanceCheck();

    require __DIR__ . '/../../assets/php/check/regionCheck.php';
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
    <title>マップ（<?php echo regionName($_GET['region'])?>）</title>
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
            <a href="/map<?php if(toshiCheck($_GET['region'])){echo "/toshi.php";}?>"><img class="city_back" src="/assets/img/back.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
            <div class="city_title"><?php echo regionName($_GET['region'])?></div>
            <img class="city_img" src="/map/others/<?php echo $_GET['region']."/Top_".$_GET['region']?>.png"  onerror="this.src='/map/others/<?php echo $_GET['region']."/Top_".$_GET['region']?>.jpg';" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
        </div>

        <?php
            $result = glob('../others/'.$_GET['region'].'/*.csv');
            foreach ($result as $raw) {
                $str = "../others/".$_GET['region']."/";
                $raw = str_replace('.csv', '', str_replace($str, '', $raw));

                $file = fopen("../others/".$_GET['region']."/".$raw.".csv", "r");
                $i=0;
                while($line = fgetcsv($file)){
                    $data[$i] = $line[0];
                    $i++;
                }
                fclose($file);

                echo("<a href=\"/map/building/?region=".$_GET['region']."&name=".$raw."\" class=\"city_list_a\">
                        <div class=\"city_list_container\">
                            <img class=\"city_list_img\" src=\"/map/others/".$_GET['region']."/".$data[1]."\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\">
                            <div class=\"city_list_title\">".$data[0]."</div>
                            <div class=\"city_list_detail_container\">
                                <div class=\"city_list_detail_text\">詳細を見る</div>
                                <img class=\"city_list_detail_img\" src=\"/assets/img/next.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\">
                            </div>
                        </div>
                    </a>");
            }
        ?>

        <div class="pagetop">↑</div>
        <div class="block"></div>
    </main>
    <script type="text/javascript" src="/assets/js/landscape.js"></script>
    <img id="landscape" src="/assets/img/landscape.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
    <script type="text/javascript" src="/assets/js/pageTop.js"></script>
</body>
</html>