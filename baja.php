<?php
$conexion = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion, "emple_dep");

$dni= $_POST['dni'];


$consulta="DELETE FROM `empleado` WHERE `dni`=$dni";

mysqli_query($conexion, $consulta);

header('Location: empleados.php');

 ?>
