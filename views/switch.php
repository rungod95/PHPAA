<?php
// Incluyo la clase GradeEvaluator
require '../classes/GradeEvaluator.php';
// Encabezado
include '../include/header.php';
?>
<h2>Ejemplo Switch: Evaluación de Calificaciones</h2>
<p>Introduce tu calificación para saber tu evaluación (Utiliza números del 0 al 10):</p>
<form action="switch.php" method="post">
    <label for="grade">Calificación:</label>
    <input type="number" step="0.1" name="grade" id="grade" min="0" max="10" required>
    <button type="submit">Enviar</button>
</form>
<br>
<br>
<?php
// Si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtengo la calificación introducida
    $grade = $_POST["grade"];

    // Instancio la clase GradeEvaluator
    $gradeEvaluator = new GradeEvaluator();

    // Obtengo la evaluación de la calificación
    $evaluation = $gradeEvaluator->getEvaluation($grade);
    echo "<p>Tu evaluación es: <strong>$evaluation</strong></p>";
}
// Incluyo el pie de página
include '../include/footer.php';
?>
<a href="../index.php">Volver al inicio</a>

