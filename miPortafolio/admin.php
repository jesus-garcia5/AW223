<?php
require_once "conexion.php";

if (isset($_GET["borrar"])) {

    $id = (int) $_GET["borrar"];

    $sql = "delete from mensajes where id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("location: admin.php?eliminado=exito");
        exit;
    } else {
        header("location: admin.php?eliminado=error");
        exit;
    }
}
?>
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
                                <a href="editar.php?id=<?php echo $arrMensaje['id']; ?>">✏️</a>
                                <a href="admin.php?borrar=<?php echo $arrMensaje['id']; ?>"
                                   onclick="return confirm('¿seguro que quieres eliminar este mensaje?')">🚮</a>
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
    <script>
    const parametros = new URLSearchParams(window.location.search);

    if (parametros.get("eliminado") === "exito") {
        alert("el mensaje se eliminó correctamente");
    }

    if (parametros.get("eliminado") === "error") {
        alert("no se pudo eliminar el mensaje");
    }

    if (parametros.has("eliminado")) {
        window.history.replaceState(
            {},
            document.title,
            window.location.pathname
        );
    }
</script>

</body>
</html>
