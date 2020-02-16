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
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/index.css">
</head>

<body>
    <?php include './assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="home_container">
            <img class="home_img" src="/assets/img/post6.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="home_title">僻地に建設 ～その１～</div>
            <div class="home_contents">&nbsp;Youtubeの動画を参考(もろパクリ)して作りましたー ...</div>
            <div class="home_time_container">
                <img class="home_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="home_time_letter"><?php echo timeShow("2020-02-17 00:00:00");?></div>
            </div>
                <a class="home_time_detail" href="/feed/feed6.php">詳細</a>
        </div>
        <div class="home_container">
            <img class="home_img" src="/assets/img/post5.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="home_title">砂の城前駅、完成</div>
            <div class="home_contents">&nbsp;8月に土を削って禿げていた土地を有効活用し、磨かれ...</div>
            <div class="home_time_container">
                <img class="home_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="home_time_letter"><?php echo timeShow("2020-02-16 15:15:00");?></div>
            </div>
                <a class="home_time_detail" href="/feed/feed5.php">詳細</a>
        </div>
        <div class="home_container">
            <img class="home_img" src="/assets/img/post4.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="home_title">機能拡張のお知らせ</div>
            <div class="home_contents">&nbsp;以下の機能が使えるようになりました。...</div>
            <div class="home_time_container">
                <img class="home_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="home_time_letter"><?php echo timeShow("2020-02-15 17:00:00");?></div>
            </div>
                <a class="home_time_detail" href="/feed/feed4.php">詳細</a>
        </div>
        <div class="home_container">
            <img class="home_img" src="/assets/img/post3.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="home_title">採掘場完成のお知らせ</div>
            <div class="home_contents">&nbsp;Discordでも告知したのですが、砂の城付近(x=-20,z=-410)...</div>
            <div class="home_time_container">
                <img class="home_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="home_time_letter"><?php echo timeShow("2020-02-14 23:35:00");?></div>
            </div>
                <a class="home_time_detail" href="/feed/feed3.php">詳細</a>
        </div>
        <div class="home_container">
            <img class="home_img" src="/assets/img/post2.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="home_title">Windows 7 サポート終了のお知らせ</div>
            <div class="home_contents">&nbsp;マイクラサーバは2020/1/15 0:00(GMT+9:00)以降、Wi...</div>
            <div class="home_time_container">
                <img class="home_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="home_time_letter"><?php echo timeShow("2020-02-14 13:30:00");?></div>
            </div>
                <a class="home_time_detail" href="/feed/feed2.php">詳細</a>
        </div>
        <div class="home_container">
            <img class="home_img" src="/assets/img/post1.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="home_title">レスポンシブ対応</div>
            <div class="home_contents">&nbsp;PC・スマートフォンからのアクセスに対応しました。動作確認済みブラウザは，Google&nbsp;Chrome・Microsoft&nbsp;E...</div>
            <div class="home_time_container">
                <img class="home_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="home_time_letter"><?php echo timeShow("2020-02-10 10:50:00");?></div>
            </div>
                <a class="home_time_detail" href="/feed/feed1.php">詳細</a>
        </div>
        <div class="home_container">
            <img class="home_img" src="/assets/img/post0.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="home_title">Webサーバ稼働のお知らせ</div>
            <div class="home_contents">&nbsp;以下の一部機能に限定して、ゲームサーバ機能を先行公開したいと思います。...</div>
            <div class="home_time_container">
                <img class="home_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="home_time_letter"><?php echo timeShow("2020-02-07 22:30:00");?></div>
            </div>
                <a class="home_time_detail" href="/feed/feed0.php">詳細</a>
        </div>
        <div class="block"></div>
        <div class="pagetop">↑</div>
    </main>

    <?php include './assets/php/menu.php' ?>
    <script type="text/javascript" src="/assets/js/pageTop.js"></script>
</body>
</html>
