<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>control de gastos</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>

    <header>
        <h1>control de gastos</h1>
    </header>

    <h2>Agregar usuario</h2>

    <form action="guardarGasto.php" method="post">
        <label> concepto:</label>
        <input type="text" name="concepto" required>

        <br><br>

        <label>monto:</label>
        <input type="text" name="monto" required>

        <br><br>
        <label> categoria: </label>
        <input type="text" name="categoria" require>
        <br><br>

        <button type="submit">Guardar usuario</button>
    </form>

     <h2>Lista de gastos</h2>

    <table>
        <tr>
            <th>concepto</th>
            <th>monto</th>
            <th>categoria</th>
        </tr>

        <?php while ($usuario = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $concepto["consepto"]; ?></td>
            <td><?php echo htmlspecialchars($monto["monto"]); ?></td>
            <td><?php echo htmlspecialchars($categoria ["categoria"]); ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>