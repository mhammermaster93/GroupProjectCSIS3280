<?php

// This is the class extension for room
class Suite extends Room {
    
    //properties  
    private $type="Suite";
    private $pricePerNight;

    //getter
    public function getPricePerNight($noOfDays){
       if($noOfDays>3 && $noOfDays <= 7){
        return $pricePerNight=105;
       }
       if ($noOfDays>7){
        return $pricePerNight=90;
       }
       else return $pricePerNight=120;
    }

    //setter
    function setPricePerNight($price){
        $this->pricePerNight=$price;
    }

}


?>