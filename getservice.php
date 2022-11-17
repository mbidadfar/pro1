<?php

$json_file = fopen("servisex.json" , "r");

while(! feof($json_file)) {
    $line = fgets($json_file);
    echo( $line);
  }
?>