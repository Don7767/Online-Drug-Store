<?php

class User{
    private $conn;
    private $tableName = 'user';

    public function __construct($db){
        $this->conn = $db;
    }

    public function register($fullname, $email, $password, $birthday, $gender):bool{
        $query = "INSERT INTO {$this->tableName} (FullName, Email, Password, Birthday, Gender) VALUES(:fullname, :email, :password, :birthday, :gender)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', password_hash(password: $password, algo: PASSWORD_DEFAULT));
        $stmt->bindParam(':birthday', $birthday);
        $stmt->bindParam(':gender', $gender);

        if($stmt->execute()){
            return true;
        }return false;
    }

    public function login($email, $password):bool{
        $query = "SELECT userID, FullName, Email, Password, Birthday, Gender, Role FROM {$this->tableName} WHERE Email = :email";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify(password: $password, hash: $row['Password'])){
                $_SESSION['user_ID'] = $row['userID'];
                $_SESSION['email'] = $row['Email'];
                $_SESSION['fullname'] = $row['FullName'];
                $_SESSION['role'] = $row['Role'];
                return true;
            }
        }return false;
    }
}

?>