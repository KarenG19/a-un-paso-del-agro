<?php
include("datos_conexion2.php");
include('menu_admin.php');

if(isset($_GET['id_productor'])) {
  $id_productor = $_GET['id_productor'];
  $visible = $_GET['visible'];
  $query = "UPDATE productores set visible = 'F' WHERE id_productor = $id_productor";
  $result = mysqli_query($conn,$query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: admin_productores.php');
}
?>