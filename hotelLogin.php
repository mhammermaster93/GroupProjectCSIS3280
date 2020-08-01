<?php

// require include files
require_once("inc/config.inc.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Entity/Page.class.php");

require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/UserDAO.class.php");

// Check if the form was posted
if (!empty($_POST['emailInput'])) {

    // Initialize DAO
    UserDAO::init();

    // Get current user data
    $user = UserDAO::getUser(trim($_POST['emailInput']));

    // Check DAO for an object of User type
    if (!empty($user) && is_a($user, 'User')) {

        // Verify password
        if ($user->verifyPassword(trim($_POST['passwordInput']))) {

            // Start session
            session_start();

            // Set user to logged in
            $_SESSION['logged_in'] = $user->getEmail();

            // Forward to user page
            header("Location: Booking.html");

        }

    }
}

// display page elements
Page::header();
Page::displayLogin();
Page::footer();

?>