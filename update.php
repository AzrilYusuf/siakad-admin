<?php
include('db.php');
$id = $_POST['id'];
$role = $_POST['role'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$dateOfBirth = $_POST['dateOfBirth'];

$sql = "UPDATE users SET
        role='$role',
        name='$name',
        email='$email',
        phone='$phone',
        gender='$gender',
        address='$address',
        dob='$dateOfBirth',
        updated_at=NOW()
        WHERE id=$id";
if ($conn->query($sql)) {
    header('Location: datauser.php');
} else {
    echo "Error: " . $conn->error;
}
