<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Datos de empleados</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body >
<article class="">
  <div class="container">
    <header>
      <nav class="navbar navbar-light  navbar-expand-sm justify-content-between" style="background-color: #e3f2fd;">

                 <img src="img/empleados.png" width="175" height="100" class="d-inline-block align-top" alt="" loading="lazy">
                 <ul class="navbar-nav">
                   <li class="nav-item">  <a class="nav-link active" href="alta.html">Alta</a> </li>
                   <li class="nav-item">  <a class="nav-link" href="baja.html">Baja </a> </li>
                  <li class="nav-item"><a  class="nav-link"href="modificar.html">Modificación</a> </li>
                  <li class="nav-item">  <a class="nav-link" href="empleados.php">Empleados</a> </li>
                     <!-- <li> <a href="departamentos.php">Departamentos</a> </li> -->
                   </ul>

         </nav>
    </header>
    <h1> Datos de los empleados</h1>
    <p>Empleados</p>

<table class="table table-hover">
  <thead>
    <tr>
    <th  scope="col">Numero legajo</th>
    <th scope="col">DNI</th>
    <th scope="col">Apellido</th>
    <th scope="col">Nombre</th>
    <th scope="col">fecha de nacimiento</th>
    <th scope="col">fecha de ingreso</th>
    <th scope="col">Cargo</th>
    <th scope="col">sueldo neto</th>
    <!-- <th>ID departamento</th> -->
  </tr>
  </thead>
      <tbody>
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
          // echo "<td>";
          // echo $fila2 ["id_depto"];
          // echo "</td>";
          echo "</tr>";

        }
         ?>
      </tbody>

    </table>
      </div>
</article>
    <footer class="footer">
      <p>Julieta Ibarra<br>
      <!-- <a href="ejemplo@example.com">ejemplo@example.com</a></p> -->
    </footer>

  </body>
</html>
