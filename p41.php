 <!DOCTYPE html>
<html>
<head>
    <title>Simple Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="login.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
 <?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get submitted values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Predefined login credentials
    $valid_username = "admin";
    $valid_password = "12345";

    // Check credentials
    if ($username === $valid_username && $password === $valid_password) {
        echo "<h3>Login successful!</h3>";
    } else {
        echo "<h3>Invalid credentials</h3>";
    }
} else {
    echo "<h3>Please submit the form.</h3>";
}
?>