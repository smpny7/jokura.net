<?php
    include './assets/php/maintenance.php';
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
            <div class="home_box"></div>
            <div class="home_title">メンテナンスのお知らせ</div>
            <div class="home_detail">以下の期間において、アップデートに伴いサーバを一時停止します。...</div>
            <div class="time_container">
                <img class="time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="time_letter">1時間前</div>
                <div class="time_detail"><a href="#">詳細</a></div>
            </div>
        </div>

        <div class="home_container">
            <div class="home_box"></div>
            <div class="home_title">メンテナンスのお知らせ</div>
            <div class="home_detail">以下の期間において、アップデートに伴いサーバを一時停止します。...</div>
            <div class="time_container">
                <img class="time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="time_letter">1時間前</div>
                <div class="time_detail"><a href="#">詳細</a></div>
            </div>
        </div>

        <div class="home_container">
            <div class="home_box"></div>
            <div class="home_title">メンテナンスのお知らせ</div>
            <div class="home_detail">以下の期間において、アップデートに伴いサーバを一時停止します。...</div>
            <div class="time_container">
                <img class="time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="time_letter">1時間前</div>
                <div class="time_detail"><a href="#">詳細</a></div>
            </div>
        </div>

        <div class="block"></div>
        <div class="pagetop">↑</div>
    </main>

    <?php include './assets/php/menu.php' ?>
    <script type="text/javascript" src="/assets/js/pageTop.js"></script>
</body>
</html>
