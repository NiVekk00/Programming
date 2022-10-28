<?php

    $sciezka = "arg1.jpg";
    $tytul = "arg2";
    $alt = "arg3";

    function create_tag($sciezka, $tytul, $alt = null){
        if($alt == null){
            $alt = $title;
        }
        echo "<img src=\"$sciezka\" title= \"$tytul\" alt= \"$alt\">";
    }
    create_tag($sciezka, $tytul, $alt);
?>