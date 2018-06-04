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

    <a href="" class="dashboardIcon"><img src="img/gear.png" alt="" ></a>
    <a href="" class="dashboardIcon"><img src="img/trophy.png" alt="" ></a>
    <a href="" class="dashboardIcon"><img src="img/profile.png" alt="" ></a>
    <div id="dashboardItem">
        <div id="goal" class="item"> Goals</div>
        <div id="health" class="item">
            <p class="title">Health</p>
            <div class="health">
                <img src="img/grafiek1.png">
                <div class="info">
                    <h3>Daily Activity</h3>
                    <p>Find more information of your daily activity here</p>
                    <a href="">More...</a>
                </div>
            </div>
            <div class="health">
                <img src="img/grafiek2.png">
                <div class="info">
                    <h3>Calories</h3>
                    <p>Find more information of your calories here.</p>
                    <a href="">More...</a>
                </div>
            </div>
            <div class="health">
                <img src="img/grafiek3.png">
                <div class="info">
                    <h3>Weight</h3>
                    <p>Find more information of your weight here.</p>
                    <a href="">More...</a>
                </div>
            </div>
        </div>
        <div id="workout" class="item">
            <p class="title">Workout Videos</p>
            <div class="workout">
                <img src="img/grafiek1.png">
                <div class="info">
                    <h3>Dance</h3>
                    <p>Find more of our dance videos here</p>
                    <a href="">More...</a>
                </div>
            </div>
            <div class="workout">
                <img src="img/grafiek1.png">
                <div class="info">
                    <h3>Fitness</h3>
                    <p>Find more of our fitness videos here</p>
                    <a href="">More...</a>
                </div>
            </div>
            <div class="workout">
                <img src="img/grafiek2.png">
                <div class="info">
                    <h3>Yoga</h3>
                    <p>Find more of our yoga videos here</p>
                    <a href="">More...</a>
                </div>
            </div>
        </div>
    </div>
</div>
<video autoplay muted loop id="bgVideo">
    <source src="video/running.mp4" type="video/mp4">
</video>
</body>
</html>