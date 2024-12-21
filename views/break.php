<?php
// Incluyo la clase BreakExample
require '../classes/BreakExample.php';
// Encabezado
include '../include/header.php';
?>
<h2> Ejemplo Break: Buscar el primer Número Divisible por 7</h2>
<p>Introduce un rango de números para encontrar el primer número divisible por 7:</p>
<form action="break.php" method="post">
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

    // Instancio la clase BreakExample
    $breakExample = new BreakExample();

    // Obtengo el primer número divisible por 7
    $number = $breakExample->findFirstDivisibleBySeven($start, $end);
    if ($number !== null) {
        echo "<p>El primer número divisible por 7 en el rango de $start a $end es: <strong>$number</strong></p>";
    } else {
        echo "<p>No se ha encontrado ningún número divisible por 7 en el rango de $start a $end.</p>";
    }
}
// Incluyo el pie de página
include '../include/footer.php';
?>
<a href="../index.php">Volver al inicio</a>
