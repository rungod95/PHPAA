<?php
require_once 'config/Database.php';

$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "La conexión se realizó correctamente.";
} else {
    echo "Error al conectar.";
}
?>
