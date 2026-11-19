<?php
include "../conexion.php";

// RECIBIR EL ID
$id = $_GET["id"];

// CONSULTAR EL EQUIPO
$sql = $conexion->prepare(
    "SELECT * FROM equipos WHERE id_equipo = ?"
);

$sql->bind_param("i", $id);
$sql->execute();

$resultado = $sql->get_result();
$equipo = $resultado->fetch_assoc();

$sql->close();

// ACTUALIZAR EQUIPO
if (isset($_POST["actualizar"])) {

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    $sql = $conexion->prepare(
        "UPDATE equipos
         SET nombre = ?, descripcion = ?
         WHERE id_equipo = ?"
    );

    $sql->bind_param("ssi", $nombre, $descripcion, $id);

    if ($sql->execute()) {
        header("Location: TablaEquipos.php");
        exit();
    }

    $sql->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar equipo</title>
</head>
<body>

<h2>Editar equipo</h2>

<form method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre"
        value="<?php echo htmlspecialchars($equipo['nombre']); ?>"
        required>

    <br><br>

    <label>Descripción:</label>
    <input type="text" name="descripcion"
        value="<?php echo htmlspecialchars($equipo['descripcion']); ?>"
        required>

    <br><br>

    <button type="submit" name="actualizar">
        Actualizar equipo
    </button>

    <a href="TablaEquipos.php">Cancelar</a>

</form>

</body>
</html>
