<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>
    <form method="POST" action="process.php">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Message: <textarea name="message" required></textarea><br><br>
        <input type="submit" value="Submit Feedback">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Normally you would save feedback to a database here

    // Redirect to thankyou.php with name in URL
    header("Location: thankyou.php?name=" . urlencode($name));
    exit();
}
?>
<?php
if (isset($_GET['name'])) {
    $student = htmlspecialchars($_GET['name']); 
    echo "<h2>Thank you, $student! Your feedback has been submitted.</h2>";
} else {
    echo "<h2>Thank you! Your feedback has been submitted.</h2>";
}
?>