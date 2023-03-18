<?php include("datos_conexion2.php"); ?>
<?php include('header.php'); ?>
<?php include('menu_admin.php'); ?>
  
<main class = "container p-4">
  <h1 align = "center">Productos agrícolas</h1>
  <br>
  <div class = "row">
    <div class = "col-md-4">
      <div class = "card card-body">
        <form action = "crear_producto.php" method = "POST" enctype = "multipart/form-data">
          <div class = "form-group">
            <input name = "nombre" type = "text" class = "form-control" placeholder = "Nombre" required>
            <br>
            <input name = "precio" type = "number" class = "form-control" placeholder = "Precio" required>
            <br>
            <select class="form-control" name = "unidad">
              <option value = "una unidad">una unidad</option>
              <option value = "una libra">una libra</option>
              <option value = "un kilo">un kilo</option>
            </select>
            <br>
            <textarea name = "descripcion" class = "form-control" rows = "2" placeholder = "Descripción"></textarea>
            <br>
            <input name = "foto" type = "file" class = "form-control"  placeholder = "Foto" required>
            <br>
            <input name = "id_productor" type = "number" class = "form-control" placeholder = "Productor" required>
          </div>
          <input type = "submit" name = "crear_producto" class = "btn btn-success btn-block" value = "Agregar">
        </form>
      </div>
    </div>
    <div class = "col-md-8">
      <table class = "table table-bordered">
        <thead>
          <tr>
            <th><h2>Nombre</h2></th>
            <th><h2>Precio</h2></th>
            <th><h2>Unidad</h2></th>
            <th><h2>Descripción</h2></th>
            <th><h2>Foto</h2></th>
            <th><h2>Productor</h2></th>
            <th><h2>Editar | Eliminar</h2></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM productos ORDER BY id_producto DESC";
          $result_tasks = mysqli_query($conn,$query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { 
          if($row['visible'] == 'T'){ ?>
            <tr>
              <td><p><?php echo $row['nombre'];?></p></td>
              <td><p><?php echo $row['precio']; ?></p></td>
              <td><p><?php echo $row['unidad']; ?></p></td>
              <td><p><?php echo $row['descripcion'];?></p></td>
              <td><p><img width = 300px height = auto src = "<?php echo $row['foto'];?>"></p></td>
              <td><p><?php echo $row['id_productor'];?></p></td>
              <td>
                <a href = "editar_producto.php?id_producto=<?php echo $row['id_producto']?>" class = "btn btn-danger">
                  <i class = "fas fa-marker"></i>
                </a>
                <a href = "eliminar_producto.php?id_producto=<?php echo $row['id_producto']?>" class = "btn btn-danger">
                  <i class = "far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          <?php } 
        }?>
        </tbody>
      </table>
    </div>
  </div>
</main>