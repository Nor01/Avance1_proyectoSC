<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seguridaddb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$nombre_task=trim($_POST['nombre_task']);
$encargado_task =trim($_POST['encargado_task']);
$costo_task =trim($_POST['costo_task']);
$acciones_task =trim($_POST['acciones_task']);
$tiempos_task =trim($_POST['tiempos_task']);
$frecuencia_task =trim($_POST['frecuencia_task']);
$impacto_task =trim($_POST['impacto_task']);
$acciones_inmediatas_task =trim($_POST['acciones_inmediatas_task']);
$descripcion_task=trim($_POST['descripcion_task']);

    $sql = "INSERT INTO create_task (nombre_task, encargado_task, costo_task, acciones_task, tiempos_task, frecuencia_task, impacto_task, acciones_inmediatas_task, descripcion_task)
    VALUES ('$nombre_task', '$encargado_task', '$costo_task', '$acciones_task', '$tiempos_task', '$frecuencia_task', '$impacto_task','$acciones_inmediatas_task','$descripcion_task')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('Amenaza agregada exitosamente'); window.location.href='../../crear-riesgo.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?> 