<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user'])) {
    header('Location: views/login.php'); // Redirige al login si no está autenticado
    exit;
}

include 'include/header.php';
?>

<h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!</h2>
<p><a href="controllers/AuthController.php?action=logout">Cerrar sesión</a></p>

<h2>Selecciona un ejemplo</h2>
<ul>
    <li><a href="views/if.php">If/Else: Categoría de Edad</a></li>
    <li><a href="views/switch.php">Switch: Evaluación de Calificaciones</a></li>
    <li><a href="views/for.php">For: Pirámide de Asteriscos</a></li>
    <li><a href="views/while.php"> While: Contar Dígitos</a> </li>
    <li><a href="views/do-while.php">Ejemplo Do-While: Solicitar Número Positivo</a></li>
    <li><a href="views/break.php">Ejemplo Break: Primer Número Divisible por 7</a></li>
    <li><a href="views/continue.php">Ejemplo Continue: Números Impares</a></li>
    <li><a href="views/foreach.php">Ejemplo Foreach: Lista de Nombres</a></li>
</ul>

<?php include 'include/footer.php'; ?>
