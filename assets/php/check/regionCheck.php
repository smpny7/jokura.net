<?php
    function regionName($name) {
        if ($name=="camp") {
            return "キャンプ地";
        } else if ($name=="hotelTown") {
            return "ホテルタウン";
        } else if ($name=="kaiteishinden") {
            return "海底神殿";
        } else if ($name=="mapTower") {
            return "地図の塔エリア";
        } else if ($name=="sabaku") {
            return "砂漠エリア";
        } else if ($name=="shigechikaJo") {
            return "重近城";
        } else if ($name=="shinTairiku") {
            return "新大陸";
        } else if ($name=="shinToshi") {
            return "新都市";
        } else if ($name=="trapTower") {
            return "トラップタワー";
        }
    }

    function toshiCheck($name) {
        if ($name=="camp"||$name=="hotelTown"||$name=="sabaku"||$name=="shigechikaJo"||$name=="shinToshi") {
            return 1;
        } else {
            return 0;
        }
    }
?>