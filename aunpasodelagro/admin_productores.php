<?php 
include("datos_conexion2.php");
include('header.php'); 
include('menu_admin.php'); 
?>
  
<main class = "container p-4">
    <h1 align = "center">Productores agrícolas</h1>
    <br>
    <div class = "row">
        <div class = "col-md-4">
            <div class = "card card-body">
                <form action = "crear_productor.php" method = "POST" enctype = "multipart/form-data">
                <div class = "form-group">
                    <input name = "id_productor" type = "number" class = "form-control" placeholder = "Identificación" required>
                    <br>
                    <input name = "nombre_p" type = "text" class = "form-control" placeholder = "Nombre" required>
                    <br>
                    <input name = "apellido" type = "text" class = "form-control" placeholder = "Apellido">
                    <br>
                    <input name = "ubicacion" type = "text" class = "form-control"  placeholder = "Ubicación" required>
                    <br>
                    <input name = "telefono" type = "number" class = "form-control"  placeholder = "Teléfono" required>
                    <br>
                    <input name = "correo" type = "email" class = "form-control"  placeholder = "Correo electrónico">
                </div>
                <input type = "submit" name = "crear_productor" class = "btn btn-success btn-block" value = "Agregar">
                </form>
            </div>
        </div>
        <div class = "col-md-8">
        <table class = "table table-bordered">
            <thead>
            <tr>
                <th><h2>Identificación</h2></th>
                <th><h2>Nombre</h2></th>
                <th><h2>Apellido</h2></th>
                <th><h2>Ubicación</h2></th>
                <th><h2>Teléfono</h2></th>
                <th><h2>Correo electrónico</h2></th>
                <th><h2>Editar | Eliminar</h2></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM productores";
            $result = mysqli_query($conn,$query);    

            while($row = mysqli_fetch_assoc($result)) { 
            if($row['visible'] == 'T'){ ?>
                <tr>
                    <td><p><?php echo $row['id_productor'];?></p></td>
                    <td><p><?php echo $row['nombre_p'];?></p></td>
                    <td><p><?php echo $row['apellido'];?></p></td>
                    <td><p><?php echo $row['ubicacion'];?></p></td>
                    <td><p><?php echo $row['telefono'];?></p></td>
                    <td><p><?php echo $row['correo'];?></p></td>
                    <td>
                    <a href = "editar_productor.php?id_productor=<?php echo $row['id_productor']?>" class = "btn btn-danger">
                    <i class = "fas fa-marker"></i>
                    </a>
                    <a href = "eliminar_productor.php?id_productor=<?php echo $row['id_productor']?>" class = "btn btn-danger">
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