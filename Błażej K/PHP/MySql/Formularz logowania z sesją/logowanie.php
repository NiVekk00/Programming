<?php
session_start();
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

<style>

    body{
        display: flex;
        align-items: center;
        width: 100vw;
        height: 100vh;
        flex-direction: column;
    }

    #content{
        margin-top: 5rem;
    }

</style>

<h1>Formularz logowania</h1>

    <div id="content">

        <form action="logowanie.php" method="post">

            Login <input type="text" name="login"> <br> <br>
            Hasło <input type="password" name="passwd"> <br><br>

            <input type="submit" value="Zaloguj">

        </form>

    </div>
    
</body>

</html>

<?php

    $pdo = new PDO('mysql: host=localhost; dbname=sesja; charset=utf8; port=3306', 'root', '');

    if(isset($_GET["wylogowano"])){
        echo "zostałeś wylogowany XD";
    }

    if(isset($_SESSION["login"]) && isset($_SESSION["passwd"])){
        header("location: ukryte.php");
    }


    if(isset($_POST['login']) && isset($_POST['passwd']) && !empty($_POST['login']) && !empty($_POST['passwd'])){

        $login = $_POST['login'];
        $hash_password = sha1($_POST['passwd']);

        $check_in_database = $pdo -> prepare('SELECT `login` FROM `użytkownik` WHERE `login` = :loginn');

        $check_in_database -> bindParam(':loginn', $login, PDO::PARAM_STR);

        $check_in_database -> execute();

        $check = $check_in_database -> fetch();

        if($check){

            $draw_throw_database = $pdo -> prepare('SELECT `login`, `hasło` FROM `użytkownik` WHERE `login` = :loginn');

            $draw_throw_database -> bindParam(':loginn', $login, PDO::PARAM_STR);

            $draw_throw_database -> execute();

            foreach($draw_throw_database as $wiersz){
                if($login == $wiersz[0] && $hash_password == $wiersz[1]){
                    if(!isset($_SESSION["login"]) && !isset($_SESSION["passwd"])){
                        $_SESSION["login"] = $login;
                        $_SESSION["passwd"] = $hash_password;
                    }
    
                    header("location: ukryte.php");
    
                }else{
                    echo "Podane hasło jest nieprawidłowe, beka z cb czy coś xD";
                }
            }
        }else{
            echo "Podany login nie istnieje w bazie, idź do domu";
        }
    }

?>