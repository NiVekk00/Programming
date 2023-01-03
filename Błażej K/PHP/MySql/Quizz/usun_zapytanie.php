<!DOCTYPE html>

<html lang="pl-PL">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuń zapytanie</title>

</head>

<body>

<style>
        body{
            display: flex;
            align-items: center;
            width: 100vw;
            height: 100vh;
            flex-direction: column;
            margin-top: 3rem;
        }
    </style>

    <?php

        $pdo = new PDO('mysql: host=localhost; dbname=quizz; port=3306; charset=utf8', 'root', '');
        

        if(isset($_GET["edytuj_id"])){
            $zapytanie2 = $pdo->prepare('DELETE FROM `pytanie` WHERE `id` = '. $_GET["edytuj_id"]. ' ');
            $zapytanie2 -> execute();
        }

        $zapytanie = $pdo->prepare('SELECT `id` FROM `pytanie`');

        $zapytanie ->execute();

        foreach($zapytanie as $wiersz){
            echo '
            <a href="usun_zapytanie.php?edytuj_id='. $wiersz["id"]. '">pytanie '. $wiersz["id"] .'</a><br>';
        }

    ?>

    <br><br>
    <a href="dodaj_zapytanie.php">Przejdz do dodawania pytania</a><br><br>
    <a href="edytuj_zapytanie.php">Przejdz do edycji pytań</a>

</body>

</html>