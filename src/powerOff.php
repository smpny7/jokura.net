<?php
    if ($_GET['from'] == 'jokura.net') {
        system("sudo -u jokura_banila bash /home/jokura_banila/minecraft/stop.sh > /dev/null &");
    } else {
        header('Location: /');
        exit;
    }
?>