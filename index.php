<!--This is the page.class.php-->
<!DOCTYPE HTML>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
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
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
  </nav>
  <!--navbar ends here-->
  <!--
      <?php 
      function showContent() {
       ?>
  -->
<div class="content">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="jumbotron" style="margin-top: 150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="container text-center">
                    <h1 class="display-4">Welcome</h1>
                    <p class="lead">Welcome to Hotel Blank, please follow the prompts below</p>
                    <hr class="my-4">
                    <button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Sign In</button>        
                    <button type="button" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Create Account</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
    <?php } ?>
-->

<!--footer starts here :)-->
<!--
    <?php
    function showFooter() {
    ?>
-->
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
</body>

<!--
<?php } //end of footer method.
    ?> //end of php tag

-->