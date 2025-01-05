<?php
session_start();
include('db.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Query for checking email and password
    $sql = "SELECT id, password, role FROM users WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        // Query preparation failed
        die('MySQL prepare error: ' . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Debugging: output the user data
        var_dump($user); // Output user data to check what is being retrieved
        
        // Verify the password
        if ($password === $user['password']) {
            // Password matches
            if ($user['role'] == 'Admin') {
                // Admin login accepted
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                header('Location: index.php');
                exit;
            } else {
                // Login rejected for non-admin
                echo "Login ditolak! Anda tidak memiliki izin.";
                header('Location: login.html');
                exit;
            }
        } else {
            // Password does not match
            echo "Login gagal! Password salah.";
        }
    } else {
	// Role not valid
        echo "Login gagal! Email tidak ditemukan.";
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>