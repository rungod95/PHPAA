<?php
// Incluyo la clase AgeCategory
echo realpath('../classes/AgeCategory.php'); // Prueba la ruta absoluta
require '../classes/AgeCategory.php';

// Encabezado
include '../include/header.php';
?>
<h2>Ejemplo If/Else: Categoría de Edad</h2>
<p>Introduce tu edad para saber a qué categoría perteneces:</p>
<form action="if.php" method="post">
    <label for="age">Edad:</label>
    <input type="number" name="age" id="age" min="0" required>
    <button type="submit">Enviar</button>
</form>
<br>
<br>
<?php
// Si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtengo la edad introducida
    $age = $_POST["age"];

    // Instancio la clase AgeCategory
    $ageCategory = new AgeCategory();

    // Obtengo la categoría de edad
    $category = $ageCategory->getAgeCategory($age);
    echo "<p>Tu categoría de edad es: <strong>$category</strong></p>";


}

// Incluyo el pie de página
include '../include/footer.php';
?>
<a href="../index.php">Volver al inicio</a>
