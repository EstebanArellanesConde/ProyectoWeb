<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    // Capturar las variables enviadas por POST o GET
    $usuario = $_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];
}

include("db_conexion_local.php");
#include("db_conexion_remota.php");

$sql = "INSERT INTO administradores (usuario, clave) VALUES ('$usuario', '$clave')";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: administradores.php");
?>