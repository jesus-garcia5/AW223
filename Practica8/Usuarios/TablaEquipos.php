<?php
include "../conexion.php";
$resultado = $conexion->query("select * from equipos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Equipos registrados</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>

    <header>
        <h1>Soporte técnico</h1>
        <p>Equipos registrados</p>
    </header>

    <nav class="menu">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="UsuariosIndex.php">Agregar usuario</a></li>
            <li><a href="TablaUsuarios.php">Ver usuarios</a></li>
            <li><a href="AgregarEquipo.php">Agregar equipo</a></li>
            <li><a href="TablaEquipos.php">Ver equipos</a></li>
        </ul>
    </nav>

    <h2>Lista de equipos</h2>

    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>

        <?php while ($equipo = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $equipo["id_equipo"]; ?></td>
            <td><?php echo htmlspecialchars($equipo["nombre"]); ?></td>
            <td><?php echo htmlspecialchars($equipo["descripcion"]); ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
