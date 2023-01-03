<!DOCTYPE html>

<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>

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

<h1>Formularz Rejestracji</h1>

    <div id="content">

        <form action="rejestracja.php" method="post">

            Login <input type="text" name="login"> <br> <br>
            Hasło <input type="password" name="passwd"> <br><br>
            Powtórz hasło <input type="password" name="passwd_repeat"> <br><br>

            <input type="submit" value="Zarejestruj">

        </form>

    </div>
    
</body>

</html>

<?php

    $pdo = new PDO('mysql: host=localhost; dbname=sesja; charset=utf8; port=3306', 'root', '');

    $add_to_database = $pdo -> prepare('INSERT INTO `użytkownik` (`login`, `hasło`) VALUES (:loginn, :passwd)');

    if(isset($_POST['login']) && isset($_POST['passwd']) && isset($_POST['passwd_repeat']) && !empty($_POST['login']) && !empty($_POST['passwd']) && !empty($_POST['passwd_repeat'])){
        if($_POST['passwd'] == $_POST['passwd_repeat']){

            $login = $_POST['login'];
            $passwd = sha1($_POST['passwd']);

            $check_if_exists = $pdo -> prepare('SELECT `login` FROM `użytkownik` WHERE `login` = "'. $_POST["login"] .'"');

            $check_if_exists -> execute();

            $check = $check_if_exists->fetch();

            if(!$check){

                echo "Konto zostało utworzone pomyślnie!";

                $add_to_database -> bindParam(':loginn', $login, PDO::PARAM_STR);
                $add_to_database -> bindParam(':passwd', $passwd, PDO::PARAM_STR);

                $add_to_database -> execute();

            }else{
                echo "Podany login już istnieje w bazie, po co się rejestrujesz hmmm ?";
            }
        }
    }

?>