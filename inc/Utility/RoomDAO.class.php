<?php

class RoomDAO {

//Static DB member to store the database    
private static $db;

//Initialize the RoomDAO    
static function init()    {
    self::$db=new PDOService('Room');
}

static function getAvaiableRooms($roomType){
    $sqlSelect = "SELECT Room.roomNr FROM Room LEFT OUTER JOIN Reservation 
                  ON Room.roomNr=Reservation.roomNr HAVING roomType=:roomType;";
    
        self::$db->query($sqlSelect);
        self::$db->bind (':roomType', $roomType);
        self::$db->execute();
        return self::$db->resultSet(); 
}







}


?>