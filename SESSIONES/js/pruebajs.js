$('.btn').on('click', function(){
   var veruser = document.getElementById('Id_Persona');
   var vercla = document.getElementById('Clave');
   valor = parseInt(valor);

   if(veruser.value == "" && veruser.value == 0 || vercla.value == "" && vercla.value == 0){
    alert ("los campos no pueden estar vacio");
    if(veruser.value  == 0 && veruser.value.isNaN(valor))
    {
        alert ("ingresar solo campo numericos");
        veruser.focus();
    }
    else{

    }
    if(vercla==0){
        vercla.focus();
    }
   }
});



valor = parseInt(valor);
 
    //Compruebo si es un valor numérico
    if (isNaN(valor)) {
       //entonces (no es numero) devuelvo el valor cadena vacia
       return "";
    }else{
       //En caso contrario (Si era un número) devuelvo el valor
       return valor;
    }
 
 
 function validarform(){
    //valido el nombre
    if (document.getElementById("nombre").value.length==0){
       alert("Tiene que escribir su nombre");
       document.getElementById("nombre").focus();
       
    }
    else{
      
    }
    }