<?php
//Incluyo la clase Foreach
require '../classes/ForEachExample.php';
//Encabezado
include '../include/header.php';
?>
<h2> Ejemplo Foreach: Lista de Elementos</h2>
<p>Introduce una lista de elementos separados por comas:</p>
<form action="foreach.php" method="post">
    <label for="list">Lista:</label>
    <input type="text" name=list id="list" required>
    <button type="submit">Enviar</button>
</form>
<br>
<br>
<?php
//Si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Obtengo la lista de elementos introducida
    $list = $_POST["list"];
    //Instancio la clase ForeachExample
    $foreachExample = new ForEachExample();
    //Obtengo la lista de elementos
    $elements = $foreachExample->convertToList($list);
    echo "<h3>Los elementos de la lista son:</h3>";
    echo "<ul>";
    foreach ($elements as $element) {
        echo "<li>$element</li>";
    }
    echo "</ul>";
}
//Incluyo el pie de página
include '../include/footer.php';
?>
<a href="../index.php">Volver al inicio</a>
