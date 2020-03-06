<?php
    require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
    maintenanceCheck();

    if(!isset($_GET['feed'])) {
        header('Location: /');
        exit;
    }

    include '../assets/php/time.php';

    $file = fopen("./csv/feed".$_GET['feed'].".csv", "r");
    $i=0;
    while($raw = fgetcsv($file)){
        $feed[$i] = $raw[0];
        $i++;
    }
    fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $feed[0]?></title>
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
            <a href="/#feed<?php echo $_GET['feed']?>"><img class="feed_back" src="/assets/img/back.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
            <div class="feed_title"><?php echo $feed[0]?></div>
            <div class="feed_author_container">
                <img class="feed_author" src="/assets/img/author.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_author_letter"><?php echo $feed[1]?></div>
            </div>
            <div class="feed_time_container">
                <img class="feed_time" src="/assets/img/time.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
                <div class="feed_time_letter"><?php echo timeShow($feed[2]);?></div>
            </div>
            <img class="feed_img" src="/feed/img/feed<?php echo $_GET['feed']?>.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="feed_contents">&nbsp;<?php echo $feed[3]?></div>
        </div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
