

  function validarEntero(valor){
    //intento convertir a entero.
    //si era un entero no le afecta, si no lo era lo intenta convertir
    valor = parseInt(valor);
 
    //Compruebo si es un valor numérico
    if (isNaN(valor)) {
       //entonces (no es numero) devuelvo el valor cadena vacia
       return "";
    }else{
       //En caso contrario (Si era un número) devuelvo el valor
       return valor;
    }
 }
 
 function validarform(){
    //valido el nombre
    if (document.getElementById("nombre").value.length==0){
       alert("Tiene que escribir su nombre");
       document.getElementById("nombre").focus();
       
    }
    else{
      
    }
 
    //valido la edad. tiene que ser entero mayor que 18
    edad =  document.getElementById("edad");
    edad = validarEntero(edad);
    document.getElementById("edad")=edad;
    if (edad==""){
       alert("Tiene que introducir un número entero en su edad.");
       document.getElementById("edad").focus();
       
    }else{
       if (edad<18){
          alert("Debe ser mayor de 18 años.");
          document.getElementById("edad").focus();
         
       }
    }
    //valido el interés
    if(document.getElementById("grado").value.length ==0){
       alert("Debe seleccionar un motivo de su contacto.");
       document.getElementById("grado").focus();
     }
 return true;
     //el formulario se envia
     alert("Muchas gracias por enviar el formulario");
     document.from.submit();
 }

 window.onload = init;
    function init(){
        document.querySelectorAll(".more")[0].addEventListener("click",submenu);
        document.querySelector(".submenu > ul").style.display = "none"; 
    }
    
    function submenu(){
        var estado = document.querySelector(".submenu > ul").style.display;
        if (estado == "none"){
            document.querySelector(".submenu > ul").style.display = "block";
        }else{
            document.querySelector(".submenu > ul").style.display = "none";            
        };
        
    }