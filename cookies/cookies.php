<?php 

 // si existe la variable contador va a sumarle el valor +1 a la cookie, en cambio si esta no exite lo que hace es crearla y darle un valor de 1 para cuando haya un refresco de pagina se actualize.

if(isset($_COOKIE['contador'])) {
	setcookie('contador', $_COOKIE['contador'] + 1, time() + 24 * 365 * 60 * 60);
	$mensaje = 'Numero de visitas: ' . $_COOKIE['contador'];
} else {
	setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
	$mensaje = 'Bienvenido a la pagina!';
}

echo $mensaje;
 ?>