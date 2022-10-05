<?php

    $tablica=["Element1", "Element2", "Element3", "Element4"];

    function zbuduj_zdanie($tablica){
        foreach($tablica as $key => $indeks){
            if($key == count($tablica)-2){
                echo  $indeks ." oraz ";
            }else
            if($key == count($tablica) -1){
                echo $indeks;
            }
            else{
                echo $indeks . ", ";
            }
        }
    }

    zbuduj_zdanie($tablica);

    
?>