<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $msg = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $conn = new mysqli("localhost", "root", "root", "matt");

        if (isset($_POST['submit'])) {
            $firstname = $_POST['firstname'];
            $sirname = $_POST['sirname'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $weight = $_POST['weight'];
            $password = $_POST['password'];
            $rePassword = $_POST['rePassword'];
            $email = $_POST['email'];

            if ($password === $rePassword) {
                $sql = "INSERT INTO loginGebruiker (password, email) VALUES ('$password', '$email');";
                $sqluserprofile = "INSERT INTO userprofile (firstname, sirname, age, gender, weight) VALUES ('$firstname', '$sirname', '$age', '$gender', '$weight');";
                $conn->query($sqluserprofile);
                $conn->query($sql);
                header("Location: login.php");
            } else {
                $msg = "Password does not match the confirm password.";
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">
    <link href="../css/main.css" type="text/css" rel="stylesheet">
    <title>MATT Register</title>
</head>
<body>
<div id="container">
    <a href="../index.php"><img src="../img/logo.png" id="logo"></a>
    <form method="post" action="#" id="registerForm">
        <div id="sides">
            <div id="registerSide1">
                <input id="firstname" type="text" name="firstname" class="registerInput" required placeholder="Firstname">
                <input id="sirname" type="text" name="sirname" class="registerInput" required placeholder="Surname">
                <input id="email" type="email" name="email" class="registerInput" placeholder="email">
                <input id="password" type="password" name="password" class="registerInput" required placeholder="Password">
                <input id="rePassword" type="password" name="rePassword" class="registerInput" required placeholder="rePassword">
            </div>
            <div id="registerSide2">
                <div id="registerMsg"><?php echo $msg?></div>
                <label>
                        <input id="male" type="radio" class="registerInput" name="gender" value="male">
                        <img src="../img/male.png">
                </label>
                <label>
                    <input id="female" type="radio" class="registerInput" name="gender" value="female">
                    <img src="../img/female.png">
                </label>

                <input id="age" type="number" name="age" class="registerInput" required placeholder="Age">
                <input id="weight" type="number" name="weight" class="registerInput" required placeholder="weight in KG">
                <input type="submit" name="submit" value="next" id="registerSubmit">

            </div>
        </div>
    </form>
    <video autoplay muted loop id="bgVideo">
        <source src="../video/running.mp4" type="video/mp4">
    </video>
</div>
</body>
</html>

