<?php

function pdo (){
    return new PDO('pgsql:host=localhost; port=5432; dbname=postgres', 'postgres','postgres');
}
function insert_uploaded_text ($content, $words_count, $data) {
    $pdo = pdo();
    $prepare = $pdo->prepare("INSERT INTO uploaded_text(content, words_count, data ) VALUES (?,?,?)");
    $prepare->execute([$content, $words_count, $data]);
}
function insert_word ($words, $data) {
    $pdo = pdo();
    $str_select = $pdo->prepare ("SELECT id FROM uploaded_text WHERE data = '$data'");
    $str_select->execute();
    $id_text = $str_select->fetch(PDO::FETCH_ASSOC);
    $id = $id_text["id"];
    foreach ($words as $k => $v) {
        $prepare = $pdo->prepare("INSERT INTO word(text_id, word, count) VALUES (?,?,? )");
        $prepare->execute([$id, $k, $v]);
    }
}
function select_uploaded_text () {
    $pdo = pdo();
    return $pdo->query('SELECT * FROM uploaded_text')->fetchall(PDO::FETCH_ASSOC);
}
function select_text_data ($id) {
    $pdo = pdo();
    return $pdo->query("SELECT  content, data FROM uploaded_text WHERE uploaded_text.id = '$id'")->fetchall(PDO::FETCH_ASSOC);
}
function select_word ($id) {
    $pdo = pdo();
    return $pdo->query("SELECT  word, count FROM word WHERE text_id = '$id' ORDER BY count DESC ")->fetchall(PDO::FETCH_ASSOC);
}
