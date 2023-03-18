<?php 
include("datos_conexion2.php"); 
include('header.php'); 
include('menu_usuario.php'); 
?>

<script>
    function mensaje() {
        alert("¡Graciar por calificar este producto agrícola!");
    } 
</script>
  
<main class = "container p-4">
    <h1 align = "center">Información del productor</h1>
    <br>
    <div class = "row">
        <div class = "col-md-8">
            <table class = "table">
                <tbody>
                    <?php
                    $id_producto = $_GET['id_producto'];
                    $query = "SELECT * FROM productos WHERE id_producto = $id_producto";
                    $result_tasks = mysqli_query($conn,$query);    

                    while($row = mysqli_fetch_assoc($result_tasks)) { 
                        if($row['visible'] == 'T'){ ?>
                            <tr>
                                <td><img width = 500px src = "<?php echo $row['foto'];?>"></td>
                                <td><p style = "font-size: 20px"><?php echo $row['descripcion'];?></p><br>
                                <p style = "font-size: 20px">$<?php echo $row['precio'];?> <?php echo $row['unidad']; ?></p></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <form method = "POST">
                                        <div>
                                            <p>Califique la calidad del producto: </p>
                                            <select class="form-control" name = "estrellas">
                                                <option value = "5">Excelente</option>
                                                <option value = "4">Muy bueno</option>
                                                <option value = "3">Bueno</option>
                                                <option value = "2">Regular</option>
                                                <option value = "1">Malo</option>
                                            </select>
                                            <br>
                                            <input type = "submit" onclick = "mensaje();" name = "calificar" class = "btn btn-success btn-block" value = "Calificar">
                                        </div>
                                    </form>
                                    <?php
                                        if(isset($_POST['calificar'])) {
                                            $id_producto = $_GET['id_producto'];
                                            $estrellas = $_POST['estrellas'];
                        
                                            $query = "INSERT INTO reportes(id_producto,estrellas) VALUES ('$id_producto','$estrellas')";
                                            $result = mysqli_query($conn,$query);

                                            if(!$result) {
                                                die("Query Failed.");
                                            }
                                  
                                        } ?>
                                </td>
                            </tr>
                        <?php } 
                    }?>
                </tbody>
            </table>
        </div>

        <div class = "col-md-4">
            <table class = "table">
                <tbody>
                    <?php
                    $id_producto = $_GET['id_producto'];
                    $query = "SELECT * FROM productos INNER JOIN productores ON 
                                productos.id_productor = productores.id_productor WHERE id_producto = $id_producto";
                    $result_tasks = mysqli_query($conn,$query);  
                    
                    while($row = mysqli_fetch_assoc($result_tasks)) { 
                    if($row['visible'] == 'T'){ ?>
                        <tr>
                            <td><img width = 40px height = auto src = "img/usuario.png"></td>
                            <td>
                                <p style = "font-size: 20px; text-align: left">
                                <?php 
                                    echo $row['nombre_p']; 
                                    echo ' ';
                                    echo $row['apellido']; 
                                ?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><img width = 40px height = auto src = "img/ubicacion.png"></td>
                            <td>
                                <p style = "font-size: 20px; text-align: left"><?php echo $row['ubicacion'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><img width = 40px height = auto src = "img/telefono.png"></td>
                            <td>
                                <p style = "font-size: 20px; text-align: left"><?php echo $row['telefono'];?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><img width = 40px height = auto src = "img/correo.png"></td>
                            <td>
                                <p style = "font-size: 20px; text-align: left"><?php echo $row['correo'];?></p>
                            </td>
                        </tr>
                        <!--
                        <tr>
                            <td>
                                <a href = "usuario_productos.php"><img width = 40px height = auto src = "img/volver.png"></a>
                            </td>
                        </tr> -->
                    <?php } 
                    }?>
                </tbody>
            </table>
        </div>
    </div>
</main>