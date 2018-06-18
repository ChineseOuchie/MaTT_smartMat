<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();
    if (isset($_SESSION['login_user'])){
        $conn = new mysqli("localhost", "root", "root", "matt");
        $sql = "SELECT * FROM userprofile WHERE iduserprofile = '{$_SESSION['login_user']}';";
        $result = $conn->query($sql);
        $r = "";
        while ($row = $result->fetch_assoc()){
            $r .= "<h2>{$row['firstname']} {$row['sirname']} </h2>";
            $r .= "<h3 class='profileData'>Weight {$row['weight']}kg</h3>";
            $r .= "<h3 class='profileData'>Height {$row['height']}m</h3>";
            $r .= "<h3 class='profileData'>Exercise routine {$row['exerciseRout']}</h3>";
            $r .= "<h3 class='profileData'>Prefered exercise {$row['exercisePref']}</h3>";
            $r .= "<h3 class='profileData'>Gender {$row['gender']}</h3>";
            $r .= "<h3 class='profileData'>Age {$row['age']} years</h3>";
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
                <img src="../img/profile_img/placeholder.png">
                <?php
                    echo $r;
                ?>
                <button>Edit Profile</button>
            </div>
        </div>
    </div>
</body>
</html>

