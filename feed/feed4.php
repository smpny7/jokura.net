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
    <title>機能拡張のお知らせ</title>
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
            <div class="feed_title">機能拡張のお知らせ</div>
            <div class="feed_author_container">
                <img class="feed_author" src="/assets/img/author.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_author_letter">kit130101</div>
            </div>
            <div class="feed_time_container">
                <img class="feed_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_time_letter"><?php echo timeShow("2020-02-15 17:00:00");?></div>
            </div>
            <img class="feed_img" src="/assets/img/post4.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="feed_contents">&nbsp;以下の機能が利用可能になりました。<br><br>・ピクチャ（投稿含む）<br>・バックアップ作成<br>・バックアップ履歴<br><br>キャッシュが残っている場合がありますので、うまく表示されない場合はデータの削除をお願いします。</div>
        </div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
