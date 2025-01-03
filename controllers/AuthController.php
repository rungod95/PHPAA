<?php

require_once '../config/Database.php';
require_once '../models/User.php';

session_start();

$action = $_GET['action'] ?? '';

$database = new Database();
$db = $database->getConnection();
$userModel = new User($db);

if ($action === 'register') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!empty($username) && !empty($password)) {
        if ($userModel->register($username, $password)) {
            echo "Usuario registrado correctamente. <a href='../views/login.php'>Iniciar sesión</a>";
        } else {
            echo "Error al registrar el usuario. Es posible que el nombre de usuario ya exista.";
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

if ($action === 'login') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!empty($username) && !empty($password)) {
        $user = $userModel->login($username, $password);
        if ($user) {
            $_SESSION['user'] = $user;
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
    header('Location: ../views/login.php');
    exit;
}

?>
