<?php

/*

function Test(){
    global $x;
    $x = 0;
    $x++;
}
Test();
echo "<h1>" .$x. "</h1> <br>";
echo "<u>Łatwo</u>"

*/

/*

$x = array("Test1", "Test2", "Test3");
var_dump($x);

*/

/*

$x = null;
var_dump($x);

*/

/*

class Car{
    public $color;
    public $model;
    function __construct($color, $model){
        $this->x = $color;
        $this->y = $model;
    }
    public function message(){
        return "You have " .$this->x. " " .$this->y. " ";
    }
}

$myCar = new Car("white", "Nissan");
echo $myCar -> message();

*/

/*

echo strlen("ach jo");                          //strlen() ===> licznik słów
echo str_word_count("ach jo");                  //str_word_count ===> licznik wyrazów

*/

$name = "Lucjan ";
$buty = "Addidas";
$prize1 = 259;
$jacket = "kurtka";
$prize2 = 199;
$pants = "spodnie";
$prize3 = 149;
$rabat = 20;
$suma = $prize1 + $prize2 + $prize3;

echo $name;
echo "złożył zamówienie na: " .$buty. " za " .$prize1. "zł, " .$jacket. " za " .$prize2. "zł oraz " .$pants. " za " .$prize3. "zł. <br> <br> Z rabatem zapłacił " .$suma * (100-$rabat)/100 . "zł";



/*

class Produkt{
    public $produkt;
    public $ilosc;
    public $cena_szt;
    function __construct($produkt, $ilosc, $cena_szt){
        $this->x = $produkt;
        $this->y = $ilosc;
        $this->z = $cena_szt;
        $this->cena = $ilosc * $cena_szt;
        $razem = $ilosc * $cena_szt;

    }
    public function message(){
        return $this->x. " " .$this->cena. "zł: x " . $this->y. " " ;
    }
}

$nowyProdukt = new Produkt("Sałatka masłowa", "2", "2.5");
echo $nowyProdukt -> message(). "<br>";
$nowyProdukt = new Produkt("Sałatka", "2", "1.99");
echo $nowyProdukt -> message();

/*






/*$nazwa_sklepu = "Biedronka";
$adres = "Mściwoja 2";
$nip = 109-23-38-455;
$produkt = "kabanos";
$ilosc = 5;
$cena_szt = 1.99;
$cena = $ilosc * $cena_szt;

echo $produkt. " " .$cena . "zł: x " .$ilosc;

*/

/*
function paragon($produkt, $ilosc, $cena_szt){
    $cena = $ilosc * $cena_szt;

    echo $

}
*/

?>