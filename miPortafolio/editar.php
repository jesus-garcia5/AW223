<?php
require_once "conexion.php";

if (!isset($_GET["id"])) {
    header("location: admin.php");
    exit;
}

$id = (int) $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $correo = trim($_POST["correo"]);
    $mensaje = trim($_POST["mensaje"]);

    if ($nombre == "" || $correo == "" || $mensaje == "") {
        $error = "todos los campos son obligatorios";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $error = "escribe un correo válido";
    } else {
        $sql = "update mensajes
                set nombre = ?, correo = ?, mensaje = ?
                where id = ?";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sssi", $nombre, $correo, $mensaje, $id);

        if ($stmt->execute()) {
            header("location: index.php?actualizado=exito");
            exit;
        } else {
            $error = "no se pudo actualizar el mensaje";
        }
    }
}

$sql = "select * from mensajes where id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$arrMensaje = $resultado->fetch_assoc();

if (!$arrMensaje) {
    header("location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>editar mensaje</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>
<body>

    <header>
        <h1>editar mensaje</h1>
    </header>

    <nav>
        <a href="index.php">🏠</a>
        <a href="admin.php">regresar a admin</a>
    </nav>

    <main>
        <section>

            <?php if (isset($error)) { ?>
                <p style="color: red;">
                    <?php echo htmlspecialchars($error); ?>
                </p>
            <?php } ?>

            <form method="post">

                <div class="campo">
                    <label>nombre:</label>
                    <input type="text" name="nombre"
                        value="<?php echo htmlspecialchars($arrMensaje['nombre']); ?>"
                        required>
                </div>

                <div class="campo">
                    <label>correo:</label>
                    <input type="email" name="correo"
                        value="<?php echo htmlspecialchars($arrMensaje['correo']); ?>"
                        required>
                </div>

                <div class="campo">
                    <label>mensaje:</label>
                    <textarea name="mensaje" required><?php
                        echo htmlspecialchars($arrMensaje['mensaje']);
                    ?></textarea>
                </div>

                <button type="submit" name="guardar">
                    actualizar
                </button>

            </form>
        </section>
    </main>

    <footer>
        <p>2026 mi portafolio web</p>
    </footer>

</body>
</html>