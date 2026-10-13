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
        <a href="index.html">regresar al portafolio</a>
        <a href="admin.php">regresar a administración</a>
    </nav>

    <main>
        <section>
            <form method="post">
                <div class="campo">
                    <label>nombre:</label>
                    <input type="text" name="nombre" value="juan pérez" required>
                </div>

                <div class="campo">
                    <label>correo:</label>
                    <input type="email" name="correo" value="juan@gmail.com" required>
                </div>

                <div class="campo">
                    <label>mensaje:</label>
                    <textarea name="mensaje" required>¡hola! me gustó mucho tu portafolio, quiero contactarte.</textarea>
                </div>

                <button type="submit" name="guardar">guardar cambios</button>
            </form>
        </section>
    </main>

    <footer>
        <p>2026 mi portafolio web</p>
    </footer>

</body>
</html>