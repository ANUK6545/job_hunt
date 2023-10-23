<?php
session_start();
if (isset($_SESSION['username']));
else {
    header('location: ../index.php');
}

include 'admin_sidebar.php';
// include '../dbcon.php';

?>