<?php
    
    if(isset($_POST["text"])){
        $zawartosc = $_POST["text"];
        $uchwyt = fopen("notatki.txt", "w");
        fputs($uchwyt, $zawartosc . \n);
        fclose($uchwyt);
    }

        $uchwyt = fopen("notatki.txt", "r");
        $tekst = fread($uchwyt, filesize("notatki.txt"));
        

    
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

    <form action="zad. 1 i 2.php" method="post">

    <textarea name="text"><?php echo $tekst; ?></textarea>

    <input type="submit">

    </form>

    
</body>

</html>