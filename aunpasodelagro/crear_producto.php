<?php
include('datos_conexion2.php');
include('menu_admin.php');
include('header.php');

if (isset($_POST['crear_producto'])) {
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $unidad = $_POST['unidad'];
  $descripcion = $_POST['descripcion'];
  $foto = '';
  $id_productor = $_POST['id_productor'];
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
  
  $query = "INSERT INTO productos(nombre,precio,unidad,descripcion,foto,id_productor,visible) VALUES ('$nombre','$precio','$unidad','$descripcion','$foto','$id_productor','T')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  
  header('Location: admin_productos.php');
}
?>