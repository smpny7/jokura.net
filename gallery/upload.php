<?php
if (is_uploaded_file($_FILES["galleryUpload"]["tmp_name"])) {

    $num = 0;

    //拡張子判別
    $mimetype  = mime_content_type($_FILES['upfile']['tmp_name']);
    $extension = array_search($mimetype, [
        'jpg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif',
    ]);

    if (false !== $extension) {
        $upfile = 'photo'.$num.'.'.$extension;  //固定アップロードファイル名（拡張子自動補完）
        $uppath = './img/'.$upfile;

        //アップロードファイル移動、上書き
        if (move_uploaded_file($_FILES["upfile"]["tmp_name"], $uppath)) {
            // chmod($uppath, 0644);
            echo $upfile . "をアップロードしました。";
        } else {
            echo "ファイルをアップロードできません。";
        }
    } else {
        echo $mimetype.'のファイル形式はアップロードできません。JPEG・PNG・GIFの画像のみアップロードできます。';
    }
} else {
  echo "ファイルが選択されていません。";
}
?>

<?php

$errorMessage = "";

// if (isset($_POST["galleryUpload"])) {
    if (empty($_POST["galleryPhotographer"])) {
        $errorMessage = 'MinecraftIDが未入力です。';
    } else if (is_uploaded_file($_FILES['galleryPhoto']['name'])) {
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
            $upfile = 'photo'.$num.'.'.$extension;  //固定アップロードファイル名（拡張子自動補完）
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
// }

?>
