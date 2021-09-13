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
        $email1 = $_POST["new_email_1"];
        $email2 = $_POST["new_email_2"];
        //
        $pass1 = $_POST["new_password_1"];
        $pass2 = $_POST["new_password_2"];
        //
        $username = $_POST["username"];
        $phone_number = $_POST["phone-number"];
        //
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];



        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        
        $sql = "SELECT * FROM uzytkownicy WHERE email='$email1'";
        $sqladd = "INSERT INTO `uzytkownicy` (`user`, `pass`, `email`, `name`, `surname`, `phone_number`) VALUES
        ('$username', '$pass_hash', '$email1', '$first_name', '$last_name', $phone_number);";

        //konfiguracje zapytania SQL do bazy danych

        if($username == NULL && $phone_number == NULL && $first_name == NULL && $last_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`pass`, `email`) VALUES
            ('$pass_hash', '$email1');";
        }
        if($username == NULL && $phone_number == NULL && $last_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`pass`, `email`, `name`) VALUES
            ('$pass_hash', '$email1', '$first_name');";
        }
        if($phone_number == NULL && $first_name == NULL && $last_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`user` ,`pass`, `email`) VALUES
            ('$username' ,'$pass_hash', '$email1');";
        }
        if($username == NULL && $first_name == NULL && $last_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`pass`, `email`, `phone_number`) VALUES
            ('$pass_hash', '$email1', '$phone_number');";
        }
        if($phone_number == NULL && $first_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`user` ,`pass`, `email`, `surname`) VALUES
            ('$username' ,'$pass_hash', '$email1', '$last_name');";
        }
        if($phone_number == NULL && $last_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`user`, `pass`, `email`, `name`) VALUES
            ('$username' ,'$pass_hash', '$email1', '$first_name');";
        }
        if($first_name == NULL && $last_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`user`, `pass`, `email`, `phone_number`) VALUES
            ('$username' ,'$pass_hash', '$email1', '$phone_number');";
        }
        if($username == NULL && $phone_number == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`pass`, `email`, `name`, `surname`) VALUES
            ('$pass_hash', '$email1', '$first_name', '$last_name');";
        }
        if($username == NULL && $last_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`pass`, `email`, `name`, `phone_number`) VALUES
            ('$pass_hash', '$email1', '$first_name', '$phone_number');";
        }
        if($username == NULL && $first_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`pass`, `email`, `surname`, `phone_number`) VALUES
            ('$pass_hash', '$email1', '$last_name', '$phone_number');";
        }
        if($phone_number == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`user`, `pass`, `email`, `name`, `surname`) VALUES
            ('$username' ,'$pass_hash', '$email1', '$first_name', '$last_name');";
        }
        if($last_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`user`, `pass`, `email`, `name`, `phone_number`) VALUES
            ('$username' ,'$pass_hash', '$email1', '$first_name', '$phone_number');";
        }
        if($first_name == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`user`, `pass`, `email`, `surname`, `phone_number`) VALUES
            ('$username' ,'$pass_hash', '$email1', '$last_name', '$phone_number');";
        }
        if($username == NULL)
        {
            $sqladd = "INSERT INTO `uzytkownicy` (`pass`, `email`, `name`, `surname`, `phone_number`) VALUES
            ('$pass_hash', '$email1', '$first_name', '$last_name', '$phone_number');";
        }



        if($email1 == $email2 && $pass1 == $pass2)
        {
            unset($_SESSION['blad_repeat']);
            if($rezultat = @$polaczenie->query($sql))
            {
                $ilu_userow = $rezultat->num_rows;
                if($ilu_userow>0)
                {
                    unset($_SESSION['blad_repeat']);
                    $_SESSION['blad_email'] = '<span style="color:red">The current email is already in use! </span>';
                    header('Location: sign_in.php');
                }
                else
                {
                    unset($_SESSION['blad_email']);
                    @$polaczenie->query($sqladd);
                    $rezultat->free_result();
                    header('Location: log_in.php');
                }
            }
        }else
        {
            unset($_SESSION['blad_email']);
            $_SESSION['blad_repeat'] = '<span style="color:red">check if email or password are the same as the "repeat" versions! </span>';
            header('Location: sign_in.php');
        }
        $polaczenie->close();
    }
?>