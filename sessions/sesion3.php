<?php
	session_start();
	
if(strlen($_POST[nombre])>0){
 $_SESSION[nombre]=$_POST[nombre];

 $_SESSION[apellido]=$_POST[ape];

 header("location:sesion4.php");
}


echo "<form action=".$_SERVER[PHP_SELF]." method=post>";

echo "<input type=text name=nombre><br>";

echo "<input type=text name=ape><br><br>";

echo "<input type=submit value=Enviar>";

echo "</form>";


?>
