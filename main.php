<?php
// require once all the file
require_once("inc/config.inc.php");
require_once("inc/Entities/Page.class.php");
require_once("inc/Entities/Reservation.class.php");
require_once("inc/Entities/Room.class.php");
require_once("inc/Entities/Service.class.php");
require_once("inc/Entities/User.class.php");
require_once("inc/Entities/Subclasses/Deluxe.class.php");
require_once("inc/Entities/Subclasses/Standard.class.php");
require_once("inc/Entities/Subclasses/Suite.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/ReservationDAO.class.php");
require_once("inc/Utility/RoomDAO.class.php");
require_once("inc/Utility/ServiceDAO.class.php");

//Check if the reservation was submited

if(isset($_POST['submit'])){
        // initialize the DAO
        ReservationDAO::initialize();
        // instantiate a new avatar
        $nr = new Reservation();
        // assemble the reservation data 
        $nr->setRoomType($_POST["roomType"]);
         $nr->setEmail("test");
       //check avaiable rooms
        $rooms=getAvaiableRooms($nr->getRoomType());
        $chosenRoom=array_rand($rooms);
        $nr->setRoomNr($rooms[$choseRoom]);
        $nr->setStartDate($_POST["startDate"]);
        $nr->setEndDate($_POST["endDate"]);
        $nr->setPaymentDate(date("Y-m-d"));
        $nr->setTotalPrice($nr->calculateTotalPrice());
        // create the reservation
        ReservationDAO::createReservation($nr);
        // send the user to the login page



    }



Page::header();
Page::showReservationPage();
Page::footer();

?>