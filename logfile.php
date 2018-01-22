<?php

function log_ip(){
    date_default_timezone_set('Europe/Tallinn');
    $file = fopen("log.txt", "a") or die ("Can't open file");
    $time = time();
    $txt = $_SERVER['REMOTE_ADDR']." ".date("d-M-Y H:i:s")."\n";
    fwrite($file, $txt);
    fclose($file);
}

log_ip();

?>