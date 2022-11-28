<!DOCTYPE html>

<html lang="pl-PL">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj zapytanie</title>

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
    </style>

    <h1>Quizz!</h1>

    Twoje pytanie:

    <br><br>

    <?php

        $pdo = new PDO('mysql: host=localhost; dbname=quizz; port=3306; charset=utf8', 'root', '');

        

        $wszystkie = $pdo->prepare('SELECT * FROM `pytanie` ORDER BY rand()');

        $wszystkie -> execute();

        foreach($wszystkie as $wiersz){
            echo '
                <form action="gra.php" method="post">

                <input type="text" name="query1" value="'. $wiersz["pytanie"] .'" disabled>

                <br><br>

                Odpowiedzi: <br><br><input type="text" name="query2" value="'. $wiersz["ansA"] .'" disabled>

                A<input type="radio" name="Ans" value="A"> <br>

                <input type="text" name="query3" value="'. $wiersz["ansB"] .'" disabled>

                B<input type="radio" name="Ans" value="B"> <br>

                <input type="text" name="query4" value="'. $wiersz["ansC"] .'" disabled>

                C<input type="radio" name="Ans" value="C"> <br>

                <input type="text" name="query5" value="'. $wiersz["AnsD"] .'" disabled>

                D<input type="radio" name="Ans" value="D"> <br><br><br>

                <input type="hidden" value="'. $wiersz["id"] .'" name="hidden">

                <input type="submit" value="Sprawdz odpowiedz!">

                </form>
            ';
            break;
        }

        if(isset($_POST["Ans"])){
            $odpowiedz = $pdo->prepare('SELECT `odpowiedz` FROM `pytanie` where `id` = '. $_POST["hidden"] .'');

            $odpowiedz -> execute();

            foreach($odpowiedz as $gigachad){
                if($_POST["Ans"] == $gigachad["odpowiedz"]){
                    echo "Poprawna odpowiedź! Dostajesz w nagrode NIC";
                }
                else{
                    echo "Odpowiedz zla, beka z ciebie";
                }
            }
        }

    ?>

</body>

</html>