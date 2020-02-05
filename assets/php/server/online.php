<?php
	$Query = require '../query/query.php';
    if($Query['players']['max'] == "") {
        echo "- / -";
    } else {
        echo htmlspecialchars($Query['players']['online']).' / '.htmlspecialchars($Query['players']['max']);
    }
?>
