<?php
include "../conexion.php";

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

$sql = $conexion->prepare(
    "insert into usuarios (nombre, correo) values (?, ?)"
);

$sql->bind_param("ss", $nombre, $correo);

if ($sql->execute()) {
    header("Location: TablaUsuarios.php");
    exit;
} else {
    echo "Error al guardar el usuario";
}
?>
