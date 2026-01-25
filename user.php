<?php

class User{
    private $conn;
    private $tableName = 'user';

    public function __cconstruct($db){
        $this->conn = $db;
    }

    public function register($fullname, $email, $password, $birthday, $gender):bool{
        $quey = "INSERT INTO {$this->tableName} (fullname, email, password, birthday, gender) VALUES(:fullname, :email, :password, :birthday, :gender)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':fullname', $fullname);
        $stmt->binfParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':birthday', $birthday);
        $stmt->bindParam(':gender', $gender);
    }
}

?>