<?php
    function silnia($x, $suma = 1){
        if($x!=0){
            silnia($x-1, $suma*$x);
        }else
        echo $suma ."<br>";
    }

    silnia(5);
?>