<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title> Job Hunt </title>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2>Register</h2>
            <form id="registrationForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required oninput="this.value = this.value.replace(/[^A-Za-z]/g, '');">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="c_password">Confirm Password:</label>
                <input type="c_password" id="c_password" name="c_password" required>

                <label for="role-select">signing up as:</label>
                <select class="role-select" id="role-select" name="role" required>
                    <option selected disabled="true">--select--</option>
                    <option value="admin">Hirer</option>
                    <option value="candidate">Job Seeker</option>
                </select>
                <br><br>
                <button type="submit">Register</button>

                <br>
                <a href="url">Forgot Password?</a>
                           
                <br>
                <a href="login.php">Already a member? click here to login</a>


            </form>
        </div>
    </div>

    <script>
        $("#registrationForm").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var form = $(this);
            var actionUrl = form.attr('action');

            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("c_password").value;

            if (password !== confirmPassword) {
               alert("The passwords don't match!");
            } 

            $.ajax({
                type: "POST",
                url: "form_validation.php",
                data: "function=register&" + form.serialize(), // serializes the form's elements.
                success: function(data) {
                    alert();

                    

                }
            });

        });
    </script>

</body>

</html>