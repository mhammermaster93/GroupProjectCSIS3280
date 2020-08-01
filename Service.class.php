<?php

class Service {

//properties
private $type;
private $serviceNr;
private $price;

//setters
function setType($type){
    $this->type=$type;
}
function setServiceNr($serviceNr){
    $this->serviceNr=$serviceNr;
}
function setPrice($price){
    $this->price=$price;
}

//getters
function getType(): string{
    return $this->type;
}
function getRoomNr(): int {
    return $this->serviceNr;
}
function getPrice(): float {
    return $this->price;
}



}


?>