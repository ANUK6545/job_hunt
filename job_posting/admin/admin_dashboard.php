<?php
session_start();
if (isset($_SESSION['username']));
else {
    header('location: ../index.php');
}

include 'admin_sidebar.php';
include '../dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/admin_sidebar.css">
</head>

<body>
<div style="text-align: center; background-color: #007BFF; color: white; padding: 20px;">
        <h1>Welcome, <?php echo $_SESSION['username'] ?></h1>
</body>

</html>