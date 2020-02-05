<?php
    $Query = require '../query/query.php';
    if($Query['description']['text'] == "") {
        echo "- - - - - - - - - - - - - -";
    } else {
        echo htmlspecialchars($Query['description']['text']);
    }
?>
