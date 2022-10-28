<?php

    if(isset($_POST["login"]) && isset($_POST["pwd"]) && isset($_POST["pwd2"]) && !empty("login") && !empty("pwd") && !empty("pwd2")){

            $uchwyt = fopen("reg.txt", "r");
            $tresc = file("reg.txt");
            var_dump($tresc);
            $tablica = implode(" ", $tresc);
            $ostateczny = explode(";;", $tablica);

            foreach($ostateczny as $key => $value){
                if($key == 0){
                    global $login;
                    $login = $value;
                }
                if($key == 1){
                    global $haslo;
                    $haslo = $value;
                }
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

        Potwierdź hasło: <input type="password" name="pwd2" /> <br> <br>

        <input type="submit" value="Zaloguj">

    </form>
    
</body>

</html>