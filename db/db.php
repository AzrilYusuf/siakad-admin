<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'senior_high_school_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>