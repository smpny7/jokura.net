<?php
	$Query = require '../query/query.php';
    if($Query['version']['name'] == "") {
        echo "- - - - -";
    } else {
        echo htmlspecialchars($Query['version']['name']);
    }
?>
