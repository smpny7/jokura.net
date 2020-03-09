<?php
    require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
    maintenanceCheck();

    session_start();
    if($_SESSION["from"] == "powerOn") {
        require __DIR__ . '/../assets/php/check/processCheck.php';
        if (processCheck()) {
            readfile("http://jokura-vanila.work/src/powerOn.php?from=jokura.net");
        } else {
            $_SESSION["from"] = "";
            header('Location: /processReject');
            exit;
        }
    } else if($_SESSION["from"] == "powerOff") {
        require __DIR__ . '/../assets/php/check/processCheck.php';
        if (processCheck()) {
            readfile("http://jokura-vanila.work/src/powerOff.php?from=jokura.net");
        } else {
            $_SESSION["from"] = "";
            header('Location: /processReject');
            exit;
        }
    } else {
        $_SESSION["from"] = "";
        header('Location: /');
        exit;
    }
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
            <div class="power_title">サーバ<?php require __DIR__ . '/../assets/php/check/powerCheck.php'; if(power()==1){echo "停止";}else{echo "起動";}?></div>
            <img class="power_img" src="/assets/img/power2.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="power_contents">サーバに処理を送信しました．<br>まもなくサーバが<?php if(power()==1){echo "停止";}else{echo "起動";}?>されます．</div>
            <a href="/"><img class="power_yes" src="/assets/img/yes.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
        </div>
        <div class="block"></div>
    </main>
</body>
</html>