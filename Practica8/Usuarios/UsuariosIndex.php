<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar usuario</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>

    <header>
        <h1>Soporte técnico</h1>
        <p>Registro de usuarios</p>
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

    <h2>Agregar usuario</h2>

    <form action="guardarUsuario.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Correo:</label>
        <input type="email" name="correo" required>

        <br><br>

        <button type="submit">Guardar usuario</button>
    </form>

</body>
</html>
