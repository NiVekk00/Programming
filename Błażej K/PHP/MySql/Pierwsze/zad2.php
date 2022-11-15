<?php

    $pdo = new PDO('mysql: host=localhost; dbname=telefony; charset=utf8; port=3306', 'root', '');

    $zapytanie = $pdo->query("SELECT * FROM ogólne");

    $zapytanie2 = $pdo->query("SELECT COUNT(Marka) FROM ogólne");

    echo "
    <table> 
    <tr>

        <td>Model</td><td>Marka</td>

    </tr>";

    while($wiersz = $zapytanie->fetch()){
        echo "
        
        <tr>
            <td>". $wiersz["Marka"]. "</td><td>". $wiersz["Model"] ."</td>

        </tr>";
    }

    echo "</table>";

    foreach($zapytanie2 as $value){
        echo "Ile telefonów: ". $value[0];
    }

?>

<!DOCTYPE html>

<html lang="pl-PL">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad. 1</title>

    <style>
        table,td{
            border: 1px solid black;
        }
    </style>

</head>

<body>

</body>

</html>