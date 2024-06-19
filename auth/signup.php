<?php
include_once __DIR__.'/../partials/header.php';
include_once __DIR__.'/../partials/navbar.php';
?>

    <div class="container d-flex justify-content-center my-5">
        <div class="login-container">
            <h2>Sign Up</h2>
            <form action="#" method="post">
                <div class="input-group">
                    <input type="text" id="fname" name="fname" placeholder="First Name" required>
                </div>
                <div class="input-group">
                    <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                </div>
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="login-button">Sign Up</button>
            </form>
            <div>
                <p>Already Have an account? <a href="<?php echo ROOT ?>auth/loginpage.php" class="register">Login</a></p>
            </div>
        </div>
    </div>
    <?php include_once __DIR__.'/../partials/footer.php'; ?>