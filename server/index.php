<?php
    include '../assets/php/maintenance.php';
    if(state()) {
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
    <title>サーバ状況</title>
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/server.css">
    <?php include '../assets/php/server.php'?>
</head>

<body>
    <?php include '../assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="server_box1"><img id="server_working" src="/assets/img/notWorking.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div id="server_text_1">サーバ停止中</div></div>
        <div class="server_box2"><div id="server_text_2">- - - - - - - - - - - - - -</div><div id="server_text_3">サーバアドレス</div></div>
        <div class="server_box3"><div id="server_text_4">- / -</div><div id="server_text_5">メンバー</div></div>
        <div class="server_box4"><div id="server_text_6">- - - - -</div><div id="server_text_7">バージョン</div></div>
        <div class="server_box5"><div id="server_text_8">- - - - -</div><div id="server_text_9">RCON</div></div>
        <div class="block"></div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
