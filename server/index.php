<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サーバ状況</title>
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/server.css">
</head>

<body>
    <?php include '../assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <div class="server_box1"><img class="server_working" src="/assets/img/working.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"><div class="server_text_1">正常に稼働中</div></div>
        <div class="server_box2"><div class="server_text_2">jokura-vanila.work</div><div class="server_text_3">サーバアドレス</div></div>
        <div class="server_box3"><div class="server_text_4">3 / 12</div><div class="server_text_5">メンバー</div></div>
        <div class="server_box4"><div class="server_text_6">1.14.4</div><div class="server_text_7">バージョン</div></div>
        <div class="server_box5"><div class="server_text_8">25575</div><div class="server_text_9">RCON</div></div>

        <div class="block"></div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
