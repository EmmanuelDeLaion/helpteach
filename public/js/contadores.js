let cont1 = document.getElementById('cont1');
let cont2 = document.getElementById('cont2');
let cont3 = document.getElementById('cont3');

let cant1 = 0;
let cant2 = 0;
let cant3 = 0;

let timpo = 25;

let velocidad = 20;

let tiempo1 = setInterval( ()=>{
    cont1.textContent = cant1 += 1;

    if(cant1 === 170){
        clearInterval(tiempo1);
    }
},velocidad);


let tiempo2= setInterval( ()=>{
    cont2.textContent = cant2 += 1;

    if(cant2 === 170){
        clearInterval(tiempo2);
    }
},velocidad);


let tiempo3 = setInterval( ()=>{
    cont3.textContent = cant3 += 1;

    if(cant3 === 170){
        clearInterval(tiempo3);
    }
},velocidad);