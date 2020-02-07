<?php
    session_start();
    $_SESSION["root"] == 1;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>root</title>
</head>
<body>
    <a href="/">ホーム</a>
    <a href="/server">サーバ状況</a>
    <a href="/online">オンラインユーザ</a>
    <a href="/restart">再起動</a>
</body>
</html>