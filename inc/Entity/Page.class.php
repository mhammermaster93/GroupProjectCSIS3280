<?php

class Page {

    public static $title = "Hotel";

    static function header() {
?>

        <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        </head>
        <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><?php echo self::$title; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reservation</a>
                </li>
                </ul>
            </div>
        </nav>

<?php
    }

    static function footer() {
?>

    </body>
      <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container">
          <div class="row">
              <div class="col-6">
                  <ul>
                    <li><a href="#">Admin Login</a></li>
                    <li><a href="#">Create an Account</a></li>
                    <li><a href="#">Manager</a></li>
                  </ul>
              </div>
          </div>
          <div class="text-center">
              <small>Copyright &copy; Hotel Blank 2020</small>
          </div> 
        </div>
      </footer>

<?php
    }

    static function displayLogin() {
?>

        <div class="content">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="jumbotron" style="margin-top: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="container text-center">
                            <h1 class="display-4">Sign In</h1>
                            <hr class="my-4">
                            <p>Don't have an account? <a href="hotelRegistration.php">Create one here</a></p>
                            <form METHOD="POST">
                            <div class="form-group">
                                <input type="text" placeholder="Email" name="emailInput" required>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="passwordInput" required> 
                            </div>
                            <button type="submit" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    }

    static function displayRegistration() {
?>

        <div class="content">
            <div class="row"><!--Row 1-->
                <div class="col-6 offset-3">
                    <div class="jumbotron" style="margin-top: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="container text-center">
                            <h1 class="display-4">Create an Account</h1>
                            <hr class="my-4">
                            <p>Already have an account? <a href="hotelLogin.php">Login here</a> </p>
                            <form METHOD="POST">
                                <div class="form group">
                                    <label for="email">Email</label></br>
                                    <input type="text" placeholder="johndoe@email.com" name="emailInput" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label> </br>
                                    <input type="password" name="passwordInput" placeholder="***************" required> 
                                </div>
                                <div class="form group">
                                    <label for="confirmpassword">Confirm Password</label></br>
                                    <input type="password" name="confirmInput" placeholder="***************" required>
                                </div>
                                <div class="form group">
                                    <label for="name">Name</label></br>
                                    <input type="text" name="nameInput" placeholder="John Doe" required>
                                </div>
                                <div class="form group">
                                    <label for="phoneNumber">Phone Number</label></br>
                                    <input type="text" name="phoneInput" placeholder="321-123-1234" required>
                                </div>
                                <div class="form group">
                                    <label for="Address">Street Address</label></br>
                                    <input type="text" name="addressInput" placeholder="103 Fake St." required>
                                </div>
                                <div class="form group">
                                    <label for="City">City</label></br>
                                    <input type="text" name="cityInput" placeholder="Vancouver" required>
                                </div>
                                <div class="form group">
                                    <label for="Country">Country</label></br>
                                    <input type="text" name="countryInput" placeholder="Canada" required>
                                </div>
                                <div class="form group">
                                    <label for="Postal Code">Postal Code</label></br>
                                    <input type="text" name="postalCodeInput" placeholder="V5K 1M5" required>
                                </div> <br>
                                <button type="submit" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Submit</button>
                            </form>
                            
                            <!--we need to make the button POST-->
                            
                        </div> <!--End of column-->
                        <!--Start New Row here-->
                    </div> <!--end of Row1-->
                </div>
            </div>

<?php
    }

}

?>