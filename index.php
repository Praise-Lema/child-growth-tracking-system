<?php
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/navbar.php';
?>


<div class="background"></div>
<div class="container">
    <h1 class="text-center mt-4">Welcome to the Child Growth Tracking System</h1>

    <?php 
    $isMob = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));
    if($isMob == true){
        echo "This is a Mobile Device";
    }else{
        echo "Not a Mobile Device";
    }

    ?>
</div>

<?php include_once __DIR__.'/partials/footer.php'; ?>