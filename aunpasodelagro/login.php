<?php
        session_start();
        require_once("datos_conexion.php");
        $mysqli = new mysqli($host,$user,$password,$database);
        
        $username = $_REQUEST['username'];
        $pass = $_REQUEST['password'];
        $rol = $_REQUEST['rol'];
        $servidor = $_REQUEST['servidor'];
        $sql = "SELECT * FROM usuarios WHERE username = '$username' AND pass = '$pass'";
        
        if ($mysqli->query($sql)->fetch_assoc()['username'] == $username and $mysqli->query($sql)->fetch_assoc()['rol'] == "Administrador"){
                $_SESSION['login'] = 'login';
                $_SESSION['username'] = $username;
		$_SESSION['servidor'] = $servidor;
                header("Location:inicio_admin.php");
        }	
        elseif ($mysqli->query($sql)->fetch_assoc()['username'] == $username and $mysqli->query($sql)->fetch_assoc()['rol'] == "Usuario"){
                $_SESSION['login'] = 'login';
                $_SESSION['username'] = $username;
		$_SESSION['servidor'] = $servidor;
                header("Location:inicio_usuario.php");
        }
        else
        header("Location:index.php?mensaje=Denegado");	
?>