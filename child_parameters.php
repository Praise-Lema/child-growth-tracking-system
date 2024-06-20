<?php
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/navbar.php';
include_once __DIR__.'/partials/sidebar.php';
?>

<div class="container main-bar">
<h2 class="text-center mt-4">Child Information Form</h2>
    <form id="childInfoForm">
        <div class="error" id="error-message"></div>
        <label for="childID">Child ID:</label>
        <input type="text" class="form-control" id="childID" name="childID" required>

        <label for="height">Height (cm):</label>
        <input type="number" class="form-control" id="height" name="height" required>

        <label for="weight">Weight (kg):</label>
        <input type="number" class="form-control" id="weight" name="weight" required>

        <div id="immunizations">
            <h3 class="my-3">Immunizations</h3>
            <div class="immunization">
                <div class="form-group d-flex justify-content-between gap-0">
                    <div class="">
                        <label for="immunizationName1">Name:</labe>
                        <input type="text" class="form-control" id="immunizationName1" name="immunizationName1" required>
                    </div>
                    
                    <div class="">
                        <label for="immunizationDate1">Date:</label>
                        <input type="date" class="form-control" id="immunizationDate1" name="immunizationDate1" required>
                    </div>
                    
                    <div class="">
                        <label for="immunizationDose1">Dose:</label>
                        <input type="text" class="form-control" id="immunizationDose1" name="immunizationDose1" required>
                    </div>
                    
                </div>        
            </div>
        </div>
        <button type="button" class="btn btn-success" onclick="addImmunization()">Add More Immunizations</button><br><br>

        <input type="submit" class="btn btn-success" value="Submit">
        <input type="reset" class="btn btn-danger" value="Reset">
    </form>
</div>
    

    <script>
        let immunizationCount = 1;

        function addImmunization() {
            immunizationCount++;
            const immunizationsDiv = document.getElementById('immunizations');
            const newImmunizationDiv = document.createElement('div');
            newImmunizationDiv.classList.add('immunization');
            newImmunizationDiv.innerHTML = `
                <div class="form-group  d-flex justify-content-between gap-0">
                    <div>
                        <label for="immunizationName${immunizationCount}">Name:</label>
                        <input type="text" class="form-control" id="immunizationName${immunizationCount}" name="immunizationName${immunizationCount}" required>
                    </div>
                    <div>
                        <label for="immunizationDate${immunizationCount}">Date:</label>
                        <input type="date" class="form-control" id="immunizationDate${immunizationCount}" name="immunizationDate${immunizationCount}" required>
                    </div>
                    <div>
                        <label for="immunizationDose${immunizationCount}">Dose:</label>
                        <input type="text" class="form-control" id="immunizationDose${immunizationCount}" name="immunizationDose${immunizationCount}" required>
                    </div>
                </div>
            `;
            immunizationsDiv.appendChild(newImmunizationDiv);
        }

        document.getElementById('childInfoForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const errorMessage = document.getElementById('error-message');
            errorMessage.textContent = '';

            const childID = document.getElementById('childID').value;
            const height = document.getElementById('height').value;
            const weight = document.getElementById('weight').value;
            if (!childID || height <= 0 || weight <= 0) {
                errorMessage.textContent = 'Please fill out all fields correctly.';
                return;
            }

            let valid = true;
            for (let i = 1; i <= immunizationCount; i++) {
                const immunizationName = document.getElementById(`immunizationName${i}`).value;
                const immunizationDate = document.getElementById(`immunizationDate${i}`).value;
                const immunizationDose = document.getElementById(`immunizationDose${i}`).value;
                if (!immunizationName || !immunizationDate || !immunizationDose) {
                    valid = false;
                    break;
                }
            }

            if (!valid) {
                errorMessage.textContent = 'Please fill out all immunization fields correctly.';
                return;
            }

            // If validation passes, the form can be submitted or further processed here.
            alert('Form submitted successfully!');
            document.getElementById('childInfoForm').reset();
            while (immunizationCount > 1) {
                const lastImmunization = document.getElementById('immunizations').lastChild;
                document.getElementById('immunizations').removeChild(lastImmunization);
                immunizationCount--;
            }
        });
    </script>
<?php include_once __DIR__.'/partials/footer.php'; ?>
