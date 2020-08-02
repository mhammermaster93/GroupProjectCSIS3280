  
<?php

class Room{
   
     //properties  
     private $type;
     public $roomNr;
 
     //setter
     function setType($type){
         $this->type=$type;
     }
     //getter
     function getType() {
         return $this->type;
      }

}


?>