let currentStep = 1;
        const totalSteps = 3;
        const formData = {}; // Define formData in the global scope

        function nextStep() {
            const currentStepDiv = document.getElementById(`step${currentStep}`);
            const inputs = currentStepDiv.querySelectorAll('input, textarea');

            // Collect data from the current step and store it in the JSON object
            inputs.forEach(input => {
                formData[input.name] = input.value;
            });

            currentStepDiv.style.display = "none";

            currentStep += 1;

            if (currentStep <= totalSteps) {
                const nextStepDiv = document.getElementById(`step${currentStep}`);
                nextStepDiv.style.display = "block";
            }

            if (currentStep === totalSteps) {
                document.getElementById("nextButton").style.display = "none";
                document.querySelector('input[type="submit"]').style.display = "block";
               
                const formData = new FormData(form); 
                $.ajax({
                type: "POST",
                url: "db_application.php",
                data: "function=create_app&" + formData, 
                success: function(data) {
                    alert(data);
                   

                }
            });
            }
        }