<!DOCTYPE html>
<html>
<head>
    <title>Welcome Form</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Enter your name" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['username'])) {
        $name = $_POST['username'];
        echo "<h3>Welcome, " . htmlspecialchars($name) . "!</h3>";
    }
    ?>
</body>
</html>