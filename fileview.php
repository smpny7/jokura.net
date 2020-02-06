<?php
$result = glob('/home/jokura_banila/backup/20*');
foreach ($result as $raw) {
    echo(date('Y年m月d日 H時i分s秒',strtotime(str_replace('_', ' ', ltrim($raw, '/home/jokura_banila/backup'))))."<br>");
}
?>