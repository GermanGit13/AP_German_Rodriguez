<?php
session_start(); //recuperamos la sesion
$_SESSION=array(); //asignamos al array _SESSION UN ARRAY VACIO
session_destroy(); //PARA BORRAR TODOS LOS DATOS DE LA SESION
header("Location: ../index.php");
?>