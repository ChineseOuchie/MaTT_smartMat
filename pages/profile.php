<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();
    if (isset($_SESSION['login_user'])){
        $conn = new mysqli("localhost", "root", "root", "matt");
        $sql = "SELECT * FROM userprofile WHERE iduserprofile = '{$_SESSION['login_user']}';";
        $sql2 = "SELECT * FROM logingebruiker WHERE idlogingebruiker = '{$_SESSION['login_user']}';";
        $result = $conn->query($sql);
        $result2 = $conn->query($sql2);
        $rleft = "";
        $rright = "";
        while ($row = $result->fetch_assoc()){
            $rleft .= "<h2>{$row['firstname']} {$row['sirname']} </h2>";
            $rleft .= "<h3 class='profileData'>Weight {$row['weight']}kg</h3>";
            $rleft .= "<h3 class='profileData'>Height {$row['height']}m</h3>";
            $rright .= "<h3 class='profileData'>Exercise routine <span class='output'>{$row['exerciseRout']}</span></h3>";
            $rright .= "<h3 class='profileData'>Prefered exercise <span class='output'>{$row['exercisePref']}</span></h3>";
            $rright .= "<h3 class='profileData'>Gender <span class='output'>{$row['gender']}</span></h3>";
            $rright .= "<h3 class='profileData'>Age <span class='output'>{$row['age']} years</span></h3>";
        }
        while ($row2 = $result2->fetch_assoc()){
            $rright .= "<h3 class='profileData'><span class='profileEmail'>Email {$row2['email']}</span></h3>";

        }
    }
    else{
        header("location: /pages/login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
</head>
<body>
    <div id="container">
        <a href="../index.php"><img src="../img/logo.png" id="logo"></a>
        <a href="settings.php" class="dashboardIcon"><img src="../img/gear.png" alt="" ></a>
        <a href="achievement.php" class="dashboardIcon"><img src="../img/trophy.png" alt="" ></a>
        <a href="profile.php" class="dashboardIcon"><img src="../img/profileOrange.png" alt="" ></a>
        <a href="../index.php" class="dashboardIcon"><img src="../img/dashboard.png" alt="Dashboard"></a>
        <div id="profilecontainer">
            <div id="profilecontent">
                <div id="profileLeft">
                    <img src="../img/profile_img/placeholder.png">
                    <?php
                        echo $rleft;
                    ?>
                </div>
                <div id="profileRight">
                    <?php
                        echo $rright;
                    ?>
                    <div class="profileButton">
                        <button>Edit Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

