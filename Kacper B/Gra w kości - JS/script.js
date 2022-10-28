const log = console.log;

var js_butt01 = document.getElementById("html_butt01");

var js_butt02 = document.getElementById("html_butt02");

var js_butt03 = document.getElementById("html_butt03");

var js_butt04 = document.getElementById("html_butt04");

var czujka1 = 0;
var czujka2 = 0;

js_butt01.addEventListener("click", () =>{
    var js_input01 = document.getElementById("html_num01");
    if(js_input01.value >= 2 && js_input01.value <=12){
        js_input01.setAttribute("readonly", "");
        js_butt01.innerHTML="ZAPISANO ✅";
        czujka1++;
    }else{
        alert("Nie wpisałeś żadnej liczby dla Gracza 1");
    }
})

js_butt02.addEventListener("click", () =>{
    var js_input02 = document.getElementById("html_num02");
    if(js_input02.value >= 2 && js_input02.value <=12){
        js_input02.setAttribute("readonly", "");
        js_butt02.innerHTML="ZAPISANO ✅";
        czujka2++;
    }else{
        alert("Nie wpisałeś żadnej liczby dla Gracza 2");
    }
})

js_butt03.addEventListener("click", () =>{
    if(czujka1 == 0 && czujka2 == 0){
        alert("Należy podać liczby dla Gracza 1 oraz Gracza 2");
    }
    if(czujka1 == 1 && czujka2 == 0){
        alert("Należy podać liczbę dla Gracza 2");
    }
    if(czujka1 == 0 && czujka2 == 1){
        alert("Należy podać liczbę dla Gracza 1")
    }
    if(czujka1 == 1 && czujka2 == 1){
        js_butt03.setAttribute("disabled", "");
        losuj();
    }
})

js_butt04.addEventListener("click", () =>{
    window.location.reload();
})

function losuj(){

    let random1 = Math.floor(Math.random() * 6) + 1;
    let random2 = Math.floor(Math.random() * 6) + 1;


    kostka1 = document.getElementById("kostek1");
    kostka2 = document.getElementById("kostek2");
    ekran = document.getElementById("screen");

    kostka1.innerHTML="";
    kostka2.innerHTML="";

    var keyword1 = "podstawowe-"
    var keyword2 = "podstawowe-"
    if(random1 % 2 === 0){
        var keyword1 = "dodatkowe-"
    }
    if(random2 % 2 === 0){
        var keyword2 = "dodatkowe-"
    }
    for(i = 1; i<=random1; i++){
        let nowy1 = document.createElement("div");
        nowy1.setAttribute("class", "kropka " +keyword1 +i);
        kostka1.appendChild(nowy1);
        setTimeout( ()=>{
            nowy1.style.opacity = 1;
        }, 250);
    }
    for(i = 1; i<=random2; i++){
        let nowy2 = document.createElement("div");
        nowy2.setAttribute("class", "kropka " +keyword2 +i);
        kostka2.appendChild(nowy2);
        setTimeout( ()=>{
            nowy2.style.opacity = 1;
        }, 250);
    }

    var js_input01 = document.getElementById("html_num01");
    var js_input02 = document.getElementById("html_num02");

    var wynik = random1 + random2;

    setTimeout( ()=>{

    if(Math.abs(js_input01.value - wynik) < Math.abs(js_input02.value - wynik)){
        ekran.innerHTML="Wygrywa <font color =\"red\"> Gracz 1</font>!";
        ekran.style.opacity = 1;
    }else
    if(Math.abs(js_input01.value - wynik) > Math.abs(js_input02.value - wynik)){
        ekran.innerHTML="Wygrywa <font color =\"blue\"> Gracz 2 </font>!";
        ekran.style.opacity = 1;
    }else
    if(Math.abs(js_input01.value - wynik) == Math.abs(js_input02.value - wynik)){
        ekran.innerHTML="Remis!";
        ekran.style.opacity = 1;
    }

    }, 750);
}