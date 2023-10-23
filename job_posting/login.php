<?php

?>

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
            <h2>Login</h2>
            <form id="loginForm">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>

                <br>
                <a href="url">Forgot Password?</a>
                <br>
                <a href="index.php">Not a member? Click here to Register </a>


            </form>
        </div>
    </div>

    <script>
        $("#loginForm").submit(function(e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var form = $(this);
            var actionUrl = form.attr('action');

            $.ajax({
                type: "POST",
                url: "form_validation.php",
                data: "function=login&" + form.serialize(), // serializes the form's elements.
                success: function(data) {
                    // alert(data);
                    data = JSON.parse(data);

                    if (data != 0) {
                        role = (data[0].role);
                        if (role == "admin") {
                            alert("Welcome," + data[0].uname);
                            window.location.replace("admin/admin_dashboard.php");
                        } else {
                            alert("Welcome," + data[0].uname);
                            window.location.replace("candidate/candidate_dashboard.php");
                        }

                    } else {
                        alert("Invalid username or password");
                    }

                }
            });

        });
    </script>

</body>

</html>