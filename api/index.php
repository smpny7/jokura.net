<?php
    require_once __DIR__ . '/../assets/php/state.php';
    if (!$maintenanceMode) {
        echo "{ \"server\": [ { \"state\": ";

        require_once __DIR__ . '/../assets/php/check/powerCheck.php';
        if (power()) {
            $Query = require_once __DIR__ . '/../assets/php/query/query.php';
            if ($Query['description']['text'] == "") {
                echo "2";
            } else {
                echo "1";
            }
        } else {
            echo "3";
        }

        echo ", \"address\": \"";

        if($Query['description']['text'] == "") {
            echo "- - - - - - - - - - - - - -";
        } else {
            echo htmlspecialchars($Query['description']['text']);
        }

        echo "\", \"member_online\": ";

        if($Query['players']['max'] == "") {
            echo "-1";
        } else {
            echo htmlspecialchars($Query['players']['online']);
        }

        echo ", \"member_total\": ";

        if($Query['players']['max'] == "") {
            echo "-1";
        } else {
            echo htmlspecialchars($Query['players']['max']);
        }

        echo ", \"version\": \"";

        if($Query['version']['name'] == "") {
            echo "- - - - -";
        } else {
            echo htmlspecialchars($Query['version']['name']);
        }

        echo "\", \"rcon\": \"";

        if($Query['version']['name'] == "") {
            echo "-1";
        } else {
            echo "25575";
        }

        echo "\" } ] }";
    }
?>
