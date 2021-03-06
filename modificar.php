<?php
// 1) Conexion
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "emple_dep");

// 2) Almacenamos los datos del envío POST
$dni = $_POST['dni'];

// 3) Preparar la orden SQL
$consulta= "SELECT * FROM empleado WHERE dni=$dni";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
$repuesta=mysqli_query ($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Modificacion de datos de empleado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body class="">
    <div class="container">
      <header>
        <nav class="navbar navbar-light  navbar-expand-sm justify-content-between" style="background-color: #e3f2fd;">

                   <img src="img/empleados.png" width="175" height="100" class="d-inline-block align-top" alt="" loading="lazy">
                   <ul class="navbar-nav">
                     <li class="nav-item">  <a class="nav-link active" href="alta.html">Alta</a> </li>
                     <li class="nav-item">  <a class="nav-link" href="baja.html">Baja </a> </li>
                    <li class="nav-item"><a  class="nav-link"href="modificar.html">Modificación</a> </li>
                    <li class="nav-item">  <a class="nav-link" href="index.php">Empleados</a> </li>
                     </ul>

           </nav>
      </header>
      <?php
      //6) Filtramos los diferentes resultados y realizamos una accion definida para cada uno.
      if (is_null($datos)){?>
        <div class="row p-3">
          <div class="container border p-3">
            <h2>Modificar</h2>
            <p> El DNI ingresado no esta en la base de datos.</p>
            <div class="container-img p-3">
            </div>
            <form action="" method="post">
              <div class="">
                <button class="btn btn-primary" type="submit" name="volver" formaction="modificar.html">Volver</button>
              </div>
            </form>
          </div>
        </div>
      <?php } else {
        // De lo contrario, asignamos a diferentes variables los respectivos valores del array $datos.
        $dni=$datos["dni"];
        $nombre=$datos["nombre"];
        $apellido=$datos["apellido"];
        $cargo=$datos["cargo"];
        $sueldo=$datos["sueldo_neto"];

        ?>
        <div class="row p-3">
          <div class="container border p-3">
            <h1>Datos de Empleados</h1>
            <h2>Modificar</h2>
            <p>Ingrese los nuevos datos del alumno.</p>
            <form action="" method="post">
              <div class="form-group row">
                <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">DNI</label>
                <div class="col-sm-10 col-md-10 col-lg-10">
                  <input class="form-control" type="text" name="dni" placeholder="DNI" value="<?php echo "$dni"; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Nombre</label>
                <div class="col-sm-10 col-md-10 col-lg-10">
                  <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo "$nombre"; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Apellido</label>
                <div class="col-sm-10 col-md-10 col-lg-10">
                  <input class="form-control" type="text" name="apellido" placeholder="Apellido" value="<?php echo "$apellido"; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Cargo</label>
                <div class="col-sm-10 col-md-10 col-lg-10">
                  <input class="form-control" type="text" name="cargo" placeholder="cargo" value="<?php echo "$cargo"; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Sueldo neto</label>
                <div class="col-sm-10 col-md-10 col-lg-10">
                  <input class="form-control" type="number" step="0.01" min=0 name="sueldo_neto" placeholder="sueldo_neto" value="<?php echo "$sueldo"; ?>">
                </div>
              </div>
              <div class="d-flex justify-content-end col-lg-6">
              </div>
              <div class="d-flex justify-content-end">
                <div class="">
                  <input class="btn btn-primary" type="submit" name="guardar_cambios" value="Guardar Cambios">
                  <button class="btn btn-primary" type="submit" name="Cancelar" formaction="modificar.html">Cancelar</button>
                </div>
              </div>
            </form>
            <?php
            if(array_key_exists('guardar_cambios',$_POST)){
              // 1') Conexion
              $conexion = mysqli_connect("127.0.0.1", "root", "");
              mysqli_select_db($conexion, "emple_dep");

              // 2') Almacenamos los datos actualizados del envío POST
              $dni=$_POST['dni'];
              $nombre=$_POST['nombre'];
              $apellido=$_POST['apellido'];
              $cargo=$_POST['cargo'];
              $sueldo=$_POST['sueldo_neto'];

              // 3') Preparar la orden SQL
              $consulta = "UPDATE empleado SET dni='$dni', nombre='$nombre', apellido='$apellido', cargo='$cargo', sueldo_neto='$sueldo' WHERE dni=$dni";

              // 4') Ejecutar la orden y actualizamos los datos
              mysqli_query($conexion, $consulta);
              header('Location: index.php');
            }?>
          </div>
        </div>
      <?php } ?>

    </div>

  </body>
</html>
