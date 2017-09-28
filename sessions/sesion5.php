<?php
	session_start();
	include ("conec.inc");
//	session_destroy();
	if (STRLEN($_POST[usuario])>0){
	$sql="SELECT * FROM usuarios WHERE Usuario='".$_POST[usuario]."' AND PASS='".$_POST[pass]."'";
		$res=mysql_query($sql,$conexion);
		$num=mysql_num_rows($res);
		if ($num){
			$arr=mysql_fetch_array($res);
			$_SESSION[IDAlumno]=$arr[ID_Alumno];
			$_SESSION[Nombre]=$arr[Nombre];
			$_SESSION[Apellido]=$arr[Apellido];
//			echo $_SESSION[IDAlumno]." ".$arr[Nombre]." ".$arr[Apellido];
			header("location:sesion6.php");
		}else{
		echo "ERROR DE USUARIO Y CONTRASENA<br><br>";
		echo "<a href=sesion5.php>VOLVER</a>";
		session_destroy();
		}
	}else{
	echo "<form action=".$_SERVER[PHP_SELF]." method=POST>"."\n";
	echo "<input type=text name=usuario><br>"."\n";
	echo "<input type=text name=pass><br><br>"."\n";
	echo "<input type=submit value=Login>"."\n";
	echo "</form>"."\n";}
?>
