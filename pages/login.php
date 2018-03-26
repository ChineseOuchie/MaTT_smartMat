<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $conn = new mysqli("localhost", "root", "root", "matt");
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT idloginGebruiker FROM loginGebruiker WHERE username = '$username' and password = '$password';";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $id = $row['idloginGebruiker'];

            $count = $result->num_rows;

            if($count == 1) {
                $_SESSION['login_user'] = $username;
                header("location: ../index.php");
            }else {
                $error = "Your Login Name or Password is invalid";
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username</label>
        <input id="username" type="text" name="username">
        <label for="password">Password</label>
        <input id="password" type="password" name="password">
        <input type="submit" name="submit">
    </form>
    <a href="register.php">Register</a>
</body>
</html>