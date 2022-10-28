<?php
    function suma(int $x, $suma = 0){
        if($x!=0){
            $suma += $x;
            echo $suma . "<br>";
            
            suma($x-1, $suma);
        }
    }

    suma(5);
?>