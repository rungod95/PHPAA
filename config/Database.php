<?php

class Database
{
    private $host = "localhost";
    private $db_name = "php_oop"; // Nombre de tu base de datos
    private $username = "javier"; // Usuario configurado
    private $password = "javier"; // Contraseña configurada
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=localhost;port=3307;dbname=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection successful!"; // Esto es solo para probar la conexión
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
