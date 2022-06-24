<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/boarmain.css">
  <title>Buscar estudiante</title>
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
        <a href="#">
          <span class="icon">
              <i class="fa-solid fa-house">
                <div>
                    <img  class="web" src="img/carp.png" alt="">
                </div>
              </i>
            </span>
          <span class="title">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="icon"><i class="fa-solid fa-users">
          <div>
            <img  class="web" src="img/carp.png" alt="">
            </div>
          </i></span>
          <span class="title">Registrar</span>
        </a>
      </li>
      <li> <!--------editar------------>
          <a href="editarstuden.php">
          <span class="icon"><i class="fa-solid fa-message">
          <div>
             <img  class="web" src="img/carp.png" alt="">
             </div>
          </i></span>
          <span class="title">Editar estudiante</span>
        </a>
      </li><!-----terminacion------editar-->
      <li>
        <a href="#">
          <span class="icon"><i class="fa-solid fa-circle-question">
          <div>
             <img  class="web" src="img/carp.png" alt="">
            </div>
          </i></span>
          <span class="title">Help</span>
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
      <li class="menu-dorwssap" id="menu-dorwssap">
        <a href="#">
          <span class="icon"><i class="fa-solid fa-lock">
          <div>
            <img  class="web" src="img/carp.png" alt="">
            </div>
          </i></span>
          <span class="title">Password</span>
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
        <label>
          <input type="text" placeholder="Search here" />
          <span class="input-group-btn">
              <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
          </span>
          <i class="fa-solid fa-magnifying-glass"></i>
        </label>
      </div>
      <div class="conf-user">
       <div class="collapse navbar-user tercer-nav">
       <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user">&nbsp;</span>Hello Admin</a></li>
      <!--  <li class="active"><a title="View Website" href="#"><span class="glyphicon glyphicon-globe"></span></a></li>-->
        <li><a href="#">Logout</a></li>
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
          <h2>registrado recientes</h2>
          <a href="" class="btn">mostras mas</a>
        </div>
<div>
<?php
$buscar = $_POST['buscar'];
?>
<div>
    <div>
        <form action="" method="post"> 
        <input type="text" name="buscar" class="buscar" id="buscar" value="<?=$buscar?>">
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
 $sql = "SELECT id, nombre, apellido, tipoaep, cdteacher, clave FROM docente
 where nombre like '$buscar' '%' or apellido like '$buscar' '%' order by id desc ";
 $resultado = mysqli_query($query, $sql);
 while ($mostrar = mysqli_fetch_array($resultado)){
?>
<tr>
    <td><?php echo $mostrar['0']?></td>
    <td><?php echo $mostrar['1']?></td>
    <td><?php echo $mostrar['2']?></td>
    <td><?php echo $mostrar['3']?></td>
    <td><?php echo $mostrar['4']?></td>
    <td> 
        <a href="editarstuden.php?
        id=<?php echo $mostrar['0']?> &
        nombre=<?php echo $mostrar['1']?> &
        apellido=<?php echo $mostrar['2']?> &
        tipoaep=<?php echo $mostrar['3']?> &
        clave=<?php echo $mostrar['4']?> &     
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
          <h2>Recent Customers</h2>
        </div>
        <table>
          <tbody>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="https://pps.whatsapp.net/v/t61.24694-24/182069071_115568687401715_8146014857926887457_n.jpg?ccb=11-4&oh=7335893595b1fcc4b3429577225464e7&oe=627170BD" alt=""></div>
              </td>
              <td>
                <h4>Jonny<br><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="https://pps.whatsapp.net/v/t61.24694-24/182069071_115568687401715_8146014857926887457_n.jpg?ccb=11-4&oh=7335893595b1fcc4b3429577225464e7&oe=627170BD" alt=""></div>
              </td>
              <td>
                <h4>Alejandro<br><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="https://pps.whatsapp.net/v/t61.24694-24/182069071_115568687401715_8146014857926887457_n.jpg?ccb=11-4&oh=7335893595b1fcc4b3429577225464e7&oe=627170BD" alt=""></div>
              </td>
              <td>
                <h4>Cano<br><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="https://pps.whatsapp.net/v/t61.24694-24/182069071_115568687401715_8146014857926887457_n.jpg?ccb=11-4&oh=7335893595b1fcc4b3429577225464e7&oe=627170BD" alt=""></div>
              </td>
              <td>
                <h4>Acosta<br><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="https://pps.whatsapp.net/v/t61.24694-24/182069071_115568687401715_8146014857926887457_n.jpg?ccb=11-4&oh=7335893595b1fcc4b3429577225464e7&oe=627170BD" alt=""></div>
              </td>
              <td>
                <h4>Jonny<br><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="https://pps.whatsapp.net/v/t61.24694-24/182069071_115568687401715_8146014857926887457_n.jpg?ccb=11-4&oh=7335893595b1fcc4b3429577225464e7&oe=627170BD" alt=""></div>
              </td>
              <td>
                <h4>Alejandro<br><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="https://pps.whatsapp.net/v/t61.24694-24/182069071_115568687401715_8146014857926887457_n.jpg?ccb=11-4&oh=7335893595b1fcc4b3429577225464e7&oe=627170BD" alt=""></div>
              </td>
              <td>
                <h4>Cano<br><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="https://pps.whatsapp.net/v/t61.24694-24/182069071_115568687401715_8146014857926887457_n.jpg?ccb=11-4&oh=7335893595b1fcc4b3429577225464e7&oe=627170BD" alt=""></div>
              </td>
              <td>
                <h4>Acosta<br><span>Colombia</span></h4>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<script src="js/boar.js" ></script>
