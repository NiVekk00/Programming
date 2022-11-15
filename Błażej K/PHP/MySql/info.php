<?php

    $pdo = new PDO('mysql:host=localhost;dbname=biblioteka1;charset=utf8;port=3306', 'root', '');

    $zapytanie = $pdo->query("SELECT * FROM autorzy");




    // $wiersz = $zapytanie->fetch();

    // var_dump($wiersz["Nazwisko"]);

    // echo "<br><br>";

    // $wiersz = $zapytanie->fetch();

    // var_dump($wiersz["Nazwisko"]);

    // $wiersz = $zapytanie->fetch();

    // echo "<br><br>";

    // var_dump($wiersz["Nazwisko"]);

    
    
    
    
    // while($wiersz = $zapytanie->fetch()){
    //     echo $wiersz["Imie"]. " ". $wiersz["Nazwisko"]. "<br>";
    // }

    foreach($zapytanie as $wiersz){
        echo $wiersz. "<br>";
    }



    

?>