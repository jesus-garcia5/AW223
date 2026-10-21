<?php

function consultaMensajes() {
    require_once "conexion.php";

    global $conexion;

    $selectMsj = "SELECT * FROM mensajes";

    $rsMsj = mysqli_query($conexion, $selectMsj);

    if (!$rsMsj) {
        die("error al consultar los mensajes: " . mysqli_error($conexion));
    }

    return $rsMsj;
}

?>
