var counter = 0;
var Array = []

function AddItems(){
    var Second = document.getElementById("second");
    var Third = document.getElementById("third");
    var Number = document.getElementById("number").value;

    counter++;
    Second.innerHTML = counter;

    Array.push(Number);

    console.log(Array)

    Third.innerHTML = Array;
    
    
}