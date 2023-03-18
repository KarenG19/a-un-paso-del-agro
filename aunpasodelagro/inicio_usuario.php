<?php 
	session_start();
	$user = $_SESSION['username'];

	if (!isset($user)) {
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <link rel = "shortcut icon" type = "image/png" href = "img/Logo2.png">
        <title>A un paso del agro</title>
        <meta name = "viewport" content = "width=device-width,initial-scale=1.0">
        
        <!-- CSS -->
        <link rel = "stylesheet" type = "text/css" href = "css/supersized.css"> 
        <link rel = "stylesheet" type = "text/css" href = "css/style3.css"> 
        
        <!-- Javascript -->
                <!-- Menu desplegable -->
        <script src = "js/jquery-1.8.2.min.js"></script>
        <script src = "js/main.js"></script>
                <!-- Slides de fondo -->
        <script src = "js/supersized.3.2.7.min.js"></script>
        <script src = "js/supersized-init.js"></script>
    </head>
 
    <body>
        <?php require 'menu_usuario.php' ?>
        <?php
            if ($_SESSION['login']!='login')
            header('Location:index.php');
        ?>
    </body>
</html>