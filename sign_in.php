<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="keywords" content="GoldeRoX, GoldeRoX DEV, Gold dev, Gold, GoldeRoX Games, GoldeRoX GitHub">
    <meta name="author" content="GoldeRoX Dev">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoldeRoX DEV-log in</title>
    <link rel="Stylesheet" type="text/css" href="css/sign_in_02.css">

</head>
    <body>
    <div id="LOGO">
        <br><h1><i><a href="index.php"><pre>GoldeRoX DEV</pre></a></i></h1>
    </div>

    <div id="HOME"><br><br><a href="index.php">HOME</a></div>
    <div id="CONTACT"><br><br><a href="contact.php">CONTACT</a></div>
    <div id="INFO"><br><br><a href="info.php">INFO</a></div>

    <div id="LOGO">
        <br><h1><i><a href="index.php"><pre>GoldeRoX DEV</pre></a></i></h1>
    </div>

    <div id="github_1"><a href="https://github.com/GoldeRoX" target="blank"><img src="images/github.png"></a></div>

        <form class="box" action="signin.php" method="POST">

            <h1>Sign in</h1>

            <div id="left_sign">
                <input class="left_signs" type="email" name="new_email_1" placeholder="* email *" required>
                <input class="left_signs" type="password" name="new_password_1" placeholder="* Password *" required>
                <input class="left_signs" type="text" name="username" placeholder="Username">
                <input class="left_signs" type="text" name="first_name" placeholder="First name">
            </div>

            <div id="right_sign">
                <input class="right_signs" type="email" name="new_email_2" placeholder="* Repeat email *" required>
                <input class="right_signs" type="password" name="new_password_2" placeholder="* Repeat password *" required>
                <input class="right_signs" type="tel" name="phone-number" placeholder="Phone-number" pattern="[0-9]{9}">
                <input class="right_signs" type="text" name="last_name" placeholder="Last name">
            </div>
                <br><br><br> 
                <input type="submit" value="Sign in">
                
                <?php

                    if(isset($_SESSION['blad_email']))    echo $_SESSION['blad_email'];

                    if(isset($_SESSION['blad_repeat']))    echo $_SESSION['blad_repeat'];

                ?>
        </form>

    <div id="github_2"><a href="https://github.com/GoldeRoX" target="blank"><img src="images/github.png"></a></div>

    <footer>&copy; <span id='footer'>2020</span> GoldeRoXDev</footer>
    <?php
        if(isset($_SESSION['log_in']))    echo '<span id="footer1">'.$_SESSION['log_in'].'</span>';
    ?>
    <script src="scripts/date.js"></script>
</body>
</html>