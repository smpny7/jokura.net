<?php
    if ($_GET['from'] == 'jokura.net') {
        system("sudo -u jokura_banila bash /home/jokura_banila/minecraft/restart.sh > /dev/null &");
    } else {
        header('Location: /');
        exit;
    }
?>