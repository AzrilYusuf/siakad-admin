// * This file is used to soft delete a student from the database.
<?php
include('db.php');
$id = $_GET['id'];

$sql = "UPDATE students SET deleted_at=NOW() WHERE id=$id";
if ($conn->query($sql)) {
    header('Location: dataUser.php');
} else {
    echo "Error: " . $conn->error;
}
?>