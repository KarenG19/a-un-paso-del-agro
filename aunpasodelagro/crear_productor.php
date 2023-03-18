<?php
include('datos_conexion2.php');
include('menu_admin.php');
include('header.php');

if (isset($_POST['crear_productor'])) {
  $id_productor = $_POST['id_productor'];
  $nombre_p = $_POST['nombre_p'];
  $apellido = $_POST['apellido'];
  $ubicacion = $_POST['ubicacion'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $visible = $_POST['visible'];
  
  $query = "INSERT INTO productores(id_productor,nombre_p,apellido,ubicacion,telefono,correo,visible) VALUES ('$id_productor','$nombre_p','$apellido','$ubicacion','$telefono','$correo','T')";
  $result = mysqli_query($conn,$query);
  if(!$result) {
    die("Query Failed.");
  }
  
  header('Location: admin_productores.php');
}
?>