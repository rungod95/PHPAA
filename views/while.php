<?php
//Incluyo la clase DigitCounter
require '../classes/DigitCounter.php';
//Incluyo el encabezado
include '../include/header.php';
?>
<h2>Ejemplo While: Contador de Dígitos</h2>
<p>Introduce un número para contar sus dígitos:</p>
<form action="while.php" method="post">
    <label for="number">Número:</label>
    <input type="number" name="number" id="number" required>
    <button type="submit">Enviar</button>
</form>
<br>
<br>
<?php
//Si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Obtengo el número introducido
    $number = $_POST["number"];

    //Instancio la clase DigitCounter
    $digitCounter = new DigitCounter();

    //Obtengo la cantidad de dígitos
    $count = $digitCounter->countDigits($number);
    echo "<p>El número $number tiene <strong>$count</strong> dígitos.</p>";
}
//Incluyo el pie de página
include '../include/footer.php';
?>
<a href="../index.php">Volver al inicio</a>

