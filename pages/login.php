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
                header("location: ../indexOld.php");
            }else {
                $error = "Your Login Name or Password is invalid";
            }
        }
    }
    if (isset($_SESSION['login_user'])){
        header("location: ../indexOld.php");
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">
    <link href="../css/main.css" type="text/css" rel="stylesheet">
    <script src="../js/main.js"></script>
    <title>Login</title>
</head>
<body>
    <div id="container">
        <form id="regForm" action="login.php">
            <h1>Register:</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab">Name:
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
            </div>
            <div class="tab">Contact Info:
                <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
            </div>
            <div class="tab">Birthday:
                <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
                <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
                <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
            </div>
            <div class="tab">Login Info:
                <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
            </div>
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
        <video autoplay muted loop id="bgVideo">
            <source src="../video/running.mp4" type="video/mp4">
        </video>
    </div>
</body>
</html>