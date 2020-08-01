<?php

    //this is an abstract class room

abstract class Room{
   
    //properties    
    protected $roomNr;

    // abstract method that will be implemented in the child
    abstract public function getPricePerNight(): float;

    //Setter
    function setRoomNr($roomNr){
        $this->roomNr=$roomNr;
    }

    //Getter
    function getRoomNr(): int {
        return $this->roomNr;
    }


}


?>