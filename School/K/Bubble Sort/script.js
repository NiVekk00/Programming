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

    Third.innerHTML = Array + " ";
    
    
}

function Sort(Array){
    var Third = document.getElementById("third");

     
    for(let i = 0; i < Array.length; i++){
        
      for(let j = 0; j < ( Array.length - i -1 ); j++){
          
        if(Array[j] > Array[j+1]){
            
          let temp = Array[j]
          Array[j] = Array[j + 1]
          Array[j+1] = temp
        }
      }
    }
    Third.innerHTML = Array;
}