<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="mi.png" type="image/png">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Главная</title>
</head>
<body>
	<h3>Главная страница</h3>
    <input value="Загрузить" type="button" onclick="location.href='http://localhost:63342/php/form.php'" />
    <br><br><br>
        <?php
        require 'createTable.php';
        require 'requests.php';
        create_table($info = select_uploaded_text(), 1);?>
</body>
</html>