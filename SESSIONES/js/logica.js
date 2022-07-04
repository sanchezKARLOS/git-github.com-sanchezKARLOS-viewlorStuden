// Arreglo con las respuestas correctas
let correctas = [4,4,2,3,2,1,1,2,3,3]

// Respuestas dadas por el usuario
let opciones_elegidas=[];
let cantidad_correctas=[];

//Funcion para tomar el numero de pregunta y el input elegido
function respuesta(numero_pregunta, seleccionada){
    //Se guardan las respuestas elegidas
    opciones_elegidas[numero_pregunta] = seleccionada.value;

    //Codigo para marcar con color respuesta seleccionada
    id = "p" + numero_pregunta;

    labels = document.getElementById(id).childNodes;
    labels[3].style.backgroundColor = "White";
    labels[5].style.backgroundColor = "White";
    // labels[7].style.backgroundColor = "White";
    // labels[9].style.backgroundColor = "White";
    // labels[11].style.backgroundColor = "White";

    //Damos color label seleccionado
    seleccionada.parentNode.style.backgroundColor = "#2fff4b";
}

function corregir(){
    cantidad_correctas = 0;
    for (let i = 0; i < correctas.length; i++) {
        if (correctas[i] ==opciones_elegidas[i]) {
            cantidad_correctas++;
        }   

    }
    document.getElementById("resultado").innerHTML = cantidad_correctas;

}


// Arreglo con las respuestas correctasSumas
let correctasSumas = [1,3,2,1,4]

// Respuestas dadas por el usuario
let opciones_elegidasSuma=[];
let cantidad_correctasSumas=[];

//Funcion para tomar el numero de pregunta y el input elegido
function respuestaSuma(numero_preguntaSuma, seleccionadaSuma){
    //Se guardan las respuestas elegidas
    opciones_elegidasSuma[numero_preguntaSuma] = seleccionadaSuma.value;

    //Codigo para marcar con color respuesta seleccionadaSuma
    id = "p" + numero_preguntaSuma;

    labels = document.getElementById(id).childNodes;
    labels[3].style.backgroundColor = "White";
    labels[5].style.backgroundColor = "White";
    // labels[7].style.backgroundColor = "White";
    // labels[9].style.backgroundColor = "White";
    // labels[11].style.backgroundColor = "White";

    //Damos color label seleccionado
    seleccionadaSuma.parentNode.style.backgroundColor = "#cec0fc";
}

function corregirSuma(){
    cantidad_correctasSumas = 0;
    for (let i = 0; i < correctasSumas.length; i++) {
        if (correctasSumas[i] ==opciones_elegidasSuma[i]) {
            cantidad_correctasSumas++;
        }
    }

    document.getElementById("resultadoSuma").innerHTML = cantidad_correctasSumas;
    // window.alert(cantidad_correctasSumas);
}





// Arreglo con las respuestas correctasRestas
let correctasRestas = [1, 3, 2, 4, 3]

// Respuestas dadas por el usuario
let opciones_elegidasResta=[];
let cantidad_correctasRestas=[];

//Funcion para tomar el numero de pregunta y el input elegido
function respuestaResta(numero_preguntaResta, seleccionadaResta){
    //Se guardan las respuestas elegidas
    opciones_elegidasResta[numero_preguntaResta] = seleccionadaResta.value;

    //Codigo para marcar con color respuesta seleccionadaResta
    id = "p" + numero_preguntaResta;

    labels = document.getElementById(id).childNodes;
    labels[3].style.backgroundColor = "White";
    labels[5].style.backgroundColor = "White";
    // labels[7].style.backgroundColor = "White";
    // labels[9].style.backgroundColor = "White";
    // labels[11].style.backgroundColor = "White";

    //Damos color label seleccionado
    seleccionadaResta.parentNode.style.backgroundColor = "#cec0fc";
}

function corregirResta(){
    cantidad_correctasRestas = 0;
    for (let i = 0; i < correctasRestas.length; i++) {
        if (correctasRestas[i] ==opciones_elegidasResta[i]) {
            cantidad_correctasRestas++;
        }
    }

    document.getElementById("resultadoResta").innerHTML = cantidad_correctasRestas;
    // window.alert(cantidad_correctasRestas);
}
