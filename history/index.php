<?php
    include '../assets/php/maintenance.php';
    if(state() && !isset($_GET['root'])) {
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
    <title>バックアップ履歴</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/history.css">
</head>

<body>
    <?php include '../assets/php/header.php'?>

    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="block"></div>
        <?php
            // $result = glob('./backup/20*');
            $result = glob('/home/jokura_banila/backup/20*');
            $count = 1;
            foreach (array_reverse($result) as $raw) {
                if ($count % 2 == 1) {
                    // echo("<div class=\"history_box_left\"><img class=\"history_image\" src=\"/assets/img/history2.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\"><div class=\"history_date\">".date('Y/m/d',strtotime(str_replace('_', ' ', ltrim($raw, './backup/'))))."</div><div class=\"history_time\">".date('H:i:s',strtotime(str_replace('_', ' ', ltrim($raw, './backup/'))))."</div></div>");
                    echo("<div class=\"history_box_left\"><img class=\"history_image\" src=\"/assets/img/history2.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\"><div class=\"history_date\">".date('Y/m/d',strtotime(str_replace('_', ' ', ltrim($raw, '/home/jokura_banila/backup/'))))."</div><div class=\"history_time\">".date('H:i:s',strtotime(str_replace('_', ' ', ltrim($raw, '/home/jokura_banila/backup/'))))."</div></div>");
                } else if($count % 2 == 0){
                    // echo("<div class=\"history_box_right\"><img class=\"history_image\" src=\"/assets/img/history2.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\"><div class=\"history_date\">".date('Y/m/d',strtotime(str_replace('_', ' ', ltrim($raw, './backup/'))))."</div><div class=\"history_time\">".date('H:i:s',strtotime(str_replace('_', ' ', ltrim($raw, './backup/'))))."</div></div>");
                    echo("<div class=\"history_box_right\"><img class=\"history_image\" src=\"/assets/img/history2.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\"><div class=\"history_date\">".date('Y/m/d',strtotime(str_replace('_', ' ', ltrim($raw, '/home/jokura_banila/backup/'))))."</div><div class=\"history_time\">".date('H:i:s',strtotime(str_replace('_', ' ', ltrim($raw, '/home/jokura_banila/backup/'))))."</div></div>");
                }
                $count++;
                // <img class=\"history_delete\" src=\"/assets/img/delete.png\" alt=\"画像\" oncontextmenu=\"return false;\" onselectstart=\"return false;\" onmousedown=\"return false;\">
            }
        ?>
        <div class="block"></div>
    </main>

    <?php include '../assets/php/menu.php' ?>
</body>
</html>
