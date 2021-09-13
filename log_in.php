<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="keywords" content="GoldeRoX, GoldeRoX DEV, Gold dev, Gold, GoldeRoX Games, GoldeRoX GitHub">
    <meta name="author" content="GoldeRoX Dev">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoldeRoX DEV-log in</title>
    <link rel="Stylesheet" type="text/css" href="css/log_in_02.css">

</head>
<body>
    <div id="LOGO">
                <br>
                <h1><i><a href="index.php"><pre>GoldeRoX DEV</pre></a></i></h1>
            </div>

    <div id="HOME"><br><br><a href="index.php">HOME</a></div>
    <div id="CONTACT"><br><br><a href="contact.php">CONTACT</a></div>
    <div id="INFO"><br><br><a href="info.php">INFO</a></div>
    


    <!-- drugie logo -->

    <div id="LOGO">
                <br>
                <h1><i><a href="index.php"><pre>GoldeRoX DEV</pre></a></i></h1>
    </div>

    <div id="github_1"><a href="https://github.com/GoldeRoX" target="blank"><img src="images/github.png"></a></div>

    <div id="login">
        <form class="box" action="login.php" method="POST">

            <h1>LOGIN</h1>

            <input type="email" name="email" placeholder="email" required>
            
            <input type="password" name="password" placeholder="password" required>
            
            <input type="submit" value="Login">
            <!--
                
                <button type="submit">Log in</button>
            
            -->
            
            <?php

            unset($_SESSION['blad_email']);
            unset($_SESSION['blad_repeat']);

            if(isset($_SESSION['blad']))    echo $_SESSION['blad'];

        ?>

        </form>
            
        <?php

            //unset($_SESSION['blad_email']);
            //unset($_SESSION['blad_repeat']);

            //if(isset($_SESSION['blad']))    echo $_SESSION['blad'];

        ?>
            
    </div>

    <div id="github_2"><a href="https://github.com/GoldeRoX" target="blank"><img src="images/github.png"></a></div>

    <footer>&copy; <span id='footer'>202</span> GoldeRoXDev</footer>
    <?php
        if(isset($_SESSION['log_in']))    echo '<span id="footer1">'.$_SESSION['log_in'].'</span>';
    ?>
    <script src="scripts/date.js"></script>

</body>
</html>