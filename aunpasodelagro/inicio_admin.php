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
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">
        <link rel = "stylesheet" type = "text/css" href = "css/style3.css"> 
        
        <!-- Javascript -->
        <script src = "js/jquery-1.8.2.min.js"></script>
        <script src = "js/main.js"></script>
    </head>
 
    <body>
        <br> <br> <br> <br> <br> <br>
        <p align = "center"><img src = "img/Logo2.png" width = "28%" height = "28%">
        <p style = "text-align: center; color: #ffffff; font-size: 60px; font-family: Ink Free" ><b>A un paso del agro</b></p>
        <?php require 'menu_admin.php' ?>
        <?php
            if ($_SESSION['login']!='login')
            header('Location:index.php');
        ?>
    </body>
</html>