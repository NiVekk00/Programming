<?php

    $sciezka = "arg1";
    $tytul = "arg2";
    $alt = "arg3";

    function create_tag($sciezka, $tytul, $alt){
        echo "<img src=" . $sciezka . " title= ". $tytul . " alt= ". $alt ." </img>";
    }
    create_tag($sciezka, $tytul, $alt);
?>