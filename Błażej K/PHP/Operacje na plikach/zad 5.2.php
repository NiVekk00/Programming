<?php

    if(isset($_POST["login"]) && isset($_POST["pwd"]) && !empty("login") && !empty("pwd")){

            $uchwyt = fopen("reg.txt", "r");
            $tresc = file("reg.txt");
            $tablica = implode(" ", $tresc);
            $ostateczny = explode(";;", $tablica);

            $haslo ="";
            $login ="";

            for($i =0; $i<Count($ostateczny); $i+=2){
                echo "pierwsze: ";
                var_dump($ostateczny[$i]);
                echo "<br> drugie: ";
                var_dump($ostateczny[$i+1]);
                echo "<br><br>";
                var_dump($_POST["pwd"]);
                if($ostateczny[$i] == $_POST["login"]){
                    global $login;
                    $login = $ostateczny[$i];
                }else
                if($ostateczny[$i+1] == $_POST["pwd"]){
                    global $haslo;
                    $haslo = $ostateczny[$i+1];
                }else{
                    "Nie ma takiego siakiego ";
                }
            }

            if($_POST["login"] == $login && $_POST["pwd"] == $haslo){
                echo "Baza wirusow avast zostala zaktualizowana. Kup licencje WinRara";
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
    <title>Logowanie</title>

</head>

<body>

    <form action="zad 5.2.php" method="post">

        Login <input type="text" name="login" /> <br> <br>

        Hasło <input type="password" name="pwd" /> <br> <br>

        <input type="submit" value="Zaloguj">

    </form>

    <a href="zad 5.php"> <button>Wroc do rejestracji</button> </a>
    
</body>

</html>