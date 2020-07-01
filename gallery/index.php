<?php
require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
maintenanceCheck();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160052296-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-160052296-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ピクチャ</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/gallery.css">
</head>

<body>
    <?php require __DIR__ . '/../assets/php/component/menu.php' ?>
    <?php require __DIR__ . '/../assets/php/component/header.php' ?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
        <div class="block"></div>
        <?php
        $result = glob('./img/*');
        foreach (array_reverse($result) as $raw) {
            $file = ltrim($raw, './img/');
            preg_match("/(.*)(?:\.([^.]+$))/", $file, $filename);
            $number = mb_substr($filename[1], 0, 3);
            $photographer = mb_substr($filename[1], 4);
            echo ("<div class=\"gallery_container\"><img class=\"gallery_img\" src=\"img/" . $file . "\" alt=\"画像\"><div class=\"gallery_photographer\">" . $photographer . "</div></div>");
        }
        ?>
        <a href="upload.php"><img class="gallery_new" src="/assets/img/galleryNew.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
        <div class="block"></div>
    </main>
</body>

</html>