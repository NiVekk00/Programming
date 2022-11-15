<?php

    function fibonacci($licznik = 0, $x = 0, $y = 1, $wynik = 0){
        while($licznik < 10){
            
            echo " ".$x;
            $wynik = $y + $x;
            $x = $y;
            $y = $wynik;
            $licznik++;
        }
    }
    fibonacci();

?>