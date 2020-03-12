<?php
require 'requests.php';
require 'createTable.php';

echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf - 8\">
    <link rel=\"shortcut icon\" href=\"mi.png\" type=\"image/png\">
    <title>Детали</title>
</head>
<body>
<h3>Детальная информация</h3>";
$text_info = select_text_data ($_GET['id_text']);
foreach ($text_info as $key){
    foreach ($key as $key1) {
        echo $key1."<br>";
    }
    echo "<br><br>";
}
echo "<table>";
create_table(select_word($_GET['id_text']), 0);
echo "</table></body></html>";
