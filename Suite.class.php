<?php

// This is the class extension for room
class Suite extends Room {
    
    //properties  
    private $type="Suite";
    private $pricePerNight;

    //getter
    public function getPricePerNight($dayOfWeek){
       if($dayOfWeek=='Fri' || $dayOfWeek=='Sat' || $dayOfWeek=='Sun' ){
        return $pricePerNight=105;
       }
       else  return $pricePerNight=90;
    }

    //setter
    function setPricePerNight($price){
        $this->pricePerNight=$price;
    }

}


?>