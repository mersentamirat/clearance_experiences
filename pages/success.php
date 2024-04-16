<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}

// If logged in, greet the user
echo "Welcome, " . $_SESSION['username'] . "! You have successfully logged in.";
?>

<!-- Add your HTML content for the success page below -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>! You have successfully logged in.</h1>
    <!-- Add more HTML content as needed -->
     <!-- Logout form -->
     <form action="../pages/logout.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
