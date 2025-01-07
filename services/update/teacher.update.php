<?php
include('../../db/db.php');
$id = $_POST['id'];
$teacherId = $_POST['teacher_id'];
$specialization = $_POST['specialization'];

$sql = "UPDATE teachers SET
        teacher_id='$teacherId',
        specialization='$specialization',
        updated_at=NOW()
        WHERE id=$id";
if ($conn->query($sql)) {
    header('Location: ../../userData.php');
} else {
    echo "Error: " . $conn->error;
}
