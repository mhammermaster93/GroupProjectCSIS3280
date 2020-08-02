<?php
// require once all the file
require_once("inc/config.inc.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Entity/Reservation.class.php");
require_once("inc/Entity/Room.class.php");
require_once("inc/Entity/Service.class.php");
require_once("inc/Entity/User.class.php");

require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/ReservationDAO.class.php");
require_once("inc/Utility/RoomDAO.class.php");
require_once("inc/Utility/ServiceDAO.class.php");

// keep session alive
session_start();

//Check if the reservation was submited

if(isset($_POST['submit'])){
        // initialize the DAO
        ReservationDAO::init();
        RoomDAO::init();
        // instantiate a new avatar
        $nr = new Reservation();
        // assemble the reservation data 
        $nr->setRoomType($_POST["roomType"]);
         $nr->setEmail($_SESSION['logged_in']);
       //check avaiable rooms
        RoomDAO::getAvaiableRooms($nr->getRoomType());
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