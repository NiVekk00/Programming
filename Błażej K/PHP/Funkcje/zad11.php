<?php
    $zwierzeta[0] = "ryby";
    $zwierzeta[1][0] = "gat1";
    $zwierzeta[1][1] = "gat2";
    $zwierzeta[1][2] = "gat3";

    $zwierzeta[2] = "gady";
    $zwierzeta[3][0] = "gat1";
    $zwierzeta[3][1] = "gat2";
    $zwierzeta[3][2] = "gat3";

    $zwierzeta[4] = "plazy";
    $zwierzeta[5][0] = "gat1";
    $zwierzeta[5][1] = "gat2";
    $zwierzeta[5][2] = "gat3";

    function test($zwierzeta){
        foreach($zwierzeta as $value){
            if(is_array($value)){
                test($value);

            }else{
                echo $value . "<br>";
            }
        }
    }

    test($zwierzeta);
?>