<?php
	require_once("datos_conexion.php");
	$mysqli = new mysqli($host,$user,$password,$database);
	
	$username = $_REQUEST['username'];
	$sql = "SELECT username FROM usuarios WHERE username = '$username'";
    $existe = "false";	 

    if('username' == $username){
    	$existe = "true";
    }

    $mysqli->query($sql);
	$mysqli->close();

	echo $existe;	
?>
