<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">
    <link href="../css/main.css" type="text/css" rel="stylesheet">
    <title>MATT Achievement</title>
</head>
<body>
<div id="container">
    <a href="../index.php"><img src="../img/logo.png" id="logo"></a>
    <a href="../pages/settings.php" class="dashboardIcon"><img src="../img/gear.png" alt="" ></a>
    <a href="../pages/achievement.php" class="dashboardIcon"><img src="../img/achievementOrange.png" alt="" ></a>
    <a href="" class="dashboardIcon"><img src="../img/profile.png" alt="" ></a>
    <a href="../index.php" class="dashboardIcon"><img src="../img/dashboard.png" alt="Dashboard"></a>
    <div id="achievement">
        <h1>Achievement</h1>
        <div id="achievementItems">
            <div id="complete">
                <h2>Completed</h2>
                <div class="items">
                    <div class="achievementItem">
                        <h3>First Time</h3>
                        <p>You use Matt for the first time</p>
                    </div>
                </div>
                <div class="items">
                    <div class="achievementItem">
                        <h3>Dancer</h3>
                        <p>You use Matt for the first time</p>
                    </div>
                </div>
                <div class="items">
                    <div class="achievementItem">
                        <h3>Yoga trainee</h3>
                        <p>You use Matt for the first time</p>
                    </div>
                </div>
                <div class="items">
                    <div class="achievementItem">
                        <h3>Statistics</h3>
                        <p>You use Matt for the first time</p>
                    </div>
                </div>
            </div>
            <div id="uncompleted">
                <h2>Uncompleted</h2>
                <div class="items">
                    <div class="achievementItem">
                        <h3>Statistics</h3>
                        <p>You use Matt for the first time</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>