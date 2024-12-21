<?php
// Incluyo la clase Impares
require '../classes/ImparesRango.php';
// Encabezado
include '../include/header.php';
?>
<h2> Ejemplo Continue: Números impares</h2>
<p>Introduce un rango de números para obtener los números impares:</p>
<form action="continue.php" method="post">
    <label for="start">Inicio:</label>
    <input type="number" name="start" id="start" required>
    <label for="end">Fin:</label>
    <input type="number" name="end" id="end" required>
    <button type="submit">Enviar</button>
</form>
<br>
<br>
<?php
// Si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtengo el rango de números introducido
    $start = $_POST["start"];
    $end = $_POST["end"];

    // Instancio la clase ImparesRango
    $imparesRango = new ImparesRango();
    $impares = $imparesRango->getImpares($start, $end);
    echo "<h3>Los números impares en el rango de $start a $end son:</h3>";
    echo "<ul>";
    foreach ($impares as $impar) {
        echo "<li>$impar</li>";
    }
    echo "</ul>";
}
// Incluyo el pie de página
include '../include/footer.php';
?>

