<?php
	SESSION_START();
	


	echo "<form action=".$_SERVER[PHP_SELF]." method=post>";
	echo "<input type=text name=nombre><br>";
	echo "<input type=text name=ape><br><br>";
	echo "<input type=submit value=Enviar>";
	echo "</form>";
?>
