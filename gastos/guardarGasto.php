<?php
include "./conexion.php";

$concepto = $_POST["concepto"];
$monto = $_POST["monto"];
$categoria = $_POST["categoria"];

$sql = $conexion->prepare(
    "insert into gastos (concepto, monto, categoria) values (?, ?, ?)"
);

$sql->bind_param("sds", $concepto, $monto, $categoria);

if ($sql->execute()) {
    header("Location: index.php");
    exit;
} else {
    echo "Error al guardar el gasto";
}
?>