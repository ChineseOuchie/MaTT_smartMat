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
    <script src="../js/settings.js"></script>
    <title>MATT Achievement</title>
</head>
<body>
<div id="container">
    <a href="../index.php"><img src="../img/logo.png" id="logo"></a>
    <a href="../pages/settings.php" class="dashboardIcon"><img src="../img/settingsOrange.png" alt="" ></a>
    <a href="../pages/achievement.php" class="dashboardIcon"><img src="../img/trophy.png" alt="" ></a>
    <a href="" class="dashboardIcon"><img src="../img/profile.png" alt="" ></a>
    <a href="../index.php" class="dashboardIcon"><img src="../img/dashboard.png" alt="Dashboard"></a>
    <div id="settings">
        <h1>Settings</h1>
        <div id="settingsItems">
            <nav>
                <ul>
                    <li class="navItem">Privacy Policy</li>
                    <li class="navItem">Change password</li>
                    <li class="navItem">Language</li>
                    <li class="navItem">Notifications</li>
                    <li class="navItem"><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
            <div id="settingsInfo">
                <div id="privacy" class="info">
                    INFORMATION WE MAY COLLECT FROM YOU
                    In order to process each subscription to our website, we collect personal details from you. These details may include (where applicable) names, addresses telephone numbers,
                    e-mail and IP addresses, credit/debit card or other payment details. We also store all information which you may submit to us in respect of any services provided on the Website,
                    which information may include personal information
                    USES MADE OF THE INFORMATION
                    We use information held about you in the following ways:
                    To ensure that content from our site is presented in the most effective manner for you and for your computer.
                    To provide you with information, products or services that you request from us or which we feel may interest you, where you have consented to be contacted for such purposes.
                    To carry out our obligations arising from any contracts entered into between you and us.
                    To allow you to participate in interactive features of our service, when you choose to do so.
                    To notify you about changes to our service. Where you have consented, we may also use your data, or permit selected third parties to use your data,
                    to provide you with information about goods and services which may be of interest to you and we or they may contact you about these by electronic means.
                    If you do not want us to use your data in this way, or to pass your details on to third parties for marketing purposes, please tick the relevant box situated on the form on
                    which we collect your data. We may also disclose your information to contracted companies who act as "data processors" on our behalf, or with your agreement to ancillary
                    service providers such as credit card providers.
                    We follow strict security procedures in the storage and disclosure of information. Our security procedures require that we request proof of identity before we disclose sensitive information.
                    IP ADDRESSES
                    We may collect information about your computer, including where available your IP address, operating system and browser type, for system administration
                    and to report aggregate information to our advertisers. This is statistical data about our users' browsing actions and patterns, and does not identify any individual.
                    DIRECT MARKETING MATERIAL
                    From time to time we may contact you with information regarding promotions, competitions and ancillary products via email. However,
                    you will have the choice to opt in or out of receiving such communications by so indicating on the Website. You will also be given the opportunity on every e-communication
                    that we send you to indicate that you no longer wish to receive our direct marketing material
                </div>
                <div id="changePassword" class="info">
                    <form>
                        <input type="password" class="changePassword" id="oldPassword" placeholder="Current password">
                        <input type="password" class="changePassword" id="newPassword" placeholder="New password">
                        <input type="password" class="changePassword" id="repeatNewPassword" placeholder="Repeat new password">
                        <input type="submit" name= "submit" id="changeSubmit" placeholder="Submit">
                    </form>
                </div>
                <div id="language" class="info">
                    <button class="languageBtn">English</button>
                    <button class="languageBtn">Dutch</button>
                    <button class="languageBtn">Italian</button>
                    <button class="languageBtn">French</button>
                    <button class="languageBtn">Spanish</button>
                    <button class="languageBtn">Polish</button>
                    <button class="languageBtn">German</button>
                    <button class="languageBtn">japanese</button>
                </div>
                <div id="notification" class="info">
                    <div id="notificationInfo">
                        <p>Do you want the app to send you notifications?</p>
                        <p>The app will let you know if its time to sport, if you didn’t reach your goal or if you did.</p>
                    </div>
                    <div id="notificationBtn">
                        Off
                        <label class="switch">
                            <input type="checkbox" class="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                        On
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>