<?php
class Signup {
    private $name;
    private $email;
    private $password;
    private $user_type;
    private $connection;

    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->user_type = 'normal';
        $this->connection = new DBConnection();
    }

    public function checkEmailDatabase(){
        try {
            $sqlCheck = 'SELECT email FROM users WHERE email = :email';
            $queryCheck = $this->connection->getConnection()->prepare($sqlCheck);
            $queryCheck->bindParam(':email', $this->email);
            $queryCheck->execute();
            $user = $queryCheck->fetch();

            if ($user && $user['email'] == $this->email) {
                return "User already exists";
            }

            return false;
        } catch (PDOException $e) {
            return "Error checking email: " . $e->getMessage();
        }
    }

    public function doSignup(){
        try {
            $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);

            $sql = 'INSERT INTO users (name, email, password, user_type) VALUES (:name, :email, :password, :user_type)';
            $query = $this->connection->getConnection()->prepare($sql);
            $query->bindParam(':name', $this->name);
            $query->bindParam(':email', $this->email);
            $query->bindParam(':password', $hashedPassword);
            $query->bindParam(':user_type', $this->user_type);

            if ($query->execute()) {
                return "Signup successful";
            } else {
                return "Signup failed";
            }
        } catch (PDOException $e) {
            return "Error during signup: " . $e->getMessage();
        }
    }
}


?>
