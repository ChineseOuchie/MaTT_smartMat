<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli("localhost", "root", "root", "matt");
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT idloginGebruiker FROM loginGebruiker WHERE email = '$email' and password = '$password';";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $id = $row['idloginGebruiker'];
        $count = $result->num_rows;
        if($count == 1) {
            $_SESSION['login_user'] = $id;
            header("location: ../index.php");
        }else {
            $error = "Your Login Name or Password is invalid";
        }
    }
}
if (isset($_SESSION['login_user'])){
    header("location: ../index.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">
    <link href="../css/main.css" type="text/css" rel="stylesheet">
    <title>MATT Login</title>
</head>
<body>
<div id="container">
    <a href="../index.php"><img src="../img/logo.png" id="logo"></a>

    <form action="#" method="post" id="loginForm">
        <div id="matt"></div>
        <input name="email" id="email" type="text" required placeholder="Email">
        <input name="password" id="password" type="password" required placeholder="Password">
        <button type="submit" id="forgotPassword"><a href="">Forgot password</a></button>
        <input type="submit" name= "submit" id="login" placeholder="Submit">
        <button type="submit" id="register"><a href="register.php">register</a></button>
    </form>
    <video autoplay muted loop id="bgVideo">
        <source src="../video/running.mp4" type="video/mp4">
    </video>
</div>
</body>
</html>