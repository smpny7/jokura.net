<?php

$Query = require '../query/query.php';
for($i=0; $i<12; $i++) {
    if($Query['players']['sample'][$i]['name'] =='kit130101') {
        echo '<span style="color:#4BBF36;">Online</span>';
        break;
    } else {
        $offline = 1;
    }
}
if($offline == 1) {
    echo 'Offline';
}

?>