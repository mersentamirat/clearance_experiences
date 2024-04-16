<?php
include '../includes/config.php';

if(isset($_POST['register'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password']; // Plain text password
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $role = $_POST['role'];
    
    // Check if username or email already exists
    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        // User with the same username or email already exists
        echo "Username or email already exists. Please choose a different one.";
    }else {
        // Insert user data into the database using query()
        $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role');";
        // if ($conn->query($sql) === TRUE) {

        // if ($stmt->execute()) {
        if ($conn->query($sql) === TRUE) {
            echo "User registered successfully";
            // Redirect to a confirmation page after successful registration
            header("Location: ../pages/registration_confirmation.php");
            exit;
        } else {
            echo "Error registering user: " . $conn->error;
            
            // Log detailed error for debugging
            error_log("Error registering user: " . $conn->error);
            // Display a generic error message to users
            echo "An error occurred while registering. Please try again later.";
            
        }

        $stmt->close();
        
            }
            $conn->close();    

}else {
    // If the form is not submitted, redirect back to the form page
    header("Location: ../pages/register.php");
    exit;
}
?>