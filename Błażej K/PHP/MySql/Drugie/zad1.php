<!DOCTYPE html>
<html lang="pl-PL">
    
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad.1</title>

</head>

<body>
    
    <form action="zad1.php" method="post">

        <input type="text" name="produkt">
        <input type="number" name="ilosc">

            <br><br>

        <input type="submit" value="dodaj">

    </form>

    <?php

    $pdo = new PDO('mysql: host=localhost; dbname=market; charset=utf8; port=3306', 'root', '');

    if(isset($_POST["produkt"]) && isset($_POST["ilosc"]) && !empty($_POST["produkt"]) && !empty($_POST["ilosc"])){
        $zapytanie = $pdo->query('INSERT INTO `zakupy`(`nazwa produktu`, `ilosc`) VALUES ("'. $_POST["produkt"]. '", '. $_POST["ilosc"]. ')');
    }

    echo "<ul>";

    $zapytanie2 = $pdo->query('SELECT * FROM `zakupy` ORDER BY `nazwa produktu`');

    foreach($zapytanie2 as $wiersz){
        echo "<li>". $wiersz["nazwa produktu"]  ." ". $wiersz["ilosc"] . "</li>";
    }
    echo "</ul>";
    
?>

</body>
</html>