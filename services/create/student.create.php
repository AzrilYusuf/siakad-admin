<?php include('../../db/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['user_id'];
    $studentId = $_POST['student_id'];
    $classId = $_POST['class_id'];

    $checkSql = "SELECT role FROM users WHERE id = '$userId'";
    $result = $conn->query($checkSql);

    if (!$result) {
        echo "Error: " . $checkSql . "<br>" . $conn->error;
        exit;
    }
    
    $row = $result->fetch_assoc();
    if ($row['role'] !== "Student") {
        echo "The user is not a student";
        exit;
    }

    $sql = "INSERT INTO students (
        id,
        student_id,
        class_id
    ) 
    VALUES (
        '$userId',
        '$studentId',
        '$classId'
    )";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../../userData.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
