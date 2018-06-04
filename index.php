<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MATT Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="js/main.js"></script>
</head>
<body>
<div id="container">
    <a href="index.php"><img src="img/logo.png" id="logo"></a>
<!--    <div>matt man</div>-->
<!--    <a href="pages/login.php">Login</a>-->
<!--    <a href="pages/register.php">Register</a>-->
<!--    <a href="pages/logout.php">Logout</a>-->

    <img src="img/gear.png" alt="" class="dashboardIcon">
    <img src="img/trophy.png" alt="" class="dashboardIcon">
    <div id="dashboardItem">
        <div id="goal" class="item"> Goals</div>
        <div id="health" class="item"> Health</div>
        <div id="workout" class="item">Workout Videos</div>
    </div>
</div>
<video autoplay muted loop id="bgVideo">
    <source src="video/running.mp4" type="video/mp4">
</video>
</body>
</html>