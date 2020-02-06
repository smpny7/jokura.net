<?php
    include '../assets/php/maintenance.php';
    if(!state()) {
        header('Location: /');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メンテナンス中</title>
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/maintenance.css">
</head>

<body>
    <header>
        <div class="header_title"></div>
    </header>
    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="maintenance_box">
            <div class="maintenance_title">少しだけお待ちください</div>
            <img class="maintenance_img" src="/assets/img/maintenance.gif" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
            <div class="maintenance_contents">2020.02.06&nbsp;20:00&nbsp;〜&nbsp;2020.02.07&nbsp;17:00</div>
            <div class="maintenance_copyright">&copy;&nbsp;2020&nbsp;情クラ&emsp;All&nbsp;Right&nbsp;Reserved.</div>
        </div>
        <div class="block"></div>
    </main>
</body>
</html>
