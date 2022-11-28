<!DOCTYPE html>

<html lang="pl-PL">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj zapytanie</title>

</head>

<body>

    <?php

        $pdo = new PDO('mysql: host=localhost; dbname=quizz; port=3306; charset=utf8', 'root', '');
        
        $zapytanie = $pdo->prepare('SELECT `id` FROM `pytanie`');

        $zapytanie ->execute();

        foreach($zapytanie as $wiersz){
            echo '<a href="edytuj_zapytanie.php?edytuj_id='. $wiersz["id"]. '">pytanie '. $wiersz["id"] .'</a><br>';
        }

        if(isset($_POST["query"]) && isset($_POST["Ans"]) && !empty($_POST["query"])){

            $Ans = "ans". $_POST["Ans"];
        
            $zapytanie3 = $pdo->prepare('UPDATE `pytanie` SET `pytanie` = :pytanie, `odpowiedz` = :odpowiedz, `ansA` = :ansA, `ansB` = :ansB, `ansC` = :ansC, `AnsD` = :AnsD WHERE `id` = '. $_GET["edytuj_id"]. '');
    
            $zapytanie3 -> bindValue(':pytanie', $_POST["query"], PDO::PARAM_STR);
            $zapytanie3 -> bindValue(':odpowiedz', $_POST["Ans"], PDO::PARAM_STR);
    
            $zapytanie3 -> bindValue(':ansA', $_POST["query1"], PDO::PARAM_STR);
            $zapytanie3 -> bindValue(':ansB', $_POST["query2"], PDO::PARAM_STR);
            $zapytanie3 -> bindValue(':ansC', $_POST["query3"], PDO::PARAM_STR);
            $zapytanie3 -> bindValue(':AnsD', $_POST["query4"], PDO::PARAM_STR);
    
            $zapytanie3 -> execute();
        }

        if(isset($_GET["edytuj_id"])){
            $zapytanie2 = $pdo->prepare('SELECT * FROM `pytanie` WHERE `id` = '. $_GET["edytuj_id"]. ' ');
            $zapytanie2 -> execute();
            foreach($zapytanie2 as $wiersz){
                echo '
                    <form method="post">
                    Edytuj pytanie: <input type="text" name="query" value="'. $wiersz["pytanie"] . '"><br><br>
                    Poprawna odpowiedź to: <br>
                    <input type="text" name="query1" value="'. $wiersz["ansA"] . '">';
                    if($wiersz["odpowiedz"] == "A"){
                        echo 'A<input type="radio" name="Ans" value="A" checked>';
                    } else{
                        echo 'A<input type="radio" name="Ans" value="A">';
                    }
                    echo ' <br>
                    <input type="text" name="query2" value="'. $wiersz["ansB"] . '">';
                    if($wiersz["odpowiedz"] == "B"){
                        echo 'B<input type="radio" name="Ans" value="B" checked>';
                    } else{
                        echo 'B<input type="radio" name="Ans" value="B">';
                    }
                    echo ' <br>
                    <input type="text" name="query3" value="'. $wiersz["ansC"] . '">';
                    if($wiersz["odpowiedz"] == "C"){
                        echo 'C<input type="radio" name="Ans" value="C" checked>';
                    } else{
                        echo 'C<input type="radio" name="Ans" value="C">';
                    } 
                    echo ' <br>
                    <input type="text" name="query4" value="'. $wiersz["AnsD"] . '">';
                    if($wiersz["odpowiedz"] == "D"){
                        echo 'D<input type="radio" name="Ans" value="D" checked>';
                    } else{
                        echo 'D<input type="radio" name="Ans" value="D">';
                    }
                    echo ' <br>
        
                    <input type="submit" value="EDYTUJ">

                    </form>
            ';
            }
            
        }

    ?>

<br><br>
    <a href="dodaj_zapytanie.php">Przejdz do dodawania pytań</a><br><br>
    <a href="usun_zapytanie.php">Przejdz do usuwanie pytań</a>

</body>

</html>