<?php

// Please refer to the logout controller file in the demo
// require all the files
require_once("inc/config.inc.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Entity/Page.class.php");

require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/UserDAO.class.php");

// start session before destroying
session_start();

// unset session
unset($_SESSION);

// destroy session
session_destroy();

// forward to login page
header("Location: hotelLogin.php");

?>