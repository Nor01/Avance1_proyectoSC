<?php
$link = mysqli_connect('localhost', 'root', ''); mysqli_select_db($link, 'seguridaddb');
if($link === false){die("ERROR: No se pudo establecer la conexión." . mysqli_connect_error());}
?>