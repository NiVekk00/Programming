var counter = 0;
var Array = []


function AddItems(){
    var Second = document.getElementById("second");
    var Third = document.getElementById("third");
    var Number = document.getElementById("number").value;

    counter++;
    
    Second.innerHTML = counter;

    Array.push(Number);

    Third.innerHTML = Array + " ";
    
    
}

function Sort(){
    var Third = document.getElementById("third");

    for(i = 0; i < Array.length; i++){

      for(j = Array.length; j >= i; j--){

        if(Array[j] < Array[j-1]){
          var temp = Array[j-1];
          Array[j-1] = Array[j];
          Array[j] = temp;
        }
      }

      Third.innerHTML = Array;
    }
}