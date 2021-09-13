<!DOCTYPE html>
<html>
    <HEAD>
        <title>test log</title>
        
    </HEAD>
    <body>

<?php

    session_start();

    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }
    else
    {
        //informacje wyciągnięte z formularza 
        $haslo = $_POST["password"];
        $email = $_POST["email"];

      
        

        $sql = "SELECT * FROM uzytkownicy WHERE email='$email'";


        if($rezultat = @$polaczenie->query($sql))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {

                $wiersz = $rezultat->fetch_assoc();

                if (password_verify($haslo, $wiersz['pass'])) //sprawdzenie hasła z jego szyfrowacją hash
                    {
                        //wyciąga wiersz z tabeli o nazwie "name"
                        $_SESSION['name'] = $wiersz['name'];
                        $_SESSION['surname'] = $wiersz['surname'];
                        $_SESSION['email'] = $wiersz['email'];
                        $_SESSION['pass'] = $wiersz['pass'];
        
                        $_SESSION['log_in'] = '<a href="log_out.php">Wyloguj</a> - <l>'.$_SESSION['email'].'</l> ';
        
                        unset($_SESSION['blad']);
                        $rezultat->free_result();

                        
                        header('Location: index.php');
                    }else
                {
                    $_SESSION['blad'] = '<span style="color:red">Invalid login or password!</span>';
                    header('Location: log_in.php');
                }
            }else
            {

                $_SESSION['blad'] = '<span style="color:red">Invalid login or password!</span>';
                header('Location: log_in.php');

            }
        }

        $polaczenie->close();
    }

?>
</body>
</html>