// * This file is used to soft delete a student from the database.
<?php
include('../../db/db.php');
$id = $_GET['id'];

$sql = "UPDATE classes SET deleted_at=NOW() WHERE id=$id";
if ($conn->query($sql)) {
    header('Location: ../../classData.php');
} else {
    echo "Error: " . $conn->error;
}
?>