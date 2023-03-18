<?php 
include("datos_conexion2.php");
include('header.php'); 
include('menu_usuario.php'); 
?>
  
<main class = "container p-4">
    <h1 align = "center">Buscar producto</h1>
    <br>
    <div class = "row">
        <div class = "col-md-4">
            <form method = "GET">
                <div class = "form-group">
                    <input type = "text" name = "busqueda" class = "form-control" placeholder = "" required>
                    <br>
                    <input type = "submit" name = "enviar" class = "btn btn-success btn-block" value = "Buscar">
                    <br>
                    <p style = "font-size: 20px">La busqueda se puede realizar mediante el nombre del producto
                                                    o la ubicación del productor</p>
                </div>
            </form>
        </div>
        <div class = "col-md-8">
            <table class = "table">
                <?php
                if(isset($_GET['enviar'])){
                    $busqueda = $_GET['busqueda'];

                    $query = "SELECT * FROM productos INNER JOIN productores ON productos.id_productor = productores.id_productor 
                                WHERE productos.nombre LIKE '%$busqueda%' OR productores.ubicacion LIKE '%$busqueda%'";
                    $result = mysqli_query($conn,$query);

                    if($result = mysqli_query($conn,$query)){
                        $row_cnt = $result->num_rows;

                        if($row_cnt == 0){
                            echo "<p style='color:#ff6961; font-size: 22px'>
                            <b>Producto agrícola no disponible</b></p>";
                        } 

                        while($row = mysqli_fetch_assoc($result)) { 
                            if($row['visible'] == 'T'){ ?>
                                <tr>
                                <td><img width = 500px src = "<?php echo $row['foto'];?>"></td>
                                <td><p style = "font-size: 20px"><?php echo $row['descripcion'];?></p><br>
                                <p style = "font-size: 20px">$<?php echo $row['precio'];?> <?php echo $row['unidad']; ?></p></td>
                                <td><a href = "info_productor.php?id_producto=<?php echo $row['id_producto']?>" target = "_blank" class = "btn btn-danger">
                                    Información del productor</a></td>
                                </tr>
                                <tr>
                                    <td><p align = "center" style = "font-size: 25px"><?php echo $row['nombre'];?></p></td>
                                </tr>
                            <?php } 
                        }
                    }
                } ?>
            </table>
        </div>
    </div>
</main>