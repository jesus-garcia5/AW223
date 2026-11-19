<?php
include "./conexion.php";

$concepto = $_POST["concepto"];
$monto = $_POST["monto"];
$cotegoria = $_POST["categoria"];

$sql = $conexion->prepare(
    "insert into gastos (concepto, monto, categoria) values (?, ?)"
);

$sql->bind_param("ss", $concepto, $categoria, $monto);

if ($sql->execute()) {
    header("Location: index.php");
    exit;
} else {
    echo "Error al guardar el gasto";
}
?>