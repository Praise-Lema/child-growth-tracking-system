<?php
define('ROOT', 'http://localhost:8080/');
?>

<nav class="navbar navbar-expand-lg z-1">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="<?php echo ROOT ?>">CG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT ?>dashboard.php" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT ?>about_us.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT ?>contacts.php">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT ?>auth/loginpage.php" aria-disabled="true"><span class="fa fa-sign-in me-1"></span>Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT ?>auth/signup.php" aria-disabled="true"><span class="fa fa-user-plus me-1"></span>Sign Up</a>
            </li>
        </ul>
    </div>
  </div>
</nav>

<!-- <nav>
        <ul class="nav-items">
            <li><a href="child_details.php">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Contact us</a></li>
            <li><a href="loginpage.php">Login</a></li>
            <li><a href="signup.php">Register</a></li>
        </ul>
    </nav> -->