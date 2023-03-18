<?php 
	session_start();
	$user = $_SESSION['username'];

	if (!isset($user)) {
		header("location: index.php");
	}
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
</html>








