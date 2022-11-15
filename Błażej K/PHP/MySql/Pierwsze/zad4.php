<?php

    $pdo = new PDO('mysql: host=localhost; dbname=telefony; charset=utf8; port=3306', 'root', '');

   $zapytanie = "
        CREATE TABLE lokal(
            id_lokalu INT AUTO_INCREMENT PRIMARY KEY,
            miejscowosc VARCHAR(255) NOT NULL,
            adres VARCHAR(255) NOT NULL
        )";

        try{
            $cos = $pdo->exec($zapytanie);
            echo "Baza stworzona pomyślnie";
        }
        catch(PDOException $e){
        echo "Jakiś błąd, tu po prawej przeczytaj: " . $e->getMessage();
        }
?>