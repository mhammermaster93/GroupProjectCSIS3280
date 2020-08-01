<?php

class UserDAO {

    // create PDO agent object
    private static $pdo;

    // create function to instantiate PDO agent
    static function init() {
        self::$pdo = new PDOService("User");
    }

    // function to create user
    static function createUser(User $user) {

        // query
        $sql = "INSERT INTO user (password, userType, name, address, postalCode, city, country, email, phone)
                VALUES (:password, :usertype, :name, :address, :postalcode, :city, :country, :email, :phone)";
        
        // bind
        self::$pdo->query($sql);
        self::$pdo->bind(":password", trim($user->getPassword()));
        self::$pdo->bind(":usertype", "customer");
        self::$pdo->bind(":name", trim($user->getName()));
        self::$pdo->bind(":address", trim($user->getAddress()));
        self::$pdo->bind(":postalcode", trim($user->getPostalCode()));
        self::$pdo->bind(":city", trim($user->getCity()));
        self::$pdo->bind(":country", trim($user->getCountry()));
        self::$pdo->bind(":email", strtolower(trim($user->getEmail())));
        self::$pdo->bind(":phone", trim($user->getPhone()));

        // execute
        self::$pdo->execute();

        // return row count
        return self::$pdo->rowCount();
    }

    // get user details
    static function getUser(string $email) {
        
        $sql = "SELECT * FROM user WHERE email = :email";
        self::$pdo->query($sql);
        self::$pdo->bind(":email", $email);
        self::$pdo->execute();
        return self::$pdo->singleResult();
    
    }

}

?>