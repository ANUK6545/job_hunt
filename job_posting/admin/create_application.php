<?php
session_start();
if (isset($_SESSION['username']));
else {
    header('location: ../index.php');
}

include 'admin_sidebar.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/create_application.css">
    <script src="../assets/js/create_application.js"></script>
    <title>Create Application</title>

</head>

<body>

    <body>
        <div class="card">
            <h1>Create a Job Application</h1>
            <form id="myForm">
                <div id="step1">
                    <h2>Job Details (Step 1/2):</h2>
                    <label for="job_category">Job Category:</label>
                    <input type="text" id="job_category" name="job_category" required>

                    <label for="job_type">Job Type:</label>
                    <input type="text" id="job_type" name="job_type" required>

                </div>
                <div id="step2" style="display: none;">
                    <h2>Job Listing (Step 2/2):</h2>

                    <label for="job_title">Job Title:</label>
                    <input type="text" id="job_title" name="job_title" required>

                    <label for="job_title">Company Detais:</label>
                    <textarea name="job_title" id="job_title" cols="30" rows="10"></textarea>

                    <label for="job_tags">Job Tags:</label>
                    <input type="text" id="job_tags" name="job_tags" required>

                    <label for="job_skills">Job Skills:</label>
                    <textarea name="job_skills" id="job_skills" cols="30" rows="10"></textarea>

                    <label for="job_experience_required">Experience Required:</label>
                    <input type="text" id="job_experience_required" name="job_experience" required>

                    <label for="job_tags">Job Tags:</label>
                    <input type="text" id="job_tags" name="job_tags" required>

                    <label for="job_description">Job Description:</label>
                    <textarea name="job_description" id="job_description" cols="30" rows="10"></textarea>

                    <label for="salary">Salary:</label>
                    <input type="text" id="salary" name="salary" placeholder="a Range of salary separated by hyphen" oninput="this.value = this.value.replace(/[^0-9-/]{1}$/g, '');" required>

                </div>
                <div id="step3" style="display: none;">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="button" id="nextButton" onclick="nextStep()">Next</button>
                <input type="submit" value="Submit" style="display: none;">
            </form>
        </div>
        <script>

        </script>
    </body>
</body>

</html>