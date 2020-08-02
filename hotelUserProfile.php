<?php

// require include files
require_once("inc/config.inc.php");
require_once("inc/Entity/Page.class.php");
require_once("inc/Entity/Reservation.class.php");
require_once("inc/Entity/Room.class.php");
require_once("inc/Entity/Service.class.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Entity/Subclasses/Deluxe.class.php");
require_once("inc/Entity/Subclasses/Standard.class.php");
require_once("inc/Entity/Subclasses/Suite.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/UserDAO.class.php");
require_once("inc/Utility/ReservationDAO.class.php");
require_once("inc/Utility/RoomDAO.class.php");
require_once("inc/Utility/ServiceDAO.class.php");
require_once("inc/Utility/LoginManager.class.php");

// keep session alive
session_start();

 //Verify login
 if(LoginManager::verifyLogin()){
    UserDAO::init();
    ReservationDAO::init();
    $user = UserDAO::getUser($_SESSION['logged_in']);

    Page::header();
    $userReservations= ReservationDAO::getReservations($user->getEmail());
    Page::displayUserDetails($user, $userReservations);
    Page::footer();
}
else
  header("Location: hotelLogin.php"); 

?>