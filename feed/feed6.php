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
    <title>僻地に、建築 ～その１～</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/feed.css">
</head>

<body>
    <?php include '../assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
        <div class="feed_container">
            <a href="/"><img class="feed_back" src="/assets/img/back.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
            <div class="feed_title">僻地に、建築 ～その１～</div>
            <div class="feed_author_container">
                <img class="feed_author" src="/assets/img/author.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_author_letter">YuuYuu523</div>
            </div>
            <div class="feed_time_container">
                <img class="feed_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_time_letter"><?php echo timeShow("2020-02-17 00:00:00");?></div>
            </div>
            <img class="feed_img" src="/assets/img/post5.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="feed_contents">&nbsp;Youtubeの動画を参考(もろパクリ)して作りましたー 建築は楽しいですね</br>参考にした動画 https://www.youtube.com/watch?v=-k5AtCIae_o<br></div>
        </div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
