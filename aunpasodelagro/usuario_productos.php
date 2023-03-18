<?php 
include("datos_conexion2.php");
include('header.php'); 
include('menu_usuario.php'); 
?>
  
<main class = "container p-4">
  <h1 align = "center">Productos agrícolas</h1>
  <br>
  <div class = "col-md-12">
    <table class = "table">
      <tbody>
        <?php
          $query = "SELECT * FROM productos ORDER BY id_producto DESC";
          $result_tasks = mysqli_query($conn,$query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { 
            if($row['visible'] == 'T'){ ?>
              <tr>
                <td><img width = 600px src = "<?php echo $row['foto'];?>"></td>
                <td><p style = "font-size: 20px"><?php echo $row['descripcion'];?></p><br>
                <p style = "font-size: 20px">$<?php echo $row['precio'];?> <?php echo $row['unidad']; ?></p></td>         
                <td><a href = "info_productor.php?id_producto=<?php echo $row['id_producto']?>" target = "_blank" class = "btn btn-danger">
                    Información del productor</a></td>
              </tr>
              <tr>
                <td><p align = "center" style = "font-size: 25px"><?php echo $row['nombre'];?></p></td>
              </tr>
            <?php } 
          }?>
        </tbody>
      </table>
    </div>
  </div>
</main>