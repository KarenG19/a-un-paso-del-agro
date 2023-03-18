<?php 
include("datos_conexion2.php"); 
include('header.php'); 
include('menu_admin.php'); 
?>

<main class = "container p-4">
  <h1 align = "center">Reportes</h1>
  <br>
  <div class = "col-md-12">
    <table class = "table table-bordered">
      <thead>
        <tr>
          <th><h2 style = "font-size: 24px">Producto agrícola</h2></th>
          <th><h2 style = "font-size: 24px">Calificación</h2></th>
        </tr>
      </thead>
      <tbody>
        <?php
            $query = "SELECT productos.id_producto,productos.nombre,productos.foto,productos.visible,
                    reportes.id_producto,round(AVG (reportes.estrellas),1) AS promedio
                    FROM productos INNER JOIN reportes ON productos.id_producto = reportes.id_producto
                    GROUP BY reportes.id_producto ORDER BY promedio DESC";
            $result_tasks = mysqli_query($conn,$query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { 
            if($row['visible'] == 'T'){ ?>
                <tr>
                    <td><p style = "font-size: 20px"><img width = 200px src = "<?php echo $row['foto'];?>"><br><?php echo $row['nombre'];?></p></td>
                    <?php
                    if($row['promedio'] >= 1.0 and $row['promedio'] < 2) { ?>
                        <td><p style = "font-size: 20px"><img width = 200px src = "img/start1.png"><br><?php echo $row['promedio']; ?></p></td>
                    <?php } ?>
                    <?php
                    if($row['promedio'] >= 2.0 and $row['promedio'] < 3.0) { ?>
                        <td><p style = "font-size: 20px"><img width = 200px src = "img/start2.png"><br><?php echo $row['promedio']; ?></p></td>
                    <?php } ?>
                    <?php
                    if($row['promedio'] >= 3.0 and $row['promedio'] < 4.0) { ?>
                        <td><p style = "font-size: 20px"><img width = 200px src = "img/start3.png"><br><?php echo $row['promedio']; ?></p></td>
                    <?php } ?>
                    <?php
                    if($row['promedio'] >= 4.0 and $row['promedio'] < 5.0) { ?>
                        <td><p style = "font-size: 20px"><img width = 200px src = "img/start4.png"><br><?php echo $row['promedio']; ?></p></td>
                    <?php } ?>
                    <?php
                    if($row['promedio'] == 5.0) { ?>
                        <td><p style = "font-size: 20px"><img width = 200px src = "img/start5.png"><br><?php echo $row['promedio']; ?></p></td>
                    <?php } ?>
                </tr>
            <?php } 
          }?>
        </tbody>
      </table>
    </div>
  </div>
</main>

