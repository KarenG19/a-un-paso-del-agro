<?php
include("datos_conexion2.php");
include('menu_admin.php');

if(isset($_GET['id_producto'])) {
  $id_producto = $_GET['id_producto'];
  $visible = $_GET['visible'];
  $query = "UPDATE productos set visible = 'F' WHERE id_producto = $id_producto";
  $result = mysqli_query($conn,$query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: admin_productos.php');
}
?>