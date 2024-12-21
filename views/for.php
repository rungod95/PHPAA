<?php
//Incluyo el archivo de la clase PyramidGenerator
require '../classes/PyramidGenerator.php';
//Incluyo el encabezado
include '../include/header.php';
?>
<h2>Ejemplo For: Pirámide de Asteriscos</h2>
<p>Introduce el número de filas para generar una pirámide de asteriscos:</p>
<form action="for.php" method="post">
    <label for="rows">Número de filas:</label>
    <input type="number" name="rows" id="rows" min="1" required>
    <button type="submit">Enviar</button>
</form>
<br>
<br>
<?php
// Si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtengo el número de filas introducido
    $rows = $_POST["rows"];

    // Instancio la clase PyramidGenerator
    $pyramidGenerator = new PyramidGenerator();

    // Genero la pirámide
    $pyramid = $pyramidGenerator->generatePyramid($rows);

    // Verifico que sea un array antes de usar foreach
    if (is_array($pyramid)) {
        echo "<h3>Pirámide de $rows filas</h3>";
        echo "<pre>";
        foreach ($pyramid as $line) {
            echo "$line\n";
        }
        echo "</pre>";
    } else {
        echo "<p>Ocurrió un error al generar la pirámide.</p>";
    }
}
?>


<a href="../index.php">Volver al inicio</a>

