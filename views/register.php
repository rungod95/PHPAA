<form action="../controllers/AuthController.php?action=register" method="post">
    <label for="username">Nombre de usuario:</label>
    <input type="text" name="username" id="username" required>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Registrarse</button>
</form>
<a href="login.php">Iniciar sesión</a>