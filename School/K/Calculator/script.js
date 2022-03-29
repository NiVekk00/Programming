const log = console.log

var Number = " ";
var result = 0;
var operator = " ";
var show = " ";

function Add(value){

    var Screen = document.getElementById("screen");
    Number += value;
    show += value.toString()

    Screen.innerHTML = show.toString();
}

function Sum(value){

    var Screen = document.getElementById("screen");
    //var operator = value;
    Screen.innerHTML = value;
    Number += value;
    show = " ";
}

function Calc(){

    var Screen = document.getElementById("screen");
    log(Number)

    Screen.innerHTML = eval(Number)
}

function Clear(){
    var Screen = document.getElementById("screen");
    Number = " ";
    result = 0;
    operator = " ";
    show = " ";

    Screen.innerHTML = "0"

}