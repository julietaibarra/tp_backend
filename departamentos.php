<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Torneo de Tenis</title>
    <link rel="stylesheet" href="css/styles.css">
    <!--script type="text/javascript" src="js/confirmacion.js">

    </script-->

  </head>

  <body >
<article class="">
  <div class="contenedor"   >
      <!-- <div class="cabecera"> -->

        <!-- <div class="logo">

        </div> -->
        <nav>
          <ul>
            <li> <a href="modificar.html">Modificación</a> </li>
            <li> <a href="baja.html">Baja </a> </li>
            <li> <a href="departamentos.php">Departamentos</a> </li>
            <li> <a href="empleados.php">Empleados</a> </li>
            <li> <a href="alta.html">Alta</a> </li>
          </ul>
        </nav>
    <h1> Datos de la empresa</h1>
    <p>Departamentos</p>

    <table>
      <tr>
        <th>ID departamento </th>
        <th>Nombre</th>
        <th>Diracción</th>
        <th>sub delegación</th>
      </tr>
      <?php
      $conexion = mysqli_connect("127.0.0.1", "root","");
      mysqli_select_db($conexion,"emple_dep");

      $consulta= "SELECT*FROM `departamento`";
  //4) ejecutar la orden y obtener los registros
      $datos= mysqli_query($conexion, $consulta);
  //5)mostrar los datos del registro
      while ($fila2=mysqli_fetch_array($datos)) {
        echo "<tr>";
        echo "<td>";
        echo $fila2 ["id_depto"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["nombre_depto"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["direccion_depto"];
        echo "</td>";
        echo "<td>";
        echo $fila2 ["sub_deleg"];
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
