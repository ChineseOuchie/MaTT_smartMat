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
            $weight = $_POST['weight'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $rePassword = $_POST['rePassword'];
            $email = $_POST['email'];


            if ($password === $rePassword) {
                $sql = "INSERT INTO loginGebruiker (username, password, email) VALUES ('$username', '$password', '$email');";
                $sqluserprofile = "INSERT INTO userprofile (username, firstname, sirname, age, weight) VALUES ('$username', '$firstname', '$sirname', '$age', '$weight');";
                $conn->query($sqluserprofile);
                $conn->query($sql);
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
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Register</title>
    <style>
        label, input{
            display: block;
            width: 200px;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="firstname">Firstname</label>
        <input id="firstname" type="text" name="firstname" required>
        <label for="sirname">Sirname</label>
        <input id="sirname" type="text" name="sirname" required>
        <label for="age">Age</label>
        <input id="age" type="number" name="age" required>
        <label for="weight">Weight</label>
        <input id="weight" type="number" name="weight" required>
        <label for="username">Username</label>
        <input id="username" type="text" name="username" required>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        <label for="rePassword">Confirm password</label>
        <input id="rePassword" type="password" name="rePassword" required>
        <?php echo $msg?>
        <label for="email">E-mail</label>
        <input id="email" type="email" name="email">
        <input type="submit" name="submit">
    </form>
</body>
</html>