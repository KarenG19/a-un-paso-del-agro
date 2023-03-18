<?php 
    include("datos_conexion2.php"); 
    include('header.php');
    include('menu_usuario.php'); 
?>
  
<main class = "container p-4">
    <h1 align = "center">Publique sus productos</h1>
    <br>
    <form action = "publicar_producto2.php" method = "POST" enctype = "multipart/form-data">
        <div class = "form-group">
            <div class = "row">
                <div class = "col-md-6">
                    <h2 align = "center">Información del producto</h2>
                    <input name = "nombre" type = "text" class = "form-control" placeholder = "Nombre" required>
                    <br>
                    <input name = "precio" type = "number" class = "form-control" placeholder = "Precio" required>
                    <br>
                    <select class="form-control" name = "unidad">
                        <option name = "unidad" value = "una unidad">una unidad</option>
                        <option name = "unidad" value = "una libra">una libra</option>
                        <option name = "unidad" value = "un kilo">un kilo</option>
                    </select>
                    <br>
                    <textarea name = "descripcion" class = "form-control" rows = "3" placeholder = "Descripción"></textarea>
                    <br>
                    <p>Seleccione una foto</p>
                    <input name = "foto" type = "file" class = "form-control"  placeholder = "Foto" required>
                </div>
                <div class = "col-md-6">
                    <h2 align = "center">Información del productor</h2>
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
                    <input name = "correo" type = "email" class = "form-control"  placeholder = "Correo">
                </div>
            </div>
            <br>
            <input type = "submit" name = "publicar_producto" class = "btn btn-success btn-block" value = "Publicar">
        </div>
    </form>
</main>