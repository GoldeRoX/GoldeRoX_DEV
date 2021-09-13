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
    <title>GoldeRoX DEV</title>
    <link rel="Stylesheet" type="text/css" href="css/contact_02.css">
</head>
<body>
    <div id="LOGO">
        <br>
        <h1><i><a href="index.php"><pre>GoldeRoX DEV</pre></a></i></h1>
    </div>
    
    <div id="HOME"><br><br><a href="index.php">HOME</a></div>
    <div id="INFO"><br><br><a href="info.php">INFO</a></div>
    <div id="CONTACT"><br><br><a href="contact.php">CONTACT</a></div>
    <div id="LOG"><br><br><a href="log_in.php">LOG IN</a></div>
    <div id="SIGN"><br><br><a href="sign_in.php">SIGN IN</a></div>

    <div id="LOGO">
        <br>
        <h1><i><a href="index.php"><pre>GoldeRoX DEV</pre></a></i></h1>
    </div>

    <div id="contact_info">
        <p>
            You Can find me and my work and projects here.<br> 
            Send to me an email <span>ONLY</span> for work offers or other tech releted matters.
            <br><br>GoldeRoXDEV@interia.pl
        </p>
    </div>

    <!-- Contact links -->
    
    <div id="contact_l">
        <a href="https://twitter.com/GoldeRoX_DEV" target="blank"><img src="images/Twitter.png"></a>
        <a href="https://github.com/GoldeRoX" target="blank"><img src="images/github.png"></a>
        <a href="mailto:GoldeRoXDEV@interia.pl" ><img src="images/Gmail.png"></a>
        <!--
            <script>
                var uzytkownik = 'GoldeRoXDEV';
                var domena = 'interia.pl';
                var dodatkowe = '?subject=Temat listu&body=Napisz co%9C:%0A';
                var opis = 'Wyślij do mnie list';
                document.write('<a hr' + 'ef="mai' + 'lto:' + uzytkownik + '\x40' + domena + dodatkowe + '">');
                if (opis) document.write(opis + '<'+'/a>');
                else document.write(uzytkownik + '\x40' + domena + '<'+'/a>');
            </script>
        -->
    </div>

    <?php
        unset($_SESSION['blad']);
        unset($_SESSION['blad_email']);
        unset($_SESSION['blad_repeat']);
    ?>

    <footer>&copy; <span id='footer'>2020</span> GoldeRoXDev</footer>
    <?php
        if(isset($_SESSION['log_in']))    echo '<span id="footer1">'.$_SESSION['log_in'].'</span>';
    ?>
    <script src="scripts/date.js"></script>
</body>
</html>