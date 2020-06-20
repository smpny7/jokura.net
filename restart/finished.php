<?php
    require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
    require_once __DIR__ . '/../env.php';
    maintenanceCheck();

    require __DIR__ . '/../assets/php/check/powerCheck.php';
    if (power() == 0) {
        header('Location: unavailable.php');
    }

    session_start();
    if($_SESSION["from"] == "restart") {
        require __DIR__ . '/../assets/php/check/processCheck.php';
        if (processCheck()) {
            readfile($restart_env);
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
    <title>サーバ再起動</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/restart.css">
</head>

<body>
    <?php require __DIR__ . '/../assets/php/component/menu.php'?>
    <?php require __DIR__ . '/../assets/php/component/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="restart_box">
            <div class="restart_title">サーバ再起動</div>
            <img class="restart_img" src="/assets/img/restart2.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="restart_contents">サーバに処理を送信しました。<br>まもなく再起動が実行されます。</div>
            <a href="/"><img class="restart_yes" src="/assets/img/yes.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
        </div>
        <div class="block"></div>
    </main>
    <script type="text/javascript" src="/assets/js/landscape.js"></script>
    <img id="landscape" src="/assets/img/landscape.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
</body>
</html>