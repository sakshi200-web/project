<!DOCTYPE html>
<html>
<head>
    <title>Favorite Programming Language</title>
</head>
<body>
    <h2>Favorite Programming Language</h2>

    <form method="POST">
        <label>Which is your favorite programming language?</label><br><br>
        <input type="radio" name="language" value="PHP" required> PHP<br>
        <input type="radio" name="language" value="JavaScript"> JavaScript<br>
        <input type="radio" name="language" value="Python"> Python<br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lang = $_POST['language'];
        echo "<h3>Your favorite programming language is: <u>$lang</u></h3>";
    }
    ?>
</body>
</html>