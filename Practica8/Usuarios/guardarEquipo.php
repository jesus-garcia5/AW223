<?php
include "../conexion.php";

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$sql = $conexion->prepare(
    "insert into equipos (nombre, descripcion) values (?, ?)"
);

$sql->bind_param("ss", $nombre, $descripcion);

if ($sql->execute()) {
    header("Location: TablaEquipos.php");
    exit;
} else {
    echo "Error al guardar el equipo";
}
?>
