
<?php

class User{

//properties
private $email;
private $password;
private $userType;
private $full_name;
private $address;
private $postalCode;
private $city;
private $country;
private $phone;


//setters
function setEmail($email){
    $this->email=$email;
}
function setPassword($password){
    $this->password=$password;
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
function setCity($city){
    $this->city=$city;
}
function setCountry($country){
    $this->country=$country;
}
function setPhone($phone){
    $this->phone=$phone;
}

//getters
function getEmail(): string {
    return $this->email;
}
function getPassword(): string {
    return $this->password;
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
function getCity(): string {
    return $this->city;
}
function getCountry(): string {
    return $this->country;
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