<?php include('db.php'); ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id = $id");
$row = $result->fetch_assoc();
?>
<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
    </div>
    <div class="form-group">
        <label>Phone:</label>
        <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>