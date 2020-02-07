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
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/index.css">
</head>

<body>
    <?php include './assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="home_container">
            <img class="home_box" src="/assets/img/post0.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="home_title">Webサーバ稼働のお知らせ</div>
            <div class="home_detail">以下の一部機能に限定して、ゲームサーバ機能を先行公開したいと思います。...</div>
            <div class="time_container">
                <img class="time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="time_letter"><?php echo timeShow("2020-02-07 22:30:00");?></div>
                <div class="time_detail"><a href="/feed/feed0.php">詳細</a></div>
            </div>
        </div>
        <div class="block"></div>
        <div class="pagetop">↑</div>
    </main>

    <?php include './assets/php/menu.php' ?>
    <script type="text/javascript" src="/assets/js/pageTop.js"></script>
</body>
</html>
