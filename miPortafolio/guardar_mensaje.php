<?php

    require_once("conexion.php");

$nombre= $_post["txtnombre"];
$correo= $_post["txtemail"];
$mensaje= $_post["txtmensaje"];

$splInsert="INSERT INTO mensajes(nombre, correo, mensaje) VALUES(?,?,?)";


$stmt=$conexion->prepare($splInsert);

$stmt->bind_peram("sss", $nombre, $correo, $mensaje);

if($stmt->execute()){
    echo "Conexion exitosa"
}else{
    echo "Error"
}