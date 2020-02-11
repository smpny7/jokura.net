<?php
    session_start();
    include '../assets/php/maintenance.php';
    if(state() && !isset($_GET['root'])) {
        header('Location: /maintenance');
        exit;
    }

    if($_SESSION["from"] == "restart") {
        system("sudo -u jokura_banila bash /home/jokura_banila/minecraft/restart.sh");
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
    <title>サーバ再起動</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/restart.css">
</head>

<body>
    <?php include '../assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="restart_box">
            <div class="restart_title">サーバ再起動</div>
            <img class="restart_img" src="/assets/img/restart2.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="restart_contents">サーバに処理を送信しました．<br>まもなく再起動が実行されます．</div>
            <a href="/"><img class="restart_yes" src="/assets/img/yes.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
        </div>
        <div class="block"></div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
