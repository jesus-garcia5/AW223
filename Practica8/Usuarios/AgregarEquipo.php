<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar equipo</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>

    <header>
        <h1>Soporte técnico</h1>
        <p>Registro de equipos</p>
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

    <h2>Agregar equipo</h2>

    <form action="guardarEquipo.php" method="post">
        <label>Nombre del equipo:</label>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea>

        <br><br>

        <button type="submit">Guardar equipo</button>
    </form>

</body>
</html>
