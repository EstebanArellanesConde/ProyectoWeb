<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    // Capturar las variables enviadas por POST o GET
    $usuario = $_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];
    $tipo_usuario = $_REQUEST["tipo_usuario"];
}

echo"entre a la pagina";
include("db_conexion_local.php");
#include("db_conexion_remota.php");

if ($tipo_usuario==1){
    $sql="SELECT id_admin FROM administradores where usuario='$usuario'  and clave='$clave'";
    //  echo $sql;
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $id_admin = $row['id_admin']; // Capturar el id_admin
        //echo "El Admin usuario existe. ID: $id_admin";
        header("Location: administradores/index.php?id_admin=$id_admin");
    } else {
        //echo "El Admin no existe.";
        header("Location: index.php?error=1");
    }

}


?>