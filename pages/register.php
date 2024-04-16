
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>User Registration</h2>
    <form action="../scripts/register_process.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="Role">Roles:</label><br>
        <select id="role" name="role" required>
            <option value="admin">Admin</option>
            <option value="instructor">Instructor</option>
            <option value="student">Student</option>
            <option value="hrm">HRM</option>
            <option value="user">User</option>
            <!-- Add more roles as needed -->
        </select><br><br> 

        <input type="submit" name="register" value="Register">
        <p> if have an accout <a href="../pages/login.php"> login</a> </p>
    </form>
</body>
</html>