<?php

class ReservationDAO {
    //Static DB member to store the database    
    private static $db;
      
    static function init() {
        self::$db=new PDOService('Reservation');
    }

    static function createReservation(Reservation $newReservation)  {
        
        $sqlInsert = "INSERT INTO Reservation ( id, roomNr, startDate, endDate, paymentDate)
                      VALUES ( :id, :roomNr, :startDate, :endDate, :paymentDate)";
         
         self::$db->query($sqlInsert);
    
        self::$db->bind (':id', $newReservation->getId());
        self::$db->bind (':fullName', $newReservation->getRoomNr());
        self::$db->bind (':email', $newReservation->getStartDate());
        self::$db->bind (':numberOfTerms', $newReservation->getEndDate());
        self::$db->bind (':dob', $newReservation->getPaymentDate());

        self::$db->execute();
        return self::$db->lastInsertedId();
    }

    static function getReservations() {
        
        $selectAll="SELECT * FROM Reservation;";
        self::$db->query($selectAll);
        //execute the query
        self::$db->execute();
        //Return results
        return self::$db->getResultSet();
    }

}

?>