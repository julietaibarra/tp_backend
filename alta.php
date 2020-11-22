
    <?php
    //1) Conexion
    $conexion= mysqli_connect("127.0.0.1","root","");
    ///
    mysqli_select_db($conexion, "emple_dep");
    //2) Almacena los datos del envio POST
    // $num_legajo=$_POST['num_legajo'];
    $dni=$_POST['dni'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $fecha_nac= $_POST['fecha_nac'];
    $fecha_inc=$_POST['fecha_inc'];
    $cargo= $_POST['cargo'];
    $sueldo=$_POST['sueldo_neto'];
    // $depto=$_POST['depto'];


    if ($q= "SELECT dni FROM empleado WHERE dni=$dni") {
    //
    // $req=mysqli_query($conexion,$q);
    //
    //   $dni_req= mysqli_fectch_array($req);
    //   if ($dni_req)
    // {
      ?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title></title>
        </head>
        <body>
          <nav>
            <ul>
              <li> <a href="modificar.html">Modificación</a> </li>
              <li> <a href="baja.html">Baja </a> </li>
              <!-- <li> <a href="departamentos.php">Departamentos</a> </li> -->
              <li> <a href="empleados.php">Empleados</a> </li>
              <li> <a href="alta.html">Alta</a> </li>
            </ul>
          </nav>
          <h1>El dni ya esta en la base de datos</h1>
        </body>
      </html>
      <?php
      } else {
        //3) Preparar la orden SQL
        $consulta ="INSERT INTO `empleado`(`num_legajo`, `dni`, `apellido`, `nombre`, `fecha_nac`, `fecha_inc`,`cargo`, `sueldo_neto`)
        VALUES(NULL,'$dni','$apellido', '$nombre','$fecha_nac','$fecha_inc','$cargo','$sueldo')";
        //4) ejecutar la orden e ingresar datos
        mysqli_query($conexion,$consulta);
        header('Location: empleados.php');
      }
    // }
    // else{
    //   $consulta ="INSERT INTO `empleado`(`num_legajo`, `dni`, `apellido`, `nombre`, `fecha_nac`, `fecha_inc`,`cargo`, `sueldo_neto`)
    //   VALUES(NULL,'$dni','$apellido', '$nombre','$fecha_nac','$fecha_inc','$cargo','$sueldo')";
    //   //4) ejecutar la orden e ingresar datos
    //   mysqli_query($conexion,$consulta);
    //     header('Location: empleados.php');
    // }
    ?>
