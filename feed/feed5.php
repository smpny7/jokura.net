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
    <title>砂の城前駅、完成</title>
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
            <div class="feed_title">砂の城前駅、完成</div>
            <div class="feed_author_container">
                <img class="feed_author" src="/assets/img/author.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_author_letter">YuuYuu523</div>
            </div>
            <div class="feed_time_container">
                <img class="feed_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_time_letter"><?php echo timeShow("2020-02-16 15:15:00");?></div>
            </div>
            <img class="feed_img" src="/assets/img/post5.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="feed_contents">&nbsp;8月に土を削って禿げていた土地を有効活用し、磨かれた砂岩で地下鉄南北線の駅を作ってみました。<br></div>
        </div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
