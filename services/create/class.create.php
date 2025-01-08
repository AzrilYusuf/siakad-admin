<?php include('../../db/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $program = $_POST['program'];

    $sql = "INSERT INTO classes (
        id,
        name,
        grade,
        program
    ) 
    VALUES (
        '$id',
        '$name',
        '$grade',
        '$program'
    )";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../../classData.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
