<?php

// require include files
require_once("inc/config.inc.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Entity/Page.class.php");

require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/UserDAO.class.php");

// diplay header
Page::header();

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

            $_SESSION['user'] = $user;
            
            // Forward to user profile page
            header("Location: hotelUserProfile.php");

        }

    }
}
// display Login form
else {
    Page::displayLogin();
}

// display footer
Page::footer();

?>