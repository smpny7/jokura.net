<?php
	$Query = require '../query/query.php';
    if($Query['description']['text'] == "") {
        echo "起動中";
    } else {
        echo "正常です";
    }
?>
