<?php

    //this is an abstract class room

abstract class Room{
   
   public $roomNr;


    // abstract method that will be implemented in the child
    abstract public function getPricePerNight($noOfDays);




}


?>