<!DOCTYPE html>

<html lang="pl-PL">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj zapytanie</title>

</head>

<body>

    <form action="dodaj_zapytanie.php" method="post">

        Dodaj pytanie: <input type="text" name="query"><br><br>
        Poprawna odpowiedź to: <br>
        <input type="text" name="query1"> A<input type="radio" name="Ans" value="A"> <br>
        <input type="text" name="query2"> B<input type="radio" name="Ans" value="B"> <br>
        <input type="text" name="query3"> C<input type="radio" name="Ans" value="C"> <br>
        <input type="text" name="query4"> D<input type="radio" name="Ans" value="D"> <br> <br>

        <input type="submit" value="DODAJ">

    </form>

    <br><br>

    <a href="edytuj_zapytanie.php">Przejdz do edycji pytań</a><br><br>
    <a href="usun_zapytanie.php">Przejdz do usuwanie pytań</a>

</body>

</html>

<?php

$pdo = new PDO('mysql: host=localhost; dbname=quizz; port=3306; charset=utf8', 'root', '');

    if(isset($_POST["query"]) && isset($_POST["Ans"]) && !empty($_POST["query"])){

        $Ans = "ans". $_POST["Ans"];
    
        $zapytanie = $pdo->prepare('INSERT INTO `pytanie` (`pytanie`, `odpowiedz`, `ansA`, `ansB`, `ansC`, `AnsD`) VALUES (:pytanie, :odpowiedz, :ansA, :ansB, :ansC, :AnsD)');

        $zapytanie -> bindValue(':pytanie', $_POST["query"], PDO::PARAM_STR);
        $zapytanie -> bindValue(':odpowiedz', $_POST["Ans"], PDO::PARAM_STR);

        $zapytanie -> bindValue(':ansA', $_POST["query1"], PDO::PARAM_STR);
        $zapytanie -> bindValue(':ansB', $_POST["query2"], PDO::PARAM_STR);
        $zapytanie -> bindValue(':ansC', $_POST["query3"], PDO::PARAM_STR);
        $zapytanie -> bindValue(':AnsD', $_POST["query4"], PDO::PARAM_STR);

        $zapytanie -> execute();
    }

?>