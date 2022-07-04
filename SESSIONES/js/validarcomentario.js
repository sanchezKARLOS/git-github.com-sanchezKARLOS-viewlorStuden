
$("#enviar").click(function(){
var Comentario = $('#Comentario').val();

if(Comentario == ""){
    alert ("Debes escribir un comentario para poder enviar.");


    document.getElementById('Comentario').focus();
    document.getElementById('Comentario').addEventListener('focus', cambiar);
     return false;

}
else{
    
    document.getElementById('Comentario').style.background = "#fbfafa";
  
}

function cambiar (evento){
    let elemento = evento.target;
    elemento.style.background = '#E33E5A';
}

function devolver (evento){
    let elemento = evento.target;
    elemento.style.background = 'green';
}

});


