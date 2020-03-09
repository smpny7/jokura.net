<?php
    require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
    maintenanceCheck();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サーバ状況</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/server.css">
    <?php require __DIR__ . '/../assets/php/check/powerCheck.php';
        if(power()){echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		    <script type="text/javascript" src="/assets/js/serverRefresh.js"></script>';}?>
</head>

<body>
    <?php require __DIR__ . '/../assets/php/component/menu.php'?>
    <?php require __DIR__ . '/../assets/php/component/header.php'?>
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
</body>
</html>