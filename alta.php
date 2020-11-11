
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
    $depto=$_POST['depto'];


    // if ($q= "SELECT dni_participante FROM participante WHERE dni_participante=$dni") {
    // $q="SELECT `id_depto` FROM `departamento` WHERE `nombre_depto`='$depto'";
    // $id=mysqli_query($conexion,$q);
    //
    //   $id_req= mysql_fectch_array($id);
    //   if ($dni_req) {
    //     echo "<p> Ya esta en la base de datos.</p>";
    //   } else {
        //3) Preparar la orden SQL
        // INSERT INTO `participante` (`id_participante`, `dni_participante`, `apellido`, `nombre`, `fecha_nac`, `fecha_inc`, `cargo`, `sueldo`)
        // VALUES (NULL, '3690782', 'Hofman', 'Ana', 'muro 2345', '25', '44552089', 'Femenino');
        $consulta ="INSERT INTO `empleado`(`num_legajo`, `dni`, `apellido`, `nombre`, `fecha_nac`, `fecha_inc`,`cargo`, `sueldo_neto`,`id_depto`)
        VALUES(NULL,'$dni','$apellido', '$nombre','$fecha_nac','$fecha_inc','$cargo','$sueldo', '$depto')";
        //4) ejecutar la orden e ingresar datos
        mysqli_query($conexion,$consulta);
        header('Location: empleados.php')

    ?>
