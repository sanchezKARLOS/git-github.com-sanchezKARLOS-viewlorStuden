<?php
$P_Nombre=$_SESSION['P_Nombre'];
if(!isset($_SESSION['Id_Roles'])){
	header("location: index.php");
}
else{
	if($_SESSION['Id_Roles'] !=3){
		header("location: index.php");
	}
}
?>
	
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Numeros</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/logica.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>

        <div class="card-body">
        <div class="container">
      
                        <section class="p0">
                            <div class="divcenimnum">
                            <h3>1. ¿Que numero es?</h3>
                            <img src="./Numeros/1.png" width="250px" height="250px">
                            </div>
                            <label>
                                <input type="radio" value="1" name="p0" onclick="respuesta(0, this)">
                                Nueve
                            </label>
                            <label>
                                <input type="radio" value="2" name="p0" onclick="respuesta(0, this)">
                                Cinco
                            </label>
                            <label>
                                <input type="radio" value="3" name="p0" onclick="respuesta(0, this)">
                                Seis
                            </label>
                            <label>
                                <input type="radio" value="4" name="p0" onclick="respuesta(0, this)">
                                Uno
                            </label>
                        </section>

                        <section class="p">
                        <div class="divcenimnum">
                            <h3>2. ¿Que numero es?</h3>
                            <img src="./Numeros/5.png" width="250px" height="250px">
                            </div>
                            <label>
                                <input type="radio" value="1" name="p1" onclick="respuesta(1, this)">
                                Siete
                            </label>
                            <label>
                                <input type="radio" value="2" name="p1" onclick="respuesta(1, this)">
                                Seis
                            </label>
                            <label>
                                <input type="radio" value="3" name="p1" onclick="respuesta(1, this)">Dos
                            </label>
                            <label>
                                <input type="radio" value="4" name="p1" onclick="respuesta(1, this)">
                                Cinco
                            </label>
                        </section>

                        <section class="p2">
                        <div class="divcenimnum">
                            <h3>3. ¿Que numero es?</h3>
                            <img src="./Numeros/8.png" width="250px" height="250px">
</div>
                            <label>
                                <input type="radio" value="1" name="p2"
                                    onclick="respuesta(2, this)">Cinco
                            </label>
                            <label>
                                <input type="radio" value="2" name="p2" onclick="respuesta(2, this)">
                                Ocho
                            </label>
                            <label>
                                <input type="radio" value="3" name="p2"
                                    onclick="respuesta(2, this)">Siete
                            </label>
                            <label>
                                <input type="radio" value="4" name="p2"
                                    onclick="respuesta(2, this)">Seis
                            </label>
                        </section>

                        <section class="p3">
                        <div class="divcenimnum">
                            <h3>4. ¿Que numero es?</h3>
                            <img src="./Numeros/9.png" width="250px" height="250px">
</div>
                            <label>
                                <input type="radio" value="1" name="p3" onclick="respuesta(3, this)">
                                Cuatro
                            </label>
                            <label>
                                <input type="radio" value="2" name="p3" onclick="respuesta(3, this)">
                                Ocho
                            </label>
                            <label>
                                <input type="radio" value="3" name="p3"
                                    onclick="respuesta(3, this)">
                                Nueve
                            </label>
                            <label>
                                <input type="radio" value="4" name="p3"
                                    onclick="respuesta(3, this)">
                                Cinco
                            </label>
                        </section>

                        <section class="p4">
                        <div class="divcenimnum">
                            <h3>5. ¿Que numero es?</h3>
                            <img src="./Numeros/3.png" width="250px" height="250px">
</div>
                            <label>
                                <input type="radio" value="1" name="p4"
                                    onclick="respuesta(4, this)">
                                Ocho
                            </label>
                            <label>
                                <input type="radio" value="2" name="p4"
                                    onclick="respuesta(4, this)">
                                Tres
                            </label>
                            <label>
                                <input type="radio" value="3" name="p4"
                                    onclick="respuesta(4, this)">
                                Uno
                            </label>
                            <label>
                                <input type="radio" value="4" name="p4"
                                    onclick="respuesta(4, this)">
                                Diez
                            </label>
                        </section>

                        <section class="p5">
                        <div class="divcenimnum">
                            <h3>6. ¿Que numero es?</h3>
                            <img src="./Numeros/6.png" width="250px" height="250px">
</div>
                            <label>
                                <input type="radio" value="1" name="p5"
                                    onclick="respuesta(5, this)">
                                Seis
                            </label>
                            <label>
                                <input type="radio" value="2" name="p5"
                                    onclick="respuesta(5, this)">
                                Siete
                            </label>
                            <label>
                                <input type="radio" value="3" name="p5"
                                    onclick="respuesta(5, this)">
                                Nueve
                            </label>
                            <label>
                                <input type="radio" value="4" name="p5"
                                    onclick="respuesta(5, this)">
                                Uno
                            </label>
                        </section>

                        <section class="p6">
                        <div class="divcenimnum">
                            <h3>7. ¿Que numero es?</h3>
                            <img src="./Numeros/2.png" width="250px" height="250px">
</div>
                            <label>
                                <input type="radio" value="1" name="p6"
                                    onclick="respuesta(6, this)">
                                Dos
                            </label>
                            <label>
                                <input type="radio" value="2" name="p6"
                                    onclick="respuesta(6, this)">
                                Siete
                            </label>
                            <label>
                                <input type="radio" value="3" name="p6"
                                    onclick="respuesta(6, this)">
                                Tres
                            </label>
                            <label>
                                <input type="radio" value="4" name="p6"
                                    onclick="respuesta(6, this)">
                                Cuatro
                            </label>
                        </section>

                        <section class="p7">
                        <div class="divcenimnum">
                            <h3>8. ¿Que numero es?</h3>
                            <img src="./Numeros/7.png" width="250px" height="250px">
</div>
                            <label>
                                <input type="radio" value="1" name="p7"
                                    onclick="respuesta(7, this)">
                                Seis
                            </label>
                            <label>
                                <input type="radio" value="2" name="p7"
                                    onclick="respuesta(7, this)">
                                Siete
                            </label>
                            <label>
                                <input type="radio" value="3" name="p7"
                                    onclick="respuesta(7, this)">
                                Cinco
                            </label>
                            <label>
                                <input type="radio" value="4" name="p7"
                                    onclick="respuesta(7, this)">
                                Uno
                            </label>
                        </section>

                        <section class="p8">
                        <div class="divcenimnum">
                            <h3>9. ¿Que numero es?</h3>
                            <img src="./Numeros/10.png" width="250px" height="250px">
</div>
                            <label>
                                <input type="radio" value="1" name="p8"
                                    onclick="respuesta(8, this)">
                                Seis
                            </label>
                            <label>
                                <input type="radio" value="2" name="p8"
                                    onclick="respuesta(8, this)">
                                Nueve
                            </label>
                            <label>
                                <input type="radio" value="3" name="p8"
                                    onclick="respuesta(8, this)">
                                Diez
                            </label>
                            <label>
                                <input type="radio" value="4" name="p8"
                                    onclick="respuesta(8, this)">
                                Ocho
                            </label>
                        </section>

                        <section class="p9">
                        <div class="divcenimnum">
                            <h3>10. ¿Que numero es?</h3>
                            <img src="./Numeros/4.png" width="250px" height="250px">
                        </div>
                            <label>
                                <input type="radio" value="1" name="p9"
                                    onclick="respuesta(9, this)">
                                Tres
                            </label>
                            <label>
                                <input type="radio" value="2" name="p9"
                                    onclick="respuesta(9, this)">
                                Dos
                            </label>
                            <label>
                                <input type="radio" value="3" name="p9"
                                    onclick="respuesta(9, this)">
                                Cuatro
                            </label>
                            <label>
                                <input type="radio" value="4" name="p9"
                                    onclick="respuesta(9, this)">
                                Cinco
                            </label>
                        </section>

                        
                        <br>
                   
                      
                        <form  method="post" id="envfroajax" action="javascript:enviar()"> 
                        <button  id="EnviaTest" onclick="corregir()"> Terminar </button>
                        <h2>Califiacion: 
                            <span  name ="resultado" id="resultado"></span></h2> 
                     </form> 
                

  
                    </div>
        </div>     

       

<script src="./ajax/query.js"></script>
<script type="text/javascript">   
                    function enviar(){
                        var resultado = '<?php  $resultado ?>';
                        
                        
                    //     document.forms.envfroajax.resultado.value;
                    //   windows.location = "enviartest.php?resul="+ resultado;



                    }
                    </script>
</body>
</html>

                           