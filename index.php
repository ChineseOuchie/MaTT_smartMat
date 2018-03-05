<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    session_start();
    $conn = new mysqli("localhost", "root", "root", "matt");

    $sql = "SELECT * FROM userprofile";
    $result = $conn->query($sql);
    $r = '';
    while ($row = $result->fetch_assoc()){
        $r .= $_SESSION['login_user'];
        $r .= " {$row['infix']} ";
        $r .= "{$row['sirname']} <br>";
        $r .= "Your age is {$row['age']} <br>";
        $r .= "Your current weight is {$row['weight']}kg <br>";
        $r .= "Your have {$row['score']} points <br>";
    }

    $sqlimage = "SELECT image FROM userprofile";
    $resultimage = $conn->query($sqlimage);
    $rimage = "";
    while ($rowimage = $resultimage->fetch_assoc()){
        if ($rowimage['image'] === null){
            $rimage .= "<img class='profileImage' src='img/placeholder.png' alt='profile image'> <br>";
        } else{
            $rimage .= "<img class='profileImage' src='img/{$rowimage['image']}.png' alt='profile image'> <br>";
        }
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MaTT Dashboard</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="js/main.js"></script>
</head>
<body>
    <div id="container">
        <div id="Profile-Information">
            <form action="index.php" method="post">
                <input type="hidden" name="size" value="1000000">
                <input type="file" name="image">
                <input type="submit" name="upload" value="Upload Image">
            </form>
            <br>
            <?php
                echo $rimage;
                echo $r;
            ?>
            <form action="pages/logout.php">
                <input type="submit" name="logout">
            </form>
        </div>
    </div>
</body>
</html>
