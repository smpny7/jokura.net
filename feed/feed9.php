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
    <title>Optifine1.15.2対応状況について</title>
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
            <div class="feed_title">Optifine1.15.2対応状況について</div>
            <div class="feed_author_container">
                <img class="feed_author" src="/assets/img/author.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_author_letter">kit130101</div>
            </div>
            <div class="feed_time_container">
                <img class="feed_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_time_letter"><?php echo timeShow("2020-02-24 13:30:00");?></div>
            </div>
            <img class="feed_img" src="/assets/img/post9.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="feed_contents">&nbsp;最近プレビュー版の公開頻度が高くなってきています。<br><br>
            &emsp;2/19 Optifine 1.15.2 HD U G1 pre6<br>&emsp;2/21 Optifine 1.15.2 HD U G1 pre7<br>&emsp;2/23 Optifine 1.15.2 HD U G1 pre8<br>&emsp;2/24 Optifine 1.15.2 HD U G1 pre9<br><br>
            現在の進捗状態は95%(2/23時点)、状態はbug fixingとなっています。3月上旬には公開されると思いますので、公開され次第サーバアップデートを行います。<br></div>
        </div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
