<?php
    session_start();
    include '../assets/php/maintenance.php';
    if(state() && !isset($_GET['root'])) {
        header('Location: /maintenance');
        exit;
    }

    $_SESSION["from"] = "backup";
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
            <div class="backup_contents">ボタン押下後，10秒程度かかりますが<br>そのままお待ちください．</div>
            <a id="submit" href="finished.php"><img id="yes" src="/assets/img/yes.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script type="text/javascript" src="/assets/js/doubleTap.js"></script>
            <a href="/"><img class="backup_no" src="/assets/img/no.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
        </div>
        <div class="block"></div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
