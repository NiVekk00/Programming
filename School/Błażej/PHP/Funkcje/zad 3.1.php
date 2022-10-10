<?php

    function fibonacci($ktory, $licznik = 2, $x = 0, $y = 1, $wynik = 0){
        if($ktory == 1){
            return 0;
        }
        if($ktory == 2){
            return 1;
        }
        while($licznik <= $ktory){
            $wynik = $y + $x;
            $x = $y;
            $y = $wynik;
            $licznik++;
            if($licznik == $ktory){
                return $wynik;
            }
        }
    }
    $ktory = 9;
    echo fibonacci($ktory);

?>