<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Torneo de Tenis</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body >
<article class="">
  <div class="contenedor"   >
        <nav>
          <ul>
            <li> <a href="modificar.html">Modificación</a> </li>
            <li> <a href="baja.html">Baja </a> </li>
            <li> <a href="departamentos.php">Departamentos</a> </li>
            <li> <a href="empleados.php">Empleados</a> </li>
            <li> <a href="alta.html">Alta</a> </li>
          </ul>
        </nav>
    <h1> Datos de los empleados</h1>
    <p>Empleados</p>

    <table>
      <tr>
        <th>Numero legajo</th>
        <th>DNI</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>fecha de nacimiento</th>
        <th>fecha de ingreso</th>
        <th>Cargo</th>
        <th>sueldo neto</th>
        <th>ID departamento</th>
      </tr>
      <?php
      $conexion = mysqli_connect("127.0.0.1", "root","");
      mysqli_select_db($conexion,"emple_dep");

      $consulta= "SELECT*FROM `empleado`";
  //4) ejecutar la orden y obtener los registros
      $datos= mysqli_query($conexion, $consulta);
  //5)mostrar los datos del registro
      while ($fila2=mysqli_fetch_array($datos)) {
        echo "<tr>";
        echo "<td>";
        echo $fila2 ["num_legajo"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["dni"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["apellido"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["nombre"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["fecha_nac"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["fecha_inc"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["cargo"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["sueldo_neto"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["id_depto"];
        echo "</td>";
        echo "</tr>";

      }
       ?>
    </table>
      </div>
</article>
    <footer class="footer">
      <p>Julieta Ibarra<br>
      <!-- <a href="ejemplo@example.com">ejemplo@example.com</a></p> -->
    </footer>

  </body>
</html>
