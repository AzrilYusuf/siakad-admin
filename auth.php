<?php
session_start();

// Check whether session is set
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'Admin') {
    // Redirect to login if not logged in or not an admin
    header('Location: login.html');
    exit;
}
?>
