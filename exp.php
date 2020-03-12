<?php

require 'text.php';

function create($text) {
    $resol = '.csv';
    $dir = 'csv';
    $name = str_replace( ":","-", create_name());
    touch($dir . '\\' . $name . $resol);
    $file = fopen($dir . '\\' . $name . $resol, 'w+');
    fputs($file, chr(0xEF) . chr(0xBB) . chr(0xBF) );
    fputs($file, "Слово ; Кол-во\n" );
    foreach ($text as $k => $v) {
        fwrite($file, "{$k};{$v}\n");
    }
    fclose($file);
}

$path = 'csv';
if (!($path AND is_dir($path))) {
    mkdir($path, 0777);
}
