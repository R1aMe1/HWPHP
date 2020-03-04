<?php

require 'exp.php';

function numOfWord($text) {
    return array_count_values(array_filter(mb_split("[[:punct:]]|\s*", mb_strtoupper($text))));
}

if (!empty($_POST['description'])) {
    $text = $_POST['description'];
    create(numOfWord($text));
}

if ($_FILES['docs']['name'][0] !== "") {
    $docs = $_FILES['docs'];
    foreach ($docs['tmp_name'] as $t => $d){
        $text = file_get_contents($d);
        create(numOfWord($text));
    }
}
