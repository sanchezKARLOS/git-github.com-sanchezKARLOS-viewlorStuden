<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/boarmain.css">
  <title>listado de estudiante</title>
</head>
<body>
<header>

</header>
<div class="container">
  <div class="navigation">
    <ul>
      <li>
        <a href="#">
          <span class="icon"><i class="fa-brands fa-apple"></i></span>
          <span class="title">
            <h2>Panel de control</h2>
          </span>
        </a>
      </li>
      <li>
        <a href="./main.php">
          <span class="icon">
              <i class="fa-solid fa-house">
                <div>
                    <img  class="web" src="img/carp.png" alt="">
                </div>
              </i>
            </span>
          <span class="title">Inicio</span>
        </a>
      </li>
      <li>
        <a href="./error_404.php">
          <span class="icon"><i class="fa-solid fa-gear">
          <div>
            <img  class="web" src="img/carp.png" alt="">
            </div>
          </i>
        </span>
          <span class="title">Configuracion</span>
          
        </a>
      </li>
      <li class="menu-outngiss" id="menu-outngis">
        <a href="./indexsession.php">
          <span class="icon"><i class="fa-solid fa-right-from-bracket">
          <div>
                    <img  class="web" src="img/carp.png" alt="">
                </div>
          </i></span>
          <span class="title">Salir</span>
        </a>
      </li>
    </ul>
  </div>
  <!------comenzacion de main--------->
  <div class="main">
    <div class="topbar">  
      <div class="toggle" onclick="toggleMenu();"></div>
      <div class="search">
        
      </div>
      <div class="conf-user">
       <div class="collapse navbar-user tercer-nav">
       <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user">&nbsp;</span>Admin</a></li>
      <!--  <li class="active"><a title="View Website" href="#"><span class="glyphicon glyphicon-globe"></span></a></li>-->
      </ul>
      </div>
      </div>
      <div class="firt-img">
      <div class="user">
        <img src="img/user.png" alt="" class="imgen">
      </div>
      </div>
    </div>
    <div class="details">
      <div class="recentOrders">
        <div class="cardHeader">
          <h2>Registrado Recientemente</h2>
          <a href="" class="btn">mostras mas</a>
        </div>
<div>
<div>   
<div>
    <form action="buscardb.php" method="post">
    <input type="text" name="buscar" class="buscar" id="buscar">
    <input type="submit" value="buscar">
    <a href="mainstuden.php">nuevo</a>
    </form>
</div>
</div>

<div>
<div>
    <table border="1px">
        <tr >
            <td>id</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>usuario</td>
            <td>grado</td>
            <td>edad</td>
            <td>cdteacher</td>
            <td>clave</td>
            <td>OPCIONES</td>
        </tr>
<?php
$query =mysqli_connect("localhost", "root", "", "softwareducativo");
$sql = "SELECT id, nombre, apellido, tipoaep, grado, edad, cdteacher, clave FROM estudiante order by id desc";
$resultado =mysqli_query($query, $sql);
while ($mostrar = mysqli_fetch_array($resultado)){
?>
<tr>
<td><?php echo $mostrar['0']?></td>
<td><?php echo $mostrar['1']?></td>
<td><?php echo $mostrar['2']?></td>
<td><?php echo $mostrar['3']?></td>
<td><?php echo $mostrar['4']?></td>
<td><?php echo $mostrar['5']?></td>
<td><?php echo $mostrar['6']?></td>
<td><?php echo $mostrar['7']?></td>
<td> 
    <a href="editarstuden.php?
    id=<?php echo $mostrar['0']?> &
    nombre=<?php echo $mostrar['1']?> &
    apellido=<?php echo $mostrar['2']?> &
    tipoaep=<?php echo $mostrar['3']?> &
    grado=<?php echo $mostrar['4']?> &
    edad=<?php echo $mostrar['5']?> &
    cdteacher=<?php echo $mostrar['6']?> &
    clave=<?php echo $mostrar['7']?> &     
    ">editar</a>

    <a href="eliminardb.php?
    id=<?php echo $mostrar['0']?>
    ">eliminar</a>
</td>
</tr>
<?php
}
?>
    </table>
</div>
</div>
</div>
      </div>
      <div class="recentCustomers">
        <div class="cardHeader">
          <h2></h2>
        </div>
        <table>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>




</body>
</html>

<script src="js/boar.js" ></script>
