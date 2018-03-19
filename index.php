<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    session_start();
    if (isset($_SESSION['login_user'])){
        $conn = new mysqli("localhost", "root", "root", "matt");

        $sql = "SELECT * FROM userprofile WHERE username = '{$_SESSION['login_user']}';";
        $result = $conn->query($sql);
        $array = ['png','jpg','jpeg'];
        $r = '';
        while ($row = $result->fetch_assoc()){
            $r .= " {$row['firstname']} ";
            $r .= "{$row['sirname']} <br>";
            $r .= "Your age is {$row['age']} <br>";
            $r .= "Your current weight is {$row['weight']}kg <br>";
            $r .= "You have {$row['score']} points <br>";
        }

        if (isset($_POST['upload'])){
            $image = $_FILES["image"];
            $type = explode('/', $image['type']);
            $imgType = ".{$type[1]}";
            if ($type[1] === $array[0] || $type[1] === $array[1] || $type[1] === $array[2]){
                $sqlimageupload = "UPDATE userprofile SET image = '$_SESSION[login_user]$imgType' WHERE username = '$_SESSION[login_user]';";
                $resultupload = $conn->query($sqlimageupload);
                $target = "img/profile_img/";
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target. $_SESSION['login_user'].$imgType)) {
                    $msg = "Image uploaded successfully";
                }else{
                    $msg = "Failed to upload image";
                }
            }else{
                echo "Image type is not supported";
            }

        }

        $sqlimage = "SELECT image FROM userprofile WHERE username = '$_SESSION[login_user]'";
        $resultimage = $conn->query($sqlimage);
        $rimage = "";
        while ($rowimage = $resultimage->fetch_assoc()){
            if ($rowimage['image'] === null){
                $rimage = "<img class='profileImage' src='img/profile_img/placeholder.png' alt='profile image'> <br>";
            } else{
                $rimage = "<img class='profileImage' src='img/profile_img/{$rowimage['image']}' alt='profile image'> <br>";
            }
        }
    }else{
        header("location: pages/login.php");
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
            <form action="index.php" method="post" enctype="multipart/form-data">
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
                <input type="submit" name="logout" value="Logout">
            </form>
        </div>
    </div>
</body>
</html>