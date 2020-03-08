<?php
    require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
    maintenanceCheck();

    session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>起動・停止</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/power.css">
</head>

<body>
    <?php require __DIR__ . '/../assets/php/component/menu.php'?>
    <?php require __DIR__ . '/../assets/php/component/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="power_box">
            <div class="power_title"><?php require __DIR__ . '/../assets/php/check/powerCheck.php'; if(power()==1){echo "サーバ停止";$_SESSION["from"] = "powerOff";}else{echo "サーバ起動";$_SESSION["from"] = "powerOn";}?></div>
            <img class="power_img" src="/assets/img/power2.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="power_contents"><?php if(power()==1){echo "停止";}else{echo "起動";}?>には、<?php if(power()==1){echo "30";}else{echo "50";}?>秒程度かかります。<br>よろしいですか？</div>
            <a id="submit" href="finished.php"><img id="yes" src="/assets/img/yes.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script type="text/javascript" src="/assets/js/doubleTap.js"></script>
            <a href="/"><img class="power_no" src="/assets/img/no.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
        </div>
        <div class="block"></div>
    </main>
</body>
</html>