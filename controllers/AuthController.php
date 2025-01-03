<?php

require_once '../config/Database.php';
require_once '../models/User.php';

session_start();

$action = $_GET['action'] ?? '';

$database = new Database();
$db = $database->getConnection();
$userModel = new User($db);

if ($action === 'register') {
    try {
        $username = trim($_POST['username'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if (!empty($username) && !empty($password)) {
            $userModel->register($username, $password);
            echo "Usuario registrado correctamente. <a href='../views/login.php'>Iniciar sesión</a>";
        } else {
            echo "Por favor, completa todos los campos.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

if ($action === 'login') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!empty($username) && !empty($password)) {
        $user = $userModel->login($username, $password);
        if ($user) {
            $_SESSION['user'] = $user;

            // Establecer cookie si el usuario selecciona "Recordarme"
            if (isset($_POST['remember_me']) && $_POST['remember_me'] === 'on') {
                setcookie('username', $username, time() + (86400 * 30), "/"); // 30 días
                setcookie('password', $password, time() + (86400 * 30), "/"); // 30 días
            }

            header('Location: ../index.php');
            exit;
        } else {
            echo "Nombre de usuario o contraseña incorrectos.";
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}


if ($action === 'logout') {
    session_unset();
    session_destroy();

    // Eliminar cookies
    setcookie('username', '', time() - 3600, "/");
    setcookie('password', '', time() - 3600, "/");

    header('Location: ../views/login.php');
    exit;
}


?>
