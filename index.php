<?php
    include './assets/php/maintenance.php';
    if(state() && !isset($_GET['root'])) {
        header('Location: /maintenance');
        exit;
    }

    include './assets/php/time.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>情クラサーバ</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/index.css">
</head>

<body>
    <?php include './assets/php/header.php'?>

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

                echo("<div class=\"home_container\">
                    <img class=\"home_img\" src=\"/feed/img/feed".$i.".jpg\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\">
                    <div class=\"home_title\">".$data[0]."</div>
                    <div class=\"home_contents\">&nbsp;".mb_substr($data[3], 0, 25, "UTF-8")."&nbsp;...</div>
                    <div class=\"home_time_container\">
                        <img class=\"home_time\" src=\"/assets/img/time.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\">
                        <div class=\"home_time_letter\">".timeShow($data[2])."</div>
                    </div>
                        <a class=\"home_time_detail\" href=\"/feed/feed".$i.".php\">詳細</a>
                </div>");

                fclose($file);
            }
        ?>

        <div class="block"></div>
        <div class="pagetop">↑</div>
    </main>

    <?php include './assets/php/menu.php' ?>
    <script type="text/javascript" src="/assets/js/pageTop.js"></script>
</body>
</html>
