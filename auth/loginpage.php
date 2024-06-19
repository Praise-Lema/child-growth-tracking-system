<?php
include_once __DIR__.'/../partials/header.php';
include_once __DIR__.'/../partials/navbar.php';
?>
<div class="container d-flex justify-content-center my-5">
    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <div>
            <p>Don't Have an account? <a href="<?php echo ROOT ?>auth/signup.php" class="register">Register</a></p>
        </div>
    </div>
</div>
    
    <?php include_once __DIR__.'/../partials/footer.php'; ?>