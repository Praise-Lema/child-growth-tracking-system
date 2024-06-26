<?php
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/navbar.php';
include_once __DIR__.'/partials/sidebar.php';
?>

<div class="container main-bar">
    <h1 class="text-center mt-4">Child Details</h1>
    <div class="container">
        
        <form action="/submit_father_details" method="POST">
            <h2>Father's Details</h2>

            <div class="form-group bg">
                <label for="father_first_name">First Name:</label>
                <input type="text" class="form-control" id="father_first_name" name="father_first_name" required><br><br>

                <label for="father_middle_name">Middle Name:</label>
                <input type="text" class="form-control" id="father_middle_name" name="father_middle_name"><br><br>

                <label for="father_last_name">Last Name:</label>
                <input type="text" class="form-control" id="father_last_name" name="father_last_name" required><br><br>
            </div>
            <div class="form-group bg">
                <label for="father_age">Age:</label>
                <input type="number" class="form-control" id="father_age" name="father_age" required><br><br>

                <label for="father_phone">Phone Number:</label>
                <input type="tel" class="form-control" id="father_phone" name="father_phone" required><br><br>

                <label for="father_place">Place:</label>
                <input type="text" class="form-control" id="father_place" name="father_place" required><br><br>
            </div>
    
            <h2>Mother's Details</h2>
            <div class="form-group bg">
                <label for="mother_first_name">First Name:</label>
                <input type="text" class="form-control" id="mother_first_name" name="mother_first_name" required><br><br>

                <label for="mother_middle_name">Middle Name:</label>
                <input type="text" class="form-control" id="mother_middle_name" name="mother_middle_name"><br><br>

                <label for="mother_last_name">Last Name:</label>
                <input type="text" class="form-control" id="mother_last_name" name="mother_last_name" required><br><br>
            </div>

            <div class="form-group bg">
                <label for="mother_age">Age:</label>
                <input type="number" class="form-control" id="mother_age" name="mother_age" required><br><br>

                <label for="mother_phone">Phone Number:</label>
                <input type="tel" class="form-control" id="mother_phone" name="mother_phone" required><br><br>

                <label for="mother_place">Place:</label>
                <input type="text" class="form-control" id="mother_place" name="mother_place" required><br><br>
            </div>

            <h2>Child's Details</h2>
            <div class="form-group bg">
                <label for="child_first_name">First Name:</label>
                <input type="text" class="form-control" id="child_first_name" name="child_first_name" required><br><br>

                <label for="child_middle_name">Middle Name:</label>
                <input type="text" class="form-control" id="child_middle_name" name="child_middle_name"><br><br>

                <label for="child_last_name">Last Name:</label>
                <input type="text" class="form-control" id="child_last_name" name="child_last_name" required><br><br>
            </div>

            <div class="form-group bg">
                <label for="child_date_of_birth">DOB:</label>
                <input type="date" class="form-control" id="child_date_of_birth" name="child_date_of_birth" required><br><br>
        
                <label for="child_place_of_birth">Place of Birth:</label>
                <input type="text" class="form-control" id="child_place_of_birth" name="child_place_of_birth" required><br><br>
        
                <label for="child_age">Age:</label>
                <input type="number" class="form-control" id="child_age" name="child_age" required><br><br>
            </div>

            <br>
            <input type="submit" class="btn btn-success form-control mb-4" value="Submit Details">
        </form>
    </div>
</div>

<?php include_once __DIR__.'/partials/footer.php'; ?>
