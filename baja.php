<?php
$conexion = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion, "emple_dep");
// 2) Almacenamos los datos del envío POST
$dni = $_POST['dni'];

// 3) Preparar la orden SQL
$consulta= "SELECT * FROM empleado WHERE dni=$dni";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
$repuesta=mysqli_query ($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);

if (is_null($datos)){?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
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
        <div class="row p-3">
          <div class="container border p-3">
            <h1> Datos de Empleados</h1>
            <h2>Baja de empleado</h2>
            <p> El DNI ingresado no  esta en la base de datos.</p>
            <div class="container-img p-3">
              <img class="logo-img" src="img/error.png" alt="">
            </div>
            <form action="" method="post">
              <div class="d-flex">
                <button class="btn btn-primary" type="submit" name="volver" formaction="baja.html">Volver</button>
              </div>
            </form>
          </div>
        </div>
    </body>

  </html>
<?php } else {

$dni= $_POST['dni'];
$consulta="DELETE FROM `empleado` WHERE `dni`=$dni";

mysqli_query($conexion, $consulta);

header('Location: index.php');

}
 ?>
