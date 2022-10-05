<?php
    $auto = "Marucha";

    function wywolaj(){
        global $auto;
        $auto = "Zygzak McQueen";
        echo $auto;
    }
    echo $auto;
    wywolaj();

    echo $auto;
?>