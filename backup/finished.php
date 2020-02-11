<?php
    session_start();
    include '../assets/php/maintenance.php';
    if(state() && !isset($_GET['root'])) {
        header('Location: /maintenance');
        exit;
    }

    if($_SESSION["from"] == "backup") {
        system("sudo -u jokura_banila bash /home/jokura_banila/minecraft/backup.sh");
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
    <title>バックアップ作成</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/backup.css">
</head>

<body>
    <?php include '../assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="backup_box">
            <div class="backup_title">バックアップ</div>
            <img class="backup_img" src="/assets/img/backup2.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="backup_contents">バックアップが完了しました．<br>まもなくサーバの起動を開始します．</div>
            <a href="/"><img class="backup_yes" src="/assets/img/yes.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
        </div>
        <div class="block"></div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
