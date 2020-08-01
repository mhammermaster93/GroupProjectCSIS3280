
<?php

class User{

//properties
private $id;
private $password;
private $userType;
private $full_name;
private $address;
private $postalCode;
private $email;
private $phone;

//setters
function setId($id){
    $this->id=$id;
}
function setUserType($userType){
    $this->userType=$userType;
}
function setFull_Name($full_name){
    $this->full_name=$full_name;
}
function setAddress($address){
    $this->address=$address;
}
function setPostalCode($postalCode){
    $this->postalCode=$postalCode;
}
function setEmail($email){
    $this->email=$email;
}
function setPhone($phone){
    $this->phone=$phone;
}

//getters
function getId(): int {
    return $this->id;
}
function getUserType(): string {
    return $this->userType;
}
function getFull_Name(): string {
    return $this->full_name;
}
function getAddress(): string {
    return $this->address;
}
function getPostalCode(): string {
    return $this->postalCode;
}
function getEmail(): string {
    return $this->email;
}
function getPhone(): string {
    return $this->phone;
}

// verify the password 
function verifyPassword(string $pass){
    return password_verify($pass, $this->password);
}







}



?>