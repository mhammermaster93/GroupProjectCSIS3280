<?php

// This is the class extension for room
class Standard extends Room{
    
    //properties  
    private $type="Standard";
    private $pricePerNight;

    //getter
    public function getPricePerNight($noOfDays){
        if($noOfDays>3 && $noOfDays <= 7){
         return $pricePerNight=80;
        }
        if ($noOfDays>7){
         return $pricePerNight=65;
        }
        else return $pricePerNight=95;
     }

    //setter
    function setPricePerNight($price){
        $this->pricePerNight=$price;
    }

}


?>