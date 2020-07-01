<?php
require __DIR__ . '/../../assets/php/check/maintenanceCheck.php';
maintenanceCheck();

$file = fopen("./../others/" . $_GET['region'] . "/" . $_GET['name'] . ".csv", "r");
$i = 0;
while ($raw = fgetcsv($file)) {
    $building[$i] = $raw[0];
    $i++;
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

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-160052296-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マップ（<?php echo str_replace('<br>', '', $building[0]) ?>）</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/building.css">
</head>

<body>
    <?php require __DIR__ . '/../../assets/php/component/menu.php' ?>
    <?php require __DIR__ . '/../../assets/php/component/header.php' ?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="city_container">
            <a href="/map/city/?region=<?php echo $_GET['region'] ?>" class="city_back_a"><img class="city_back" src="/assets/img/back.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
            <div class="city_title"><?php echo str_replace('<br>', '', $building[0]) ?></div>
            <img class="city_img" src="/map/others/<?php echo $_GET['region'] . "/" . $building[1] ?>" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="city_bar"></div>
            <div class="city_list_title">製作者</div>
            <div class="city_list_content"><?php echo $building[2] ?></div>
            <div class="city_bar"></div>
            <div class="city_list_title">コメント</div>
            <div class="city_list_content"><?php echo $building[3] ?></div>
            <div class="city_bar"></div>
            <div class="city_list_title">ゲーム内座標</div>
            <div class="city_list_content">(x,y,z)=<?php echo str_replace('_', ',', $building[4]); ?></div>
            <div class="city_bar"></div>
        </div>

        <div class="block"></div>
    </main>
</body>

</html>