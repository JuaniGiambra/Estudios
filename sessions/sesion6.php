<?php
	session_start();
	if(!isset($_SESSION[IDAlumno])){
	header("location:sesion5.php");}
	else{
	echo "BIENVENIDO ".$_SESSION[IDAlumno]."<br>\n";
	echo "BIENVENIDO ".$_SESSION[Nombre]." ".$_SESSION[Apellido]."<br>\n";
	echo "<a href=sesion5.php>HOME</a>";}
?>
