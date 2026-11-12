<?php

include "../conexion.php";

// RECIBIR EL ID DEL EQUIPO
if (isset($_POST["eliminar"])) {

    $id = $_POST["id_equipo"];

    // ELIMINAR EQUIPO
    $sql = $conexion->prepare(
        "DELETE FROM equipos WHERE id_equipo = ?"
    );

    $sql->bind_param("i", $id);

    if ($sql->execute()) {

        header("Location: TablaEquipos.php");
        exit();

    }

    $sql->close();
}

?>
