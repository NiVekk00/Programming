const log = console.log     // Dla sportu

var num = " ";             
var show = " ";                            // Deklaracja podstawowych zmiennych
var counter = 0;

function Add(value){

    var Screen = document.getElementById("screen");    // Deklaracja divu ekran
    num += value;
    show += value                                // Funkcja przycisków, która dodaje kolejną wartośc do stinga + wyświetla **value** danego przycisku

    Screen.innerHTML = show;
}

function Operator(value){

    var Screen = document.getElementById("screen");
    Screen.innerHTML = " ";                                     // Funkcja, która po wciśnięciu znaku pokazuje puste pole

    num += value;       // Dodanie znaku do stringu
    counter++;          
    show = " ";

    if(counter >= 2){

        log(num.slice(0, num.length - 1))
                                                    // Operator if, który po wciśnięciu jakiegoś znaku pokazuje wynik (nie trzeba klikać znaku "=")
        Screen.innerHTML = eval(num.slice(0, num.length - 1));
    }
}

function Calc(){

    var Screen = document.getElementById("screen");
                                                                // Funkcja, która po wciśnięciu znaku "=" wyświetla gotowy wynik
    Screen.innerHTML = eval(num)
}

function Clear(){
    var Screen = document.getElementById("screen");
    num = " ";                                             // Funkcja czyszcząca wszystkie zmienne (przycisk "CE") oraz wyświetla 0 na ekranie
    show = " ";

    Screen.innerHTML = "0"

}