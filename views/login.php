<?php
include '../include/header.php';
?>


<form action="../controllers/AuthController.php?action=login" method="post">
    <label for="username">Nombre de usuario:</label>
    <input type="text" name="username" id="username" required value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>">
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>">
    <label>
        <input type="checkbox" name="remember_me" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>> Recordarme
    </label>
    <button type="submit">Iniciar sesión</button>
</form>
<a href="register.php">Registrarse</a>