<?php

class ReservationDAO {
    //Static DB member to store the database    
    private static $db;
      
    static function init() {
        self::$db=new PDOService('Reservation');
    }

    static function createReservation(Reservation $newReservation)  {
        
        $sqlInsert = "INSERT INTO Reservation ( email, roomType, roomNr, startDate, endDate, paymentDate)
                      VALUES ( :email, :roomType, :roomNr, :startDate, :endDate, :paymentDate)";
         
         self::$db->query($sqlInsert);
        
        self::$db->bind (':email', $newReservation->getEmail());
        self::$db->bind (':roomType', $newReservation->getRoomType());
        self::$db->bind (':roomNr', $newReservation->getRoomNr());
        self::$db->bind (':startDate', $newReservation->getStartDate());
        self::$db->bind (':endDate', $newReservation->getEndDate());
        self::$db->bind (':paymentDate', $newReservation->getPaymentDate());

        self::$db->execute();
        return self::$db->lastInsertedId();
    }

    static function getReservation ($reservationNr)  {
       
        $selectOne="SELECT * FROM reservation
                    WHERE reservationNr = :reservationNr";

        self::$db->query($selectOne);
        self::$db->bind(':reservationNr', $reservationNr);
        self::$db->execute();
        return self::$db->singleResult();
    }
    //get all reservations
    static function getReservations($userId) {
        $selectAll="SELECT * FROM Reservation WHERE userId = :userid;";
        self::$db->query($selectAll);
        self::$db->bind(':userid', $userId);
        //execute the query
        self::$db->execute();
        //Return results
        return self::$db->getResultSet();
    }
    //update reservation
    static function updateReservation (Reservation $ReservationToUpdate) {
       
        $sqlUpdate="UPDATE Reservation
                    SET roomType=:roomType, roomNr=:roomNr, startDate=:startDate, endDate=:endDate
                    WHERE reservationNr = :reservationNr";
    try{
        self::$db->query($sqlUpdate);
        
        self::$db->bind(':roomType', $_POST['roomType']);
        self::$db->bind(':roomNr', $_POST['roomNr']);
        self::$db->bind (':startDate', $_POST['startDate']);
        self::$db->bind (':endDate', $_POST['endDate']);
        self::$db->bind (':reservationNr', $ReservationToUpdate->getReservationNr());
      
        self::$db->execute();
        
        if(self::$db->rowCount() != 1) {
            throw new Exception("Problem in updating the reservation");
        } 
    }
    catch (Exception $e){
        echo $e->getMessage();
    }
     // Return the rowCount
    return self::$db->rowCount();
    }

    static function deleteReservation($reservationNr)  {
        $sqlDelete = "DELETE FROM Reservation WHERE reservationNr=:reservationNr;";
        try{
            self::$db->query($sqlDelete);
            self::$db->bind (':reservationNr', $reservationNr);
            self::$db->execute();
            if(self::$db->rowCount() != 1) {
                throw new Exception("Problem in deleting the reservation $reservationNr ");
            }
        }
        catch (Exception $e){
            echo $e->getMessage();
            return false;
        }
        return true;
    }
    //get reservation list for displaying
    static function getReservationList()  {  
        $sqlJoin= "SELECT User.email, full_name, phone, roomType, roomNr, startDate, endDate, paymentDate
                   FROM User JOIN Reservation
                   ON User.email=Reservation.email
                   ORDER BY startDate;";

        self::$db->query($sqlJoin);
        self::$db->execute();
       
        return self::$db->resultSet(); 
    }
}

?>

