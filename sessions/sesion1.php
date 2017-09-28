<?php

	session_start();

		$nombre=$_GET['nom'];
		$apellido=$_GET['ape'];
		
		$_SESSION['nombre']=$nombre;
		$_SESSION['apellido']=$apellido;
		
			
		//session_register($nombre,$apellido);

		header("Location:sesion4.php");
?>
