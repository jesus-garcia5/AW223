<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>administrar mensajes</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>
<body>

    <header>
        <h1>administrar mensajes</h1>
    </header>

    <nav>
        <a href="index.php">🏠</a>
    </nav>

    <main>
        <section>
            <table border="1">
                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>correo</th>
                        <th>mensaje</th>
                        <th>fecha</th>
                        <th>opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    require 'consulta_mensajes.php';

                    $rsMensajes = consultaMensajes();

                    while ($arrMensaje = mysqli_fetch_assoc($rsMensajes)) {
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($arrMensaje['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($arrMensaje['correo']); ?></td>
                            <td><?php echo htmlspecialchars($arrMensaje['mensaje']); ?></td>
                            <td><?php echo htmlspecialchars($arrMensaje['timeStaps'] ?? ''); ?></td>
                            <td>
                                <a href="editar.php">✏️</a>
                                <a href="#">🚮</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>2026 mi portafolio web</p>
    </footer>

</body>
</html>
