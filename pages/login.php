
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Login Form</h2>
    <form action="../scripts/login_process.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <!-- Error message placeholder -->
        <?php if(isset($_GET['error'])): ?>
            <p style="color: red;"><?php echo $_GET['error']; ?></p>
        <?php endif; ?>
        <input type="submit" name="login" value="Login">
        <p> if have'nt an accout <a href="../pages/register.php"> Register</a> </p>
    </form>
</body>
</html>