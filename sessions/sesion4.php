<?php
	session_start();

	echo "INGRESO EL NOMBRE ".$_SESSION['nombre']."<br>";


echo "Y EL APELLIDO ".$_SESSION['apellido']."<br>";

echo session_id()."<br>";

/*$cantidad=2;
$producto=4563;
SESSION_REGISTER(cantidad,producto);

echo $_SESSION['cantidad']." x ".$_SESSION['producto'];*/
?>