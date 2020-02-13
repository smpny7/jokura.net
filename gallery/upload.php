<?php

include '../assets/php/maintenance.php';
if(state() && !isset($_GET['root'])) {
    header('Location: /maintenance');
    exit;
}

$errorMessage = "";

if (isset($_POST['galleryState'])) {
    if (empty($_POST['galleryPhotographer'])) {
        $errorMessage = 'MinecraftIDが未入力です。';
    } else if (!is_uploaded_file($_FILES['galleryPhoto']['tmp_name'])) {
        $errorMessage = 'ファイルを未選択です。';
    }

    // 入力文字審査
    // if (!empty($_POST["galleryUpload"]) && !empty($_POST["galleryPhoto"])) 
    else {

        $num = 0;

        //拡張子判別
        $mimetype  = mime_content_type($_FILES['galleryPhoto']['tmp_name']);
        $extension = array_search($mimetype, [
            'jpg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif',
        ]);

        if (false !== $extension) {
            $upfile = $num.'-'.$_POST['galleryPhotographer'].'.'.$extension;  //固定アップロードファイル名（拡張子自動補完）
            $uppath = './img/'.$upfile;

            //アップロードファイル移動、上書き
            if (move_uploaded_file($_FILES["galleryPhoto"]["tmp_name"], $uppath)) {
                // chmod($uppath, 0644);

                $errorMessage =  $upfile . "をアップロードしました。";
                // $_SESSION["USERID"] = $_POST["userid"];
                // header("Location: /");
                // exit();

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
    <?php include '../assets/php/header.php'?>

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

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
