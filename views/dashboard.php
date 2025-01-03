<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

echo "Bienvenido " . $_SESSION['user']['username'] . "<br>";

?>

<a href="../controllers/AuthController.php?action=logout">Cerrar sesión</a>
