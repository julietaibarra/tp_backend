
    <?php
    //1) Conexion
    $conexion= mysqli_connect("127.0.0.1","root","");
    ///
    mysqli_select_db($conexion, "emple_dep");
    //2) Almacena los datos del envio POST
    $dni=$_POST['dni'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $fecha_nac= $_POST['fecha_nac'];
    $fecha_inc=$_POST['fecha_inc'];
    $cargo= $_POST['cargo'];
    $sueldo=$_POST['sueldo_neto'];
    // $depto=$_POST['depto'];

    if ($q= "SELECT dni FROM empleado WHERE dni=$dni") {

    $req=mysqli_query($conexion,$q);

      $dni_req= mysqli_fetch_array($req);
      if ($dni_req)
    {
      ?>
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
                <h2>Alta de empleado</h2>
                <p> El DNI ingresado  esta en la base de datos.</p>
                <div class="container-img p-3">
                  <img class="logo-img" src="img/error.png" alt="">
                </div>
                <form action="" method="post">
                  <div class="d-flex">
                    <button class="btn btn-primary" type="submit" name="volver" formaction="alta.html">Volver</button>
                  </div>
                </form>
              </div>
            </div>
        </body>

      </html>
      <?php
      } else {
        //3) Preparar la orden SQL
        $consulta ="INSERT INTO `empleado`(`num_legajo`, `dni`, `apellido`, `nombre`, `fecha_nac`, `fecha_inc`,`cargo`, `sueldo_neto`)
        VALUES(NULL,'$dni','$apellido', '$nombre','$fecha_nac','$fecha_inc','$cargo','$sueldo')";
        //4) ejecutar la orden e ingresar datos
        mysqli_query($conexion,$consulta);
        header('Location: index.php');
      }
}
    ?>
