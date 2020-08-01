<?php
class Page  { 
    
      //header 
    static function header() {   ?>
       <!DOCTYPE HTML>
       <head>
        <meta name="author" content="Ewa, Melanie, Alisher">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      </head>
      <body>
      <!-- As a link -->
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Hotel Blank</a>
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
    <!--navbar ends here-->
    <?php }

    //footer
    static function footer(){ ?>
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
   </html>
   <?php
   }

static function showWelcomePage(){ ?>
<div class="content">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="jumbotron" style="margin-top: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="container text-center">
                    <h1 class="display-4">Welcome</h1>
                    <p class="lead">Welcome to Hotel Blank, please follow the prompts below</p>
                    <hr class="my-4">
                    <a href="sign-in.html"><button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Sign In</button></a>        
                    <a href="create-account.html"><button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Create Account</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } 

static function showSignInPage(){ ?>
<div class="content">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="jumbotron" style="margin-top: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="container text-center">
                        <h1 class="display-4">Sign In</h1>
                        <hr class="my-4">
                        <form>
                          <div class="form-group">
                            <label for="userID">User ID</label></br>
                            <input type="text" placeholder="Enter a user ID">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label> </br>
                            <input type="password"> 
                          </div>
                        </form>
                        <button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Login</button>
                        <a href="create-account.html"><button class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Create Account</button></a>
                    </div>
                </div>
            </div>
        </div>
      </div>
</body>
    
<?php }      
  
  static function showReservationPage(){ ?>
  <div class="content">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="jumbotron" style="margin-top: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="container text-center">
                    <h1 class="display-4">Reservation</h1>
                    <hr class="my-4">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                      <div class="form-group">
                          <label for="dateFrom">From</label>
                          <input name="startDate" type="date">
                          <label for="dateTo">To</label>
                          <input name="endDate" type="date">
                      </div>
                      <div class="form-group">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Room Type
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" name="roomType">
                              <a class="dropdown-item" name="standard" href="#">Standard</a>
                              <a class="dropdown-item" name="suite" href="#">Suite</a>
                              <a class="dropdown-item" name="deluxe "href="#">Deluxe</a>
                            </div>
                        </div>  
                      </div>
                      <div class="form-group">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Services
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Breakfast</a>
                              <a class="dropdown-item" href="#">Airport Shuttle</a>
                              <a class="dropdown-item" href="#">Spa Package</a>
                              <a class="dropdown-item" href="#">City Tour</a>
                            </div>
                        </div>  
                      </div>
                    <button type="submit" name="submit" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
<?php }  

}