<?php
    if ($_GET['from'] == 'jokura.net') {
        print_r(glob('/home/jokura_banila/backup/20*'));
    } else {
        header('Location: /');
        exit;
    }
?>