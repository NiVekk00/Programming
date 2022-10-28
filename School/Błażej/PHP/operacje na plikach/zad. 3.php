<?php

    // if($x == 0){
    //     $x++;
    //     $uchwyt = fopen("nazwy.txt", "w");
    //     fclose($uchwyt);
    // }

    if(isset($_POST["text"])){
        $zawartosc = $_POST["text"];
        $uchwyt = fopen("nazwy.txt", "a");
        fputs($uchwyt, $zawartosc. "\n");
        fclose($uchwyt);
    }

    $uchwyt2 = fopen("nazwy.txt", "r");
    $tresc = file("nazwy.txt");
    fclose($uchwyt2);

    
    
    ?>



<!DOCTYPE html>

<html lang="pl-PL">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacje na pliku</title>

</head>

<body>

    <form action="zad. 3.php" method="post">

    <input type="text" name="text" placeholder="Wprowadz imie">

    <input type="submit">

    </form>

    <div><?php foreach($tresc as $value){
        echo $value. "<br>";
    }?></div>

    
</body>

</html>