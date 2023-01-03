<?php
session_start();
?>

<!DOCTYPE html>

<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prawdziwa stronka</title>

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

<h1>Siemano</h1>

    <div id="content">

    </div>
    
</body>

</html>

<?php
    $pdo = new PDO('mysql: host=localhost; dbname=sesja; charset=utf8; port=3306', 'root', '');

    if(!isset($_SESSION["login"]) && !isset($_SESSION["passwd"])){
        header("location: logowanie.php");
    }

    if(isset($_GET["wyloguj"])){
        $_SESSION["login"] = NULL;
        $_SESSION["passwd"] = NULL;
        session_destroy();
        header("location: logowanie.php?wylogowano");
    }


    echo "Witaj ". $_SESSION["login"];

    echo '<br><br> <a href="ukryte.php?wyloguj">Wyloguj</a>';
?>