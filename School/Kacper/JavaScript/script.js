var Button = document.getElementById("click");

    function Click(){
        var FirstNumber = document.getElementById("firstnumber").value;
        var SecondNumber = document.getElementById("secondnumber").value;

        while(SecondNumber!= 0){
            FirstNumber *= FirstNumber;
            holder = FirstNumber;
            SecondNumber--;
            console.log(holder)
        }
    }
    