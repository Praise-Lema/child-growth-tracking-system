<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .immunization {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 16px;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        button, input[type="submit"], input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        button:hover, input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Child Information Form</h2>
    <form id="childInfoForm">
        <div class="error" id="error-message"></div>
        <label for="childID">Child ID:</label>
        <input type="text" id="childID" name="childID" required>

        <label for="height">Height (cm):</label>
        <input type="number" id="height" name="height" required>

        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="weight" required>

        <div id="immunizations">
            <h3>Immunizations</h3>
            <div class="immunization">
                <label for="immunizationName1">Name:</label>
                <input type="text" id="immunizationName1" name="immunizationName1" required>
                <label for="immunizationDate1">Date:</label>
                <input type="date" id="immunizationDate1" name="immunizationDate1" required>
                <label for="immunizationDose1">Dose:</label>
                <input type="text" id="immunizationDose1" name="immunizationDose1" required>
            </div>
        </div>
        <button type="button" onclick="addImmunization()">Add More Immunizations</button><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <script>
        let immunizationCount = 1;

        function addImmunization() {
            immunizationCount++;
            const immunizationsDiv = document.getElementById('immunizations');
            const newImmunizationDiv = document.createElement('div');
            newImmunizationDiv.classList.add('immunization');
            newImmunizationDiv.innerHTML = `
                <label for="immunizationName${immunizationCount}">Name:</label>
                <input type="text" id="immunizationName${immunizationCount}" name="immunizationName${immunizationCount}" required>
                <label for="immunizationDate${immunizationCount}">Date:</label>
                <input type="date" id="immunizationDate${immunizationCount}" name="immunizationDate${immunizationCount}" required>
                <label for="immunizationDose${immunizationCount}">Dose:</label>
                <input type="text" id="immunizationDose${immunizationCount}" name="immunizationDose${immunizationCount}" required>
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
</body>
</html>
