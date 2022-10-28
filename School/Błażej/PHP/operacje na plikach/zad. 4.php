<?php

    // if($x == 0){
    //     $x++;
    //     $uchwyt = fopen("nazwy.txt", "w");
    //     fclose($uchwyt);
    // }

    if(isset($_POST["text"]) && isset($_POST["text2"])){
        $imie = $_POST["text"];
        $komentarz = $_POST["text2"];
        $uchwyt = fopen("ksiega.txt", "a");
        fputs($uchwyt, $imie. ";;" .$komentarz. ";;\n" );
        fclose($uchwyt);
    }

    $uchwyt2 = fopen("ksiega.txt", "r");
    $trescxd = file("ksiega.txt");
    $test = implode(" ", file("ksiega.txt"));
    $tresc = explode(";;", $test);
    fclose($uchwyt2);

    foreach($tresc as $key => $value){
        if($key %2 ==0){
            global $wyswietl;
            echo $wyswietl = "<b>". $value. "</b> <br>";
        }
        else{
            global $wyswietl;
            echo $wyswietl = $value . "<br>";
        }
    }

    
    
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

    <form action="zad. 4.php" method="post">

    <input type="text" name="text" placeholder="Wprowadz imie">

    <textarea name="text2" placeholder="Wprowadz komentarz"></textarea>

    <input type="submit">

    </form>

    <div><?php var_dump($wyswietl); ?></div>

    
</body>

</html>