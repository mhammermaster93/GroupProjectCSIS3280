<?php

// This is the class extension for room
class Delux extends Room{
    
    //properties  
    private $type="Standard";
    private $pricePerNight;

    //getter
    public function getPricePerNight($dayOfWeek){
       if($dayOfWeek=='Fri' || $dayOfWeek=='Sat' || $dayOfWeek=='Sun' ){
        return $pricePerNight=130;
       }
       else  return $pricePerNight=100;
    }

    //setter
    function setPricePerNight($price){
        $this->pricePerNight=$price;
    }

}


?>