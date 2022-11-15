<?php

    if(isset($_POST["login"]) && isset($_POST["pwd"]) && isset($_POST["pwd2"]) && !empty($_POST["login"]) && !empty($_POST["pwd"]) && !empty($_POST["pwd2"])){
        if($_POST["pwd"] == $_POST["pwd2"]){
            if(strlen($_POST["pwd"]) > 6){
                echo "Konto zostało pomyślnie założone <br> <br>";

            $uchwyt = fopen("reg.txt", "a");
            fputs($uchwyt, $_POST["login"] .";;". $_POST["pwd"].";;");
            fclose($uchwyt);
            }else{
                echo "Hasło jest za krótkie";
            }
            
        }
        else{
            echo "Wprowadzone hasła są niezgodne <br> <br>";
        }
    }
    else{
        echo "Dane nie zostały wprowadzone <br> <br>";
    }

?>


<!DOCTYPE html>

<html lang="pl-PL">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>

</head>

<body>

    <form action="zad 5.php" method="post">

        Login <input type="text" name="login" /> <br> <br>

        Hasło <input type="password" name="pwd" /> <br> <br>

        Potwierdź hasło: <input type="password" name="pwd2" /> <br> <br>

        <input type="submit" value="Zarejrestruj" />

    </form>

    <a href="zad 5.2.php"> <button>Przejdz Logowania</button> </a>
    
</body>

</html>