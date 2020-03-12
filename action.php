<?php
require 'requests.php';
require 'text.php';

function data_insert ($text){
    $data = create_data();
    insert_uploaded_text ($text, countOfWord($text), $data);
    insert_word (numOfWord($text), $data);
}
if (!empty($_POST['description'])) {
    data_insert ($_POST['description']);
}
if ($_FILES['docs']['name'][0] !== "") {
    $docs = $_FILES['docs'];
    foreach ($docs['tmp_name'] as $key => $value){
        data_insert (file_get_contents($value));
    }
}
header('Location: http://localhost:63342/php/index.php');
