<?php
    require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
    maintenanceFinishCheck();

    require __DIR__ . '/../assets/php/state.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メンテナンス中</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
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
            <div class="maintenance_contents"><?php echo $maintenanceDateFrom?>&nbsp;<?php echo $maintenanceTimeFrom?>&nbsp;〜&nbsp;<?php echo $maintenanceDateTo?>&nbsp;<?php echo $maintenanceTimeTo?></div>
            <div class="maintenance_copyright">&copy;&nbsp;2020&nbsp;情クラ&nbsp;All&nbsp;Right&nbsp;Reserved.</div>
        </div>
        <div class="block"></div>
    </main>
</body>
</html>
