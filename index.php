<?php
    require __DIR__ . '/assets/php/check/maintenanceCheck.php';
    maintenanceCheck();

    require __DIR__ . '/assets/php/tool/time.php';
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
    <meta name="google-site-verification" content="wlAR5BRt28c3PUSeriNwNjI2wz7kHyGtyk06Y3ohOZQ"/>
    <meta name=”description” content=”Minecraftサーバ（情クラ）の管理を行う、会員用サイトです。”>
    <title>情クラサーバ</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/index.css">
</head>

<body>
    <?php require __DIR__ . '/assets/php/component/menu.php'?>
    <?php require __DIR__ . '/assets/php/component/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>

        <?php
            $result = glob('./feed/csv/*');
            foreach (array_reverse($result) as $raw) {
                $count++;
            }

            for($i=$count-1;$i>=0;$i--) {
                $file = fopen("./feed/csv/feed".$i.".csv", "r");
                $j=0;
                while($raw = fgetcsv($file)){
                    $data[$j] = $raw[0];
                    $j++;
                }
                fclose($file);

                echo("<div id=\"feed".$i."\" class=\"home_container\">
                    <img class=\"home_img\" src=\"/feed/img/feed".$i.".jpg\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\">
                    <div class=\"home_title\">".$data[0]."</div>
                    <div class=\"home_contents\">&nbsp;".mb_substr($data[3], 0, 25, "UTF-8")."&nbsp;...</div>
                    <div class=\"home_time_container\">
                        <img class=\"home_time\" src=\"/assets/img/time.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\">
                        <div class=\"home_time_letter\">".timeShow($data[2])."</div>
                    </div>
                        <a class=\"home_time_detail\" href=\"/feed?feed=".$i."\">詳細</a>
                </div>");
            }
        ?>

        <div class="pagetop">↑</div>
        <div class="block"></div>
    </main>
    <script type="text/javascript" src="/assets/js/pageTop.js"></script>
</body>
</html>