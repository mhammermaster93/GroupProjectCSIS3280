<?php

// This is the class extension for room
class Standard extends Room{
    
    //properties  
    private $type="Standard";
    private $pricePerNight;

    //getter
    public function getPricePerNight($dayOfWeek){
       if($dayOfWeek=='Fri' || $dayOfWeek=='Sat' || $dayOfWeek=='Sun' ){
        return $pricePerNight=85;
       }
       else return $pricePerNight=70;
    }

    //setter
    function setPricePerNight($price){
        $this->pricePerNight=$price;
    }

}


?>