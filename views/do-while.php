<?php
// Incluye el archivo de la clase PositiveNumberValidator
require '../classes/PositiveNumberValidator.php';

// Incluye el encabezado
include '../include/header.php';
?>
<h2>Ejemplo Do/While: Validación de Número Positivo</h2>
<p>Introduce un número para validar si es positivo. Si no es válido se seguirá solicitando:</p>
<form action="do-while.php" method="post">
    <label for="number">Número:</label>
    <input type="number" name="number" id="number" required>
    <button type="submit">Enviar</button>
</form>
<br>
<br>
<?php
// Si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    do {
        // Obtengo el número introducido
        $number = $_POST["number"];

        // Instancio la clase PositiveNumberValidator
        $validator = new PositiveNumberValidator();
        // Valido el número
        $isValid = $validator->validate($number);
        //Muestro el mensaje correspondiente
        echo "<h3>$isValid</h3>";
        // Si no es válido, vuelvo a solicitar el número
        if ($number <= 0) {
            echo "<p>El número $number no es válido. Introduce un número positivo.</p>";
            echo '<form action="do-while.php" method="post">
                    <label for="number">Número:</label>
                    <input type="number" name="number" id="number" required>
                    <button type="submit">Validar</button>
                  </form>';
            break;
           }
    } while ($number <= 0);
    }
    // Incluyo el pie de página
    include '../include/footer.php';
    ?>
<a href="../index.php">Volver al inicio</a>

}
