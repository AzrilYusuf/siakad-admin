// * This file is used to soft delete a teacher from the database.
<?php
include('../../db/db.php');
$id = $_GET['id'];

$sql = "UPDATE teachers SET deleted_at=NOW() WHERE id=$id";
if ($conn->query($sql)) {
    header('Location: ../../dataUser.php');
} else {
    echo "Error: " . $conn->error;
}
?>