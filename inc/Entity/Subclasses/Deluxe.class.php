<?php

// This is the class extension for room
class Deluxe extends Room {
    
    //properties  
    private $type="Standard";
    private $pricePerNight;

    //getter
    public function getPricePerNight($noOfDays){
        if($noOfDays>3 && $noOfDays <= 7){
         return $pricePerNight=115;
        }
        if ($noOfDays>7){
         return $pricePerNight=100;
        }
        else return $pricePerNight=130;
     }

    //setter
    function setPricePerNight($price){
        $this->pricePerNight=$price;
    }

}


?>