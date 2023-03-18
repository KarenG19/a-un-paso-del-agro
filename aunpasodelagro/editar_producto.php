<?php
include("datos_conexion2.php");
include('header.php'); 

if (isset($_GET['id_producto'])) {
  $id_producto = $_GET['id_producto'];
  $query = "SELECT * FROM productos WHERE id_producto = $id_producto";
  $result = mysqli_query($conn,$query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $precio = $row['precio'];
    $unidad = $row['unidad'];
    $descripcion = $row['descripcion'];
    $foto = $row['foto'];
  }
}

if (isset($_POST['actualizar'])) {
  $id_producto = $_GET['id_producto'];
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $unidad = $_POST['unidad'];
  $descripcion = $_POST['descripcion'];
  $foto = $_POST['foto'];
  $visible = $_POST['visible'];

  if(isset($_FILES['foto'])){
    $file = $_FILES['foto'];
    $nombre2 = $file['name'];
    $tipo = $file['type'];
    $ruta_provisional = $file['tmp_name'];
    $dimensiones = getimagesize($ruta_provisional);
    $carpeta = 'fotos/';
 
    $src = $carpeta.$nombre2;
    move_uploaded_file($ruta_provisional,$src);
    $foto = 'fotos/'.$nombre2;
  }

  $query = "UPDATE productos set nombre = '$nombre',precio = '$precio',unidad = '$unidad',descripcion = '$descripcion',foto = '$foto' WHERE id_producto = $id_producto";
  mysqli_query($conn,$query);
  header('Location: admin_productos.php');
}
?>
<?php include('menu_admin.php'); ?>
<div class = "container p-4">
  <h1 align = "center">Actualizar Información</h1>
  <br>
  <div class = "row">
    <div class = "col-md-4 mx-auto">
      <div class = "card card-body">
      <form action = "editar_producto.php?id_producto=<?php echo $_GET['id_producto']; ?>" method = "POST" enctype = "multipart/form-data">
        <div class = "form-group">
          <input name = "nombre" type = "text" class = "form-control" value = "<?php echo $nombre; ?>" placeholder = "Nombre">
          <br>
          <input name = "precio" type = "number" class = "form-control" value = "<?php echo $precio; ?>" placeholder = "Precio">
          <br>
          <select class="form-control" name = "unidad">
            <option value = "una unidad">una unidad</option>
            <option value = "una libra">una libra</option>
            <option value = "un kilo">un kilo</option>
          </select>
          <br>
          <textarea name = "descripcion" class = "form-control" rows = "2" placeholder = "Descripción"><?php echo $descripcion;?></textarea>
          <br>
          <div>
            <img width = 80px height = auto src = "<?php echo $foto ;?>">
          </div>
          <br>
          <input name = "foto" type = "file" class = "form-control" value = "<?php echo $foto ;?>">
        </div>
        <input type = "submit" name = "actualizar" class = "btn btn-success btn-block" value = "Actualizar">
      </form>
      </div>
    </div>
  </div>
</div>

