<?php include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['user_id'];
    $teacherId = $_POST['teacher_id'];
    $specialization = $_POST['specialization'];

    $checkSql = "SELECT role FROM users WHERE id = '$userId'";
    $result = $conn->query($checkSql);

    if (!$result) {
        echo "Error: " . $checkSql . "<br>" . $conn->error;
        exit;
    }

    $row = $result->fetch_assoc();
    if ($row['role'] !== "Teacher") {
        echo "The user is not a teacher";
        exit;
    }

    $sql = "INSERT INTO teachers (
        id,
        teacher_id,
        specialization
    ) 
    VALUES (
        '$userId',
        '$teacherId',
        '$specialization'
    )";

    if ($conn->query($sql) === TRUE) {
        header('Location: dataUser.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
