<?php

class Validate{
    
    static function validateInput() {
        $errors_list = array();

        // Email should be email format
        if ((strlen($_POST["emailInput"]) == 0) || !filter_input(INPUT_POST, 'emailInput', FILTER_VALIDATE_EMAIL))
            array_push($errors_list, "Please enter a valid email address.");

        // password should be 8 character long
        if (strlen($_POST['passwordInput']) != 8)
            array_push($errors_list, "Please enter a valid 8 character long password.");

        // password inputs should match
        if ((strlen($_POST['confirmInput']) == 8) && strcmp($_POST['passwordInput'], $_POST['confirmInput']) != 0)
            array_push($errors_list, "Passwords do not match.");
 
        // name should not include special characters or numbers
        if ((strlen($_POST["nameInput"]) == 0) || preg_match("/;:,&<>^[0-9][a-zA-Z ]*$/", $_POST["nameInput"]))
            array_push($errors_list, "Please enter a valid name.");

        // phone should be a 10-digit string
        if ((strlen($_POST["phoneInput"]) != 10) || !is_numeric($_POST["phoneInput"]))
            array_push($errors_list, "Please enter a valid 10-digit phone number.");
    
        // address should not have special characters
        if ($_POST["addressInput"] == 0 || preg_match("/;:<>^[a-zA-Z ]*$/", $_POST["addressInput"]))
            array_push($errors_list, "Please enter a valid address.");

        // city should not include special characters or numbers
        if ((strlen($_POST["cityInput"]) == 0) || preg_match("/;:,&<>^[0-9][a-zA-Z ]*$/", $_POST["cityInput"]))
            array_push($errors_list, "Please enter a valid city.");

        // country should not include special characters or numbers
        if ((strlen($_POST["countryInput"]) == 0) || preg_match("/;:,&<>^[0-9][a-zA-Z ]*$/", $_POST["countryInput"]))
            array_push($errors_list, "Please enter a valid country.");

        // postal code should not include special characters
        if ((strlen($_POST["postalCodeInput"]) == 0) || preg_match("/;:,&<>^[a-zA-Z ]*$/", $_POST["postalCodeInput"]))
            array_push($errors_list, "Please enter a valid postal code.");

        return $errors_list;

    }

    


}

?>