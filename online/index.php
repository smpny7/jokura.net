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
    <title>オンラインユーザ</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/online.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/stateRefresh.js"></script>
</head>

<body>
    <?php include '../assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="online_box_1"><img class="online_image_1" src="/assets/php/skin/Chazuke_0_.php" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="online_name_1">Chazuke_0_</div><div id="online_state_1"></div></div>
        <div class="online_box_2"><img class="online_image_2" src="/assets/php/skin/chishige1217200.php" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="online_name_2">chishige1217200</div><div id="online_state_2"></div></div>
        <div class="online_box_3"><img class="online_image_3" src="/assets/php/skin/fkddn123.php" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="online_name_3">fkddn123</div><div id="online_state_3"></div></div>
        <div class="online_box_4"><img class="online_image_4" src="/assets/php/skin/kit130101.php" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="online_name_4">kit130101</div><div id="online_state_4"></div></div>
        <div class="online_box_5"><img class="online_image_5" src="/assets/php/skin/meromin007.php" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="online_name_5">meromin007</div><div id="online_state_5"></div></div>
        <div class="online_box_6"><img class="online_image_6" src="/assets/php/skin/RyuMura.php" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="online_name_6">RyuMura</div><div id="online_state_6"></div></div>
        <div class="online_box_7"><img class="online_image_7" src="/assets/php/skin/suzumetengu.php" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="online_name_7">suzumetengu</div><div id="online_state_7"></div></div>
        <div class="online_box_8"><img class="online_image_8" src="/assets/php/skin/TUIUS.php" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="online_name_8">TUIUS</div><div id="online_state_8"></div></div>
        <div class="online_box_9"><img class="online_image_9" src="/assets/php/skin/Xx_piroboy_xX.php" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="online_name_9">Xx_piroboy_xX</div><div id="online_state_9"></div></div>
        <div class="online_box_10"><img class="online_image_10" src="/assets/php/skin/YuuYuu523.php" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="online_name_10">YuuYuu523</div><div id="online_state_10"></div></div>
        <div class="block"></div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
