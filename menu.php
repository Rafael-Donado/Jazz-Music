
 <nav class="navbar navbar-default">
  <div class="container-fluid">
 
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Inicio</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="bajos.php" >BAJOS</a></li>
           <li><a href="bateria.php" >BATERIAS</a></li>
           <li><a href="bongos.php" >BONGOS</a></li>
           <li><a href="cajones_peruanos.php" >CAJONES PERUANOS</a></li>
           <li><a href="congas.php" >CONGAS</a></li>
           <li><a href="guitarras.php" >GUITARRAS</a></li>
           <li><a href="otros.php" >OTROS</a></li>
           <li><a href="pianos.php" >PIANOS</a></li>
           <li><a href="violines.php" >VIOLINES</a></li>
        </ul>
      </li>
               <li><a href="#" onclick="ruta('contacto.php')">Contactemos</a></li>
    </ul>

  <?php if ($_SESSION['AUTENTICADO']=='OK'and $_SESSION['id_tipopermitido']==2){ ?>

    <ul class="nav navbar-nav navbar-right">

      <li><a href="vercarrito.php" ><span class="glyphicon glyphicon-shopping-cart"></span> </a></li>

      <li><a href="#" onclick="ruta('registro.php')"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['DATOS']['nombre'] ?></a></li>

      <li><a href="cerrar.php" ><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>

    </ul>
    
  <?php 
      }else{ ?>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" onclick="ruta('registro.php')"><span class="glyphicon glyphicon-user"></span> Registrate</a></li>
      <li><a href="#" onclick="ruta('login.php')"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesion</a></li>
    </ul>
    <?php 
      } 
    ?>


  </div>
</nav>