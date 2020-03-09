<?php
    require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
    maintenanceCheck();

    $errorMessage = "";

    if (isset($_POST['galleryState'])) {
        if (empty($_POST['galleryPhotographer'])) {
            $errorMessage = 'MinecraftIDが未入力です。';
        } else if (!is_uploaded_file($_FILES['galleryPhoto']['tmp_name'])) {
            $errorMessage = 'ファイルを未選択です。';
        } else {

            $result = glob('./img/*');
            foreach ($result as $raw) {
                $num = str_pad(mb_substr(ltrim($raw, './img/'), 0, 3)+1, 3, '0', STR_PAD_LEFT);
            }

            $mimetype  = mime_content_type($_FILES['galleryPhoto']['tmp_name']);
            $extension = array_search($mimetype, [
                'jpg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif',
            ]);

            if (false !== $extension) {
                $upfile = $num.'-'.$_POST['galleryPhotographer'].'.'.$extension;
                $uppath = './img/'.$upfile;

                if (move_uploaded_file($_FILES["galleryPhoto"]["tmp_name"], $uppath)) {
                    $errorMessage =  $upfile . "をアップロードしました。";
                    header("Location: index.php");
                    exit();
                } else {
                    $errorMessage =  "ファイルをアップロードできません。";
                }
            } else {
                $errorMessage =  $mimetype.'のファイル形式はアップロードできません。JPEG・PNG・GIFの画像のみアップロードできます。';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160052296-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-160052296-1');
    </script>

    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アップロード</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/galleryUpload.css">
</head>

<body>
    <?php require __DIR__ . '/../assets/php/component/menu.php'?>
    <?php require __DIR__ . '/../assets/php/component/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">
        <div class="block"></div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="galleryTitle">アップロード</div>
            <input type="hidden" name="galleryState" value="1">
            <input type="text" id="galleryPhotographer" name="galleryPhotographer" placeholder="MinecraftIDを入力" value="<?php if (!empty($_POST["galleryPhotographer"])) {echo htmlspecialchars($_POST["galleryPhotographer"], ENT_QUOTES);} ?>">
            <input type="file" id="galleryPhoto" name="galleryPhoto" size="30"/>
            <div class="errorMessage"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8'); ?></div>
            <input type="image" id="galleryUpload" name="galleryUpload" src="/assets/img/yes.png">
            <a href="index.php"><img class="galleryCancel" src="/assets/img/no.png" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;"></a>
        </form>
        <div class="block"></div>
    </main>
</body>
</html>
