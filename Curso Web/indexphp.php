<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURSOS</title>
    <link rel="stylesheet" href="css/estilos_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 </head>


<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_REQUEST["error"])) {
        $error = $_REQUEST["error"];
        if ($error > 0) {
            $error_message = "<p>Error de validación de los datos del usuario<p>";
        }
    } else {
        $error_message = "";
        $error = 0;
    }
}
?>


    <div id="container">
        <div id="login">
            <div id="formularioValidacion">
                <h2>Iniciar Sesión</h2>
                    <form action="validar_login.php" method="POST">
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="text" id="usuario" name="usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="clave">Contraseña:</label>
                            <input type="clave" id="clave" name="clave" maxlength="8" required>
                        </div>
                        <div class="form-group">
                            <label for="tipo-usuario">Tipo de usuario:</label>
                            <select name="tipo_usuario" id="tipo_usuario">
                                <option value="1">Administrador</option>
                                <option value="2">Profesor</option>
                                <option value="3">Alumno</option>
                              </select>
                            
                        </div>
                        <?php
                            if ($error > 0) {
                                echo $error_message;
                            }
                        ?>
                        <button type="submit">Iniciar Sesión</button>
                    </form>
            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  


</body>
</html>