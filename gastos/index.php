<?php
include "./conexion.php";

$resultado = $conexion->query("SELECT * FROM gastos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de gastos</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>

    <header>
        <h1>Control de gastos</h1>
    </header>

    <h2>Agregar gasto</h2>

    <form action="guardarGasto.php" method="post">

        <label>Concepto:</label>
        <input type="text" name="concepto" required>

        <br><br>

        <label>Monto:</label>
        <input type="number" name="monto" step="0.01" min="0.01" required>

        <br><br>

        <label>Categoria:</label>
        <input type="text" name="categoria" required>

        <br><br>

        <button type="submit">Guardar gasto</button>

    </form>

    <h2>Lista de gastos</h2>

    <table>
        <tr>
            <th>Concepto</th>
            <th>Monto</th>
            <th>Categoria</th>
        </tr>

        <?php while ($usuario = $resultado->fetch_assoc()) { ?>

        <tr>
            <td><?php echo htmlspecialchars($usuario["concepto"]); ?></td>

            <td><?php echo htmlspecialchars($usuario["monto"]); ?></td>

            <td><?php echo htmlspecialchars($usuario["categoria"]); ?></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>