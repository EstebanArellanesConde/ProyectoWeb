<?php
// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];
    $tipo_usuario = $_POST["tipo_usuario"];

    // Aquí puedes realizar la autenticación del usuario
    // Por ejemplo, verificar si el usuario y la contraseña son válidos
    // y redirigirlo a la página correspondiente según el tipo de usuario

    // Ejemplo básico de autenticación (solo para demostración)
    if ($username === "usuario" && $password === "contraseña") {
        // Autenticación exitosa, redireccionar a la página correspondiente
        if ($tipo_usuario === "administrador") {
            header("Location: administrador.php");
            exit;
        } elseif ($tipo_usuario === "profesor") {
            header("Location: profesor.php");
            exit;
        } elseif ($tipo_usuario === "alumno") {
            header("Location: alumno.php");
            exit;
        }
    } else {
        // Autenticación fallida, redireccionar al formulario de inicio de sesión con un mensaje de error
        header("Location: login.php?error=1");
        exit;
    }
}
?>
