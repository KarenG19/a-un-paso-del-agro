<?php
include("datos_conexion2.php");
include('header.php'); 

if (isset($_GET['id_productor'])) {
  $id_productor = $_GET['id_productor'];
  $query = "SELECT * FROM productores WHERE id_productor = $id_productor";
  $result = mysqli_query($conn,$query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id_productor = $row['id_productor'];
    $nombre_p = $row['nombre_p'];
    $apellido = $row['apellido'];
    $ubicacion = $row['ubicacion'];
    $telefono = $row['telefono'];
    $correo = $row['correo'];
    $visible = $row['visible'];
  }
}

if (isset($_POST['actualizar'])) {
  $id_productor = $_GET['id_productor'];
  $nombre_p = $_POST['nombre_p'];
  $apellido = $_POST['apellido'];
  $ubicacion = $_POST['ubicacion'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $visible = $_POST['visible'];

  $query = "UPDATE productores set id_productor = '$id_productor',nombre_p = '$nombre_p',apellido = '$apellido',ubicacion = '$ubicacion',telefono = '$telefono',correo = '$correo' WHERE id_productor = $id_productor";
  mysqli_query($conn,$query);
  header('Location: admin_productores.php');
}
?>
<?php include('menu_admin.php'); ?>
<div class = "container p-4">
  <h1 align = "center">Actualizar información</h1>
  <br>
  <div class = "row">
    <div class = "col-md-4 mx-auto">
      <div class = "card card-body">
      <form action = "editar_productor.php?id_productor=<?php echo $_GET['id_productor']; ?>" method = "POST">
        <div class = "form-group">
            <input name = "id_productor" type = "number" class = "form-control" value = "<?php echo $id_productor; ?>" placeholder = "Identificación">
            <br>
            <input name = "nombre_p" type = "text" class = "form-control" value = "<?php echo $nombre_p; ?>" placeholder = "Nombre">
            <br>
            <input name = "apellido" type = "text" class = "form-control" value = "<?php echo $apellido; ?>" placeholder = "Apellido">
            <br>
            <input name = "ubicacion" type = "text" class = "form-control" value = "<?php echo $ubicacion; ?>" placeholder = "Ubicación">
            <br>
            <input name = "telefono" type = "number" class = "form-control" value = "<?php echo $telefono; ?>" placeholder = "Teléfono">
            <br>
            <input name = "correo" type = "email" class = "form-control" value = "<?php echo $correo; ?>" placeholder = "Correo">
        </div>
        <input type = "submit" name = "actualizar" class = "btn btn-success btn-block" value = "Actualizar">
      </form>
      </div>
    </div>
  </div>
</div>
