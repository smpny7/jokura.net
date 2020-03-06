<?php
    function timeShow($time_input) {
        $unix = strtotime($time_input);
        $now = time();
        $diff_sec = $now - $unix;

        if($diff_sec < 60){
            $time = $diff_sec;
            $unit = "秒前";
        } elseif($diff_sec < 3600) {
            $time = $diff_sec/60;
            $unit = "分前";
        } elseif($diff_sec < 86400){
            $time = $diff_sec/3600;
            $unit = "時間前";
        } elseif($diff_sec < 2764800){
            $time = $diff_sec/86400;
            $unit = "日前";
        } else {
            $time = date("n月j日", $unix);
            return $time;
        }
        return (int)$time .$unit;
    }
?>