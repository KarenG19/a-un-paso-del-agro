<?php
include('datos_conexion2.php');
include('menu_usuario.php');
include('header.php');

if (isset($_POST['publicar_producto'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $unidad = $_POST['unidad'];
    $descripcion = $_POST['descripcion'];
    $foto = '';
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

    $id_productor = $_POST['id_productor'];
    $nombre_p = $_POST['nombre_p'];
    $apellido = $_POST['apellido'];
    $ubicacion = $_POST['ubicacion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $visible = $_POST['visible'];
    
    $query = "INSERT INTO productos(nombre,precio,unidad,descripcion,foto,id_productor,visible) VALUES ('$nombre','$precio','$unidad','$descripcion','$foto','$id_productor','T')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }

    $query2 = "INSERT INTO productores(id_productor,nombre_p,apellido,ubicacion,telefono,correo,visible) VALUES ('$id_productor','$nombre_p','$apellido','$ubicacion','$telefono','$correo','T')";
    $result2 = mysqli_query($conn,$query2);
    if(!$result2) {
      die("Query Failed.");
    }
  
  header('Location: usuario_productos.php');
}


