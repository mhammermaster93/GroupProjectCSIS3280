<?php

class RoomDAO {

//Static DB member to store the database    
private static $db;

//Initialize the RoomDAO    
static function initialize()    {
    self::$db=new PDOService('Room');
}







}


?>