<?php include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $role = $_POST['role'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $dateOfBirth = $_POST['dateOfBirth'];

    $sql = "INSERT INTO users (
        role,
        name,
        email,
        password,
        phone,
        gender,
        address,
        dob,
        created_at
    ) 
    VALUES (
        '$role',
        '$name',
        '$email',
        '$password',
        '$phone',
        '$gender',
        '$address',
        '$dateOfBirth',
        NOW()
    )";

    if ($conn->query($sql) === TRUE) {
        header('Location: datauser.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
