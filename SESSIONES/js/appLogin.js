// validacion de login
var Id_Persona = document.getElementById('Id_Persona');
var Clave = document.getElementById('Clave');

var error = document.getElementById('error');
error.style.color = 'red';

var form = document.getElementById('formindex');

form.addEventListener('submit', function(evet){
    evet.preventDefault();

    var mensajeError = [];

        if (Id_Persona.value === null || Id_Persona.value === '') {
            alert("por favor ingrese codigo id");
            document.getElementById("Id_Persona").focus();
             
            
        if (Clave.value === null || Clave.value === '') {
            alert("Por favor ingrese Una Contraseña Validad");
        }
        }

    
    error.innerHTML = mensajeError.join(' - ');

});
