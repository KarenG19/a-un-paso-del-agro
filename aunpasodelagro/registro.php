<?php
	require_once("datos_conexion.php");
	$mysqli = new mysqli($host,$user,$password,$database);
	
	$username = $_REQUEST['username'];
	$pass = $_REQUEST['password'];
	$email = $_REQUEST['email'];
	$rol = $_REQUEST['rol'];
	
	$sql = "INSERT INTO usuarios (username,email,pass,rol) VALUES ('$username','$email','$pass','Usuario')";
	$mysqli->query($sql);
	header("Location:index.php?login");
?>