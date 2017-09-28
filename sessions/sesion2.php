<?php

session_start();

echo $nombre." ".$apellido."<br>";

echo session_id()."<br>";

echo $_SESSION['nombre']." ".$_SESSION['apellido']."<br>";
session_unset();
session_destroy();
?>
