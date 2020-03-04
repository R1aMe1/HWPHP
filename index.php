<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>Вторая практика</h3>

<form action="t.php" method="POST" enctype="multipart/form-data">
    <textarea name="description"></textarea><br><br>
    <input type="file" name="docs[]" multiple> <br><br>
    <input type="submit" value="Start">
</form>
</body>
</html>