<?php
// session_start();
include '../includes/config.php';

if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $user = $result->fetch_assoc();
        echo 'Password: ' . $user['password'] ."\n";
        echo 'username: ' . $user['username'] ."\n";

        if ($password == $user['password']){
            echo "Login successful";
            // Start the session
            session_start();
    
             // Set session variables if needed
            // Set session variables
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role']; // Assuming 'role' is a column in your 'users' table
            // Redirect based on role
            if ($user['role'] == 'admin') {
                header("Location: ../pages/success.php");
            } elseif ($user['role'] == 'user') {
                header("Location: ../pages/success.php");
            } else {
                // Default redirect or error handling
                header("Location: ../pages/default_dashboard.php");
            }
            exit; // Make sure to exit after redirection

        } else {
            echo "Invalid username or password \n";
            echo "Entered Password: " . $password  . " \n";
            echo "Password from Database: " . $user['password']. " \n";
        }
    } else {
        echo "User not found";
    }

    $conn->close();

} else{
    // If the form is not submitted, redirect back to the form page
    header("Location: ../pages/login.php");
    exit;
}
?>