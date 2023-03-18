<?php 
    include('datos_conexion.php'); 
?>
<!DOCTYPE html>
<html lang = "es">
  <head>
    <meta charset = "UTF-8">
    <title>A un paso del agro</title>
    <link rel = "shortcut icon" type = "image/png" href = "img/Logo2.png">
    <meta name = "viewport" content = "width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    
    <!-- BOOTSTRAP 4 -->
    <link rel = "stylesheet" href = "https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css" /> -->
    
    <!-- FONT AWESOEM -->
    <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity = "sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin = "anonymous">

    <!-- CSS -->
    <link rel = "stylesheet" type = "text/css" href = "css/style.css">
    <link rel = "stylesheet" type = "text/css" href = "css/style3.css">
    <link rel = "stylesheet" type = "text/css" href = "css/example.css">
    <link rel = "stylesheet" type = "text/css" href = "css/example2.css"> 

    <!-- Javascript -->
    <script src = "js/jquery-1.8.2.min.js"></script>
    <script src = "js/main.js"></script>
  </head>

    <body class = "container">
        <p align="center" style="text-align: center; color: #7ed957; font-size: 50px;font-family:Ink Free">
            <img src="img/Logo2.png" width="130px" height="auto"><b> A un paso del agro</b></p>
        <hr>
        <div class = "row">
            <div class = "col-md-6">
                <div>
                        <?php
                            $servidor='http://'.$_SERVER["SERVER_NAME"].'/aunpasodelagro/';
                        ?>
                        <h2>Iniciar sesión</h2>
                        <form action="<?php echo $servidor."login.php"?>" method="POST">
                            <div class = "form-group">
                                <input type='hidden' name='servidor' value="<?php echo $servidor?>">
                                <input type="text" name="username" class = "form-control" placeholder="👤 Usuario" required>
                                <br>
                                <input type="password" name="password" class = "form-control" placeholder="🔒 Contraseña" required>
                            </div>
                            <input  type="submit" class = "btn btn-success btn-block" value = "Ingresar">
                            <br>

                            <?php
                                if (isset($_REQUEST['mensaje'])) {
                                    echo "<p style='color:#ff6961; font-size: 22px;'><b>Datos incorrectos</b></p>";
                                }
                            ?>
                        </form>
                </div>
            </div>

            <div class = "col-md-6">
                <div>
                    <h2>Registrarse</h2>
                    <form action="registro.php" method="POST">
                        <div class = "form-group">
                            <input type="text" name="username" class = "form-control" placeholder="👤 Nombre de usuario" required>
                            <br>
                            <input type="email" name="email" class = "form-control" placeholder="📧 Correo electrónico" required>
                            <br>
                            <input type="password" name="password" class = "form-control" placeholder="🔒 Contraseña" required minlength=6>
                        </div>
                        <input  type="submit" class = "btn btn-success btn-block" value = "Registrar">
                        <br>

                        <?php
                            if (isset($_REQUEST['login'])) {
                                echo "<p style='color:#7ed957; font-size: 22px;'><b>Registro correcto</b></p>";
                            }
                        ?> 
                    </form>    
                </div>
            </div>
        </div>
    </body>
</html>
        