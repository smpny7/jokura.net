<?php
    session_start();
    include '../assets/php/maintenance.php';
    if(state() && !isset($_GET['root'])) {
        header('Location: /maintenance');
        exit;
    }

    if($_SESSION["from"] == "powerOn") {
        // system("sudo -u jokura_banila bash /home/jokura_banila/minecraft/start.sh");
        echo("powerOn");
        $_SESSION["from"] = "";
    } elseif($_SESSION["from"] == "powerOff") {
        // system("sudo -u jokura_banila bash /home/jokura_banila/minecraft/stop.sh");
        echo("powerOff");
        $_SESSION["from"] = "";
    } else {
        header('Location: /');
        exit;
    }
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
    <?php include '../assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="power_box">
            <div class="power_title">サーバ停止</div>
            <img class="power_img" src="/assets/img/power2.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="power_contents">サーバに処理を送信しました．<br>まもなくサーバが停止されます．</div>
            <a href="/"><img class="power_yes" src="/assets/img/yes.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
        </div>
        <div class="block"></div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
