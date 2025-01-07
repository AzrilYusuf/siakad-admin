// * This file is used to soft delete a user from the database.
<?php
include('../../db/db.php');
$id = $_GET['id'];

$sql = "UPDATE users SET deleted_at=NOW() WHERE id=$id";
if ($conn->query($sql)) {
    header('Location: ../../userData.php');
} else {
    echo "Error: " . $conn->error;
}
?>