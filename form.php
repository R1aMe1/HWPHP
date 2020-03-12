<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="mi.png" type="image/png">
    <title>Форма</title>
</head>
<body>
<h3>Форма загрузки</h3>
<form action="action.php" method="POST" enctype="multipart/form-data">
    <textarea name="description"></textarea><br><br>
    <input type="file" name="docs[]" multiple> <br><br>
    <input type="submit" value="Start"">
</form>
</body>
</html>