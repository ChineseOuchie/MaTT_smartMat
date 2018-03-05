<?php
    if (isset($_POST['upload'])) {
    // Get image name
        $image = $_FILES['image']['name'];
        $base = basename($image);
        $target = "img/{$base}";
        echo $target;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="test.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
        <input type="file" name="image">
    </div>
    <button type="submit" name="upload">POST</button>
</form>
</body>
</html>