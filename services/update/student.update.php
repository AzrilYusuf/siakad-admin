<?php
include('../../db/db.php');
$id = $_POST['id'];
$studentId = $_POST['student_id'];
$classId = $_POST['class_id'];

$sql = "UPDATE students SET
        student_id='$studentId',
        class_id='$classId',
        updated_at=NOW()
        WHERE id=$id";
if ($conn->query($sql)) {
    header('Location: ../../userData.php');
} else {
    echo "Error: " . $conn->error;
}
