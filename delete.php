<?php
include('db.php');
$id = $_GET['id'];

$sql = "UPDATE users SET deleted_at=NOW() WHERE id=$id";
if ($conn->query($sql)) {
    header('Location: datauser.php');
} else {
    echo "Error: " . $conn->error;
}
?>