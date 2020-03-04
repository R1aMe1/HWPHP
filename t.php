<?php

function numOfWord($text)
{
    return array_count_values(array_filter(mb_split("[[:punct:]]|\s*", mb_strtoupper($text))));
}

function create($text)
{
    $resol = '.csv';
    $dir = 'csv';
    $date = date_create_from_format('U.u', microtime(true));
    $name = date_format($date, "Y-m-d H-i-s-u");
    touch($dir . '\\' . $name . $resol);
    $file = fopen($dir . '\\' . $name . $resol, 'w+');
    fputs($file, chr(0xEF) . chr(0xBB) . chr(0xBF) );
    foreach ($text as $k => $v) {
        fwrite($file, "{$k};{$v}\n");
    }
    fclose($file);
}

$path = 'csv';
if (!($path AND is_dir($path))) {
    if (!mkdir($path, 0777, true) && !is_dir($path)) {
        echo "dir not created<br>";
    }
}

if (!empty($_POST['description'])) {
    $text = $_POST['description'];
    echo $text;
    create(numOfWord($text));
}

if ($_FILES['docs']['name'][0] !== "") {
    $docs = $_FILES['docs'];
    foreach ($docs['tmp_name'] as $t => $d){
        $text = file_get_contents($d);
       echo $text;
        create(numOfWord($text));
    }
}


