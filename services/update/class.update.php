<?php
include('../../db/db.php');
$id = $_POST['id'];
$name = $_POST['name'];
$grade = $_POST['grade'];
$program = $_POST['program'];

$sql = "UPDATE students SET
        name='$name',
        grade='$grade',
        program='$program',
        updated_at=NOW()
        WHERE id=$id";
if ($conn->query($sql)) {
    header('Location: ../../classData.php');
} else {
    echo "Error: " . $conn->error;
}
