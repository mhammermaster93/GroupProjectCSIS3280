<?php

// require include files
require_once("inc/config.inc.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Entity/Page.class.php");

require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/UserDAO.class.php");
require_once("inc/Utility/Validate.class.php");

// display header
Page::header();

// define errors array
$errors = array();

// Check if the form was posted
if (!empty($_POST['emailInput'])) {
    
    // validate form entries
    $errors = Validate::validateInput();
    if (empty($errors)) {
        
        // initialize DAO
        UserDAO::init();

        // instantiate a new user
        $user = new User();

        // assemble user data
        $user->setPassword(password_hash($_POST['passwordInput'], PASSWORD_DEFAULT));
        $user->setName($_POST['nameInput']);
        $user->setAddress($_POST['addressInput']);
        $user->setPostalCode($_POST['postalCodeInput']);
        $user->setCity($_POST['cityInput']);
        $user->setCountry($_POST['countryInput']);
        $user->setEmail($_POST['emailInput']);
        $user->setPhone($_POST['phoneInput']);

        // create user
        UserDAO::createUser($user);

        // send the user to login page
        header("Location: hotelLogin.php");

    }
    else {
        // display error message(s)
        for ($i = 0; $i < count($errors); $i++)
            echo "<p style='color: white; text-align:center'>{$errors[$i]}</p>";
    }

}

// display registration form
Page::displayRegistration();

// display footer
Page::footer();

?>