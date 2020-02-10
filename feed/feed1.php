<?php
    include '../assets/php/maintenance.php';
    if(state() && !isset($_GET['root'])) {
        header('Location: /maintenance');
        exit;
    }

    include '../assets/php/time.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レスポンシブ対応</title>
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/feed.css">
</head>

<body>
    <?php include '../assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
        <div class="feed_container">
            <a href="/"><img class="feed_back" src="/assets/img/back.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
            <div class="feed_title">レスポンシブ対応</div>
            <div class="feed_author_container">
                <img class="feed_author" src="/assets/img/author.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_author_letter">kit130101</div>
            </div>
            <div class="feed_time_container">
                <img class="feed_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_time_letter"><?php echo timeShow("2020-02-10 10:50:00");?></div>
            </div>
            <img class="feed_img" src="/assets/img/post1.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="feed_contents">&nbsp;PC・スマートフォンからのアクセスに対応しました。<br><br>動作確認済みブラウザは，Google&nbsp;Chrome・Microsoft&nbsp;Edge<br>&nbsp;(EdgeHTML, Chromium, Webkit, Blink)・Safari・Firefoxとなります。<br><br>キャッシュが残っている場合がありますので、うまく表示されない場合はデータの削除をお願いします。</div>
        </div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
