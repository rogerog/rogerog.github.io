<!DOCTYPE html>
<html>
<head>
    <title>Información de Hoja de Vida</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $primer_nombre = $_POST["primer_nombre"];
        $segundo_nombre = $_POST["segundo_nombre"];
        $primer_apellido = $_POST["primer_apellido"];
        $segundo_apellido = $_POST["segundo_apellido"];
        $tipo_documento = $_POST["tipo_documento"];
        $telefono = $_POST["telefono"];
        $numero_pasaporte = $_POST["numero_pasaporte"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $sexo = $_POST["sexo"];
        $departamento = $_POST["departamento"];
        $ciudad = $_POST["ciudad"];
        $peso = $_POST["peso"];
        $estatura = $_POST["estatura"];
        $estado_civil = $_POST["estado_civil"];
        $direccion = $_POST["direccion"];
        $correo = $_POST["correo"];
        $estudios = $_POST["estudios"];

        echo "<h2>Información de Hoja de Vida:</h2>";
        echo "<p>Primer Nombre: " . $primer_nombre . "</p>";
        echo "<p>Segundo Nombre: " . $segundo_nombre . "</p>";
        echo "<p>Primer Apellido: " . $primer_apellido . "</p>";
        echo "<p>Segundo Apellido: " . $segundo_apellido . "</p>";
        echo "<p>Tipo de Documento: " . $tipo_documento . "</p>";
        echo "<p>Número de Teléfono: " . $telefono . "</p>";
        echo "<p>Número de Pasaporte: " . $numero_pasaporte . "</p>";
        echo "<p>Fecha de Nacimiento: " . $fecha_nacimiento . "</p>";
        echo "<p>Sexo: " . $sexo . "</p>";
        echo "<p>Departamento: " . $departamento . "</p>";
        echo "<p>Ciudad: " . $ciudad . "</p>";
        echo "<p>Peso: " . $peso . "</p>";
        echo "<p>Estatura: " . $estatura . "</p>";
        echo "<p>Estado Civil: " . $estado_civil . "</p>";
        echo "<p>Dirección de Residencia: " . $direccion . "</p>";
        echo "<p>Correo Electrónico: " . $correo . "</p>";
        echo "<p>Estudios Realizados: " . $estudios . "</p>";
    }
    ?>
</body>
</html>


