 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $numero = $_POST["numero"];

        echo "<h1>Datos ingresados</h1>";
        echo "<p>Nombre: <strong>$nombre</strong></p>";
        echo "<p>Apellido: <strong>$apellido</strong></p>";
        echo "<p>Número: <strong>$numero</strong></p>";
    }
    ?>