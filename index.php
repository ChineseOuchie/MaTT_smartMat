<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();
    if (isset($_SESSION['login_user'])){
        $conn = new mysqli("localhost", "root", "root", "matt");
        $sql = "";
    }
    else{
        header("location: /pages/login.php");
    }
?>
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
    <script src="js/goals.js"></script>
</head>
<body>
<div id="container">
    <a href="index.php"><img src="img/logo.png" id="logo"></a>
    <a href="pages/settings.php" class="dashboardIcon"><img src="img/gear.png" alt="" ></a>
    <a href="pages/achievement.php" class="dashboardIcon"><img src="img/trophy.png" alt="" ></a>
    <a href="pages/profile.php" class="dashboardIcon"><img src="img/profile.png" alt="" ></a>
    <a href="index.php" class="dashboardIcon"><img src="img/dashboardOrange.png" alt="" ></a>
    <div id="dashboardItem">
        <div id="goal" class="item">
            <div class="content">
                <div class="inContent">
                    <p class="title">Goals</p>
                    <hr>
                    <div id="goalOutput">
                    </div>
                </div>
                <div id="myBtn">+</div>
            </div>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form id="form">
                        <label class="formtitle">Category</label>
                        <select id="select" name="category">
                            <option disabled selected value="selectOption"> -- select an option -- </option>
                            <option>Weight loss</option>
                            <option>Exercise</option>
                            <option>Calories</option>
                        </select><br><br>
                        <div id="weightlossForm">
                            <label>Amount of Kilograms you want to lose</label>
                            <input id="weightlossKg" type="number"><br>
                            <label>Days to finish goal</label>
                            <input id="weightlossTime" type="number"><br><br>
                            <input type="button" value="Submit Goal" id="submitWeightloss">
                        </div>
                        <div id="exerciseForm">
                            <label>Amount of days</label>
                            <input id="exerciseTime" type="number"><br>
                            <label>Per</label>
                            <select id="exercisePer" name="exerciseSelect">
                                <option disabled selected>-- Period of time --</option>
                                <option>Day</option>
                                <option>Week</option>
                                <option>Month</option>
                            </select><br><br>
                            <input type="button" value="Submit Goal" id="submitExercise">
                        </div>
                        <div id="caloriesForm">
                            <label>Amount of calories</label>
                            <input id="caloriesAmount" type="number"><br>
                            <label>In how many days</label>
                            <input id="caloriesTime" type="number"><br><br>
                            <input type="button" value="Submit Goal" id="submitCalories">
                        </div>
                    </form>
                </div>

            </div>
        </div>
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
                <img src="img/dance.jpg">
                <div class="info">
                    <h3>Dance</h3>
                    <p>Find more of our dance videos here</p>
                </div>
            </div>
            <div class="workout">
                <img src="img/fitness.jpg">
                <div class="info">
                    <h3>Fitness</h3>
                    <p>Find more of our fitness videos here</p>
                </div>
            </div>
            <div class="workout">
                <img src="img/yoga.jpg">
                <div class="info">
                    <h3>Yoga</h3>
                    <p>Find more of our yoga videos here</p>
                </div>
            </div>
            <a href="" id="moreWorkout">MORE...</a>
        </div>
    </div>
</div>
</body>
</html>