<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="css/frstuden.css">
  <link rel="stylesheet" href="css/boarmain.css">
  <title>Registrar estudiante</title>
</head>
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
        <a href="#">
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
        <li><a href="#"><span class="glyphicon glyphicon-user">&nbsp;</span> Admin</a></li>
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
          <h2>registrado recientes</h2>
          <a href="" class="btn">mostras mas</a>
        </div>
<div>
<?php 
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $tipoaep = $_GET['tipoaep'];
    $grado = $_GET['grado'];
    $edad = $_GET['edad'];
    $cdteacher = $_GET['cdteacher'];
    $clave = $_GET['clave'];
    ?>
<div class="divprimero" style="max-width: 650px; min-width: 400px;">
    <div class="divsegundo">
    <form action="editardb.php" class="from" id="from" name="nafrom" method="post" >
    <div class="session" id="session">
<!----para la elaboracion de texto en input, value o placeholder-->
   <tr><td>ingrese id </td>
   <input type="text" name="id" id="id" class="id" value="<?=$id?>" onblur="reviscodigo();" maxlength="10" autocomplete="off" >
   </tr>
    <tr>
    <td>nombre</td>
    <input type="text" name="nombre" id="nombre" class="nombre" value="<?=$nombre?>" onfocus="vaciarplaceholder(this);" onkeypress="reviletras(event);" onfocus="verificar();"  >
   </tr>
    <tr><td>apellido</td>
    <input type="text" name="apellido" id="apellido" class="apellido" value="<?=$apellido?>" onfocus="vaciarplaceholder(this);" onkeypress="reviletras(event);" >
    </tr>
    <tr><td>tipo de usuario</td>
    <select name="tipoaep" id="tipoaep" value="<?=$tipoaep?>" style="visibility:hidden">
        <option value="1">Administrador</option>
        <option value="2" selected>Docente</option>
        <option value="3">Estudiante</option>
    </select>
    </tr>
    <tr><td>grado</td>
    <input type="text" name="grado" id="grado" class="grado" value="<?=$grado?>" onfocus="vaciarplaceholder(this);" >
    </tr>
    <tr><td>edad</td>
    <input type="text" name="edad" id="edad" class="edad" value="<?=$edad?>"  onblur="revisaredad();" >
</tr>
    <tr><td>codigo del profesor</td>
    <input type="text" name="cdteacher" id="cdteacher" class="cdteacher" value="<?=$cdteacher?>" onfocus="vaciarplaceholder(this);" maxlength="10"  >
    </tr>
    <tr><td>contraseña</td>
    <input type="password" name="clave" id="clave" class="clave" value="<?=$clave?>" onfocus="vaciarplaceholder(this);"  maxlength="10"; onfocus="verificar();">
    </tr>
<br>
<br>
        <div class="div-bnt ">
    <div class="div-bnt2">
    <tr><td><input type="submit" name="submit" id="submit" class="submit" value="Actualizar "></td></tr>
    <div>
        <a href="verlistadostuden.php">Cancelar</a>
    </div>

    </div>
    </div>
   
</div>
</form>
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
                <div class="imgBx"><img src="./img/user.png" alt=""></div>
              </td>
              <td>
                <h4>Carlos<br><span>Estados Unidos</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="./img/user.png" alt=""></div>
              </td>
              <td>
                <h4>henry<br><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="./img/user.png" alt=""></div>
              </td>
              <td>
                <h4>Andres<br><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="./img/user.png" alt=""></div>
              </td>
              <td>
                <h4>Jairo<br><span>Colombia</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="./img/user.png" alt=""></div>
              </td>
              <td>
                <h4>Maria<br><span>España</span></h4>
              </td>
            </tr>
            <tr>
              <td style="width: 60px">
                <div class="imgBx"><img src="./img/user.png" alt=""></div>
              </td>
              <td>
                <h4>Elena<br><span>mexico</span></h4>
              </td>
            </tr>
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="js/boar.js" ></script>

<!--<script src="https://kit.fontawesome.com/572f592c32.js" crossorigin="anonymous"></script>-->