<?php
    $zwierzeta = [
                $Ryby = ["Mięśnio-płetwe", "Chrzęstno-szkieletowe", "Kostnopłetwe"], 
                $Ssaki = ["Stekowce", "Torbacze", "Łożyskowce", "Mućkowate"], 
                $Płazy = ["Beznogie", "Bezogonowe", "Ogoniaste"],
                $Gady = 1
    ];

    function mucki($zwierzeta, $aktualne = 0){
        foreach($zwierzeta as $aktualne => $test){
            echo $test;
            if(is_array($test)){
                mucki($aktualne);
            }
        }
    }

    // function mucki($zwierzeta){
    //     foreach($zwierzeta as $value => $x){
    //         if(is_array($x)){
    //             echo $value . "<ul><li>" . $x . "</li></ul>";
    //         }
    //     }
    // }

    mucki($zwierzeta);
?>