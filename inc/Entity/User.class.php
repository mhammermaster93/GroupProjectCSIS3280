<?php

class User {
    // Properties (userId, password, userType, name, address, postalCode, city, country, dob, email, phone)
    private $userId = 1;
    private $password = "";
    private $userType = "";
    private $name = "";
    private $address = "";
    private $postalCode = "";
    private $city = "";
    private $country = "";
    private $dob = "";
    private $email = "";
    private $phone = "";

    // Setters
    function setUserId(int $id) {
        $this->userId = $id;
    }

    function setPassword(string $password) {
        $this->password = $password;
    }

    function setUserType(string $utype) {
        $this->userType = $utype;
    }

    function setName(string $name) {
        $this->name = $name;
    }

    function setAddress(string $address) {
        $this->address = $address;
    }

    function setPostalCode(string $pcode) {
        $this->postalCode = $pcode;
    }

    function setCity(string $city) {
        $this->city = $city;
    }

    function setCountry(string $country) {
        $this->country = $country;
    }

    function setEmail(string $email) {
        $this->email = $email;
    }

    function setPhone(string $phone) {
        $this->phone = $phone;
    }

    // Getters
    function getUserId() : int {
        return $this->userId;
    }

    function getPassword() : string {
        return $this->password;
    }

    function getUserType() : string {
        return $this->userType;
    }

    function getName() : string {
        return $this->name;
    }

    function getAddress() : string {
        return $this->address;
    }

    function getPostalCode() : string {
        return $this->postalCode;
    }

    function getCity() : string {
        return $this->city;
    }

    function getCountry() : string {
        return $this->country;
    }

    function getEmail() : string {
        return $this->email;
    }

    function getPhone() : string {
        return $this->phone;
    }

    // Password verification
    function verifyPassword(string $pass) {
        return password_verify($pass, $this->password);
    }

}

?>