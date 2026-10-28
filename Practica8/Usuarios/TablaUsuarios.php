<?php
include "../conexion.php";
$resultado = $conexion->query("select * from usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios registrados</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>

    <header>
        <h1>Soporte técnico</h1>
        <p>Usuarios registrados</p>
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

    <h2>Tabla de usuarios</h2>

    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
        </tr>

        <?php while ($usuario = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $usuario["id_usuario"]; ?></td>
            <td><?php echo htmlspecialchars($usuario["nombre"]); ?></td>
            <td><?php echo htmlspecialchars($usuario["correo"]); ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
