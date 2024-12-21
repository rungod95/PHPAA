<?php

//Incluye la clase IncomeClassifier
require '../classes/IncomeClassifier.php';
//Encabezado
include '../include/header.php';

?>

<h2> Ejemplo If/Elseif/Else: Clasificación de Ingresos</h2>
<p>Introduce tu ingreso anual para saber a qué categoría perteneces:</p>
<form action="elseif.php" method="post">
    <label for="income">Ingreso anual:</label>
    <input type="number" step="0.01" name="income" id="income" min="0" required>
    <button type="submit">Enviar</button>
</form>
<br>
<br>
<?php
// Si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtengo el ingreso anual introducido
    $income = $_POST["income"];

    // Instancio la clase IncomeClassifier
    $incomeClassifier = new IncomeClassifier();

    // Obtengo la clasificación del ingreso
    $classification = $incomeClassifier->classifyIncome($income);
    echo "<p>Tu clasificación de ingreso es: <strong>$classification</strong></p>";
}
// Incluyo el pie de página
include '../include/footer.php';
?>
<a href="../index.php">Volver al inicio</a>

// <?php
