<?php

class User
{
    private $conn;
    private $table_name = "users"; // Nombre de la tabla

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Método para registrar un nuevo usuario
    public function register($username, $password)
    {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO " . $this->table_name . " (username, password) VALUES (:username, :password)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $hashed_password);
        return $stmt->execute();
    }

    // Método para autenticar un usuario
    public function login($username, $password)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user["password"])) {
            return $user;
        }

        return false;
    }
}

?>
