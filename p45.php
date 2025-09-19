<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz</title>
</head>
<body>
    <h2>Online Quiz</h2>

    <form method="POST">
        <!-- Question 1 -->
        <p>1. Which language is used for web development?</p>
        <input type="radio" name="q1" value="PHP" required> PHP<br>
        <input type="radio" name="q1" value="C++"> C++<br>
        <input type="radio" name="q1" value="Java"> Java<br><br>

        <!-- Question 2 -->
        <p>2. What does HTML stand for?</p>
        <input type="radio" name="q2" value="Hyper Text Markup Language" required> Hyper Text Markup Language<br>
        <input type="radio" name="q2" value="High Text Machine Language"> High Text Machine Language<br>
        <input type="radio" name="q2" value="Hyperlinks Text Making Language"> Hyperlinks Text Making Language<br><br>

        <!-- Question 3 -->
        <p>3. Which of the following is a JavaScript framework?</p>
        <input type="radio" name="q3" value="Laravel" required> Laravel<br>
        <input type="radio" name="q3" value="React"> React<br>
        <input type="radio" name="q3" value="Django"> Django<br><br>

        <input type="submit" value="Submit Quiz">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = 0;

        // Correct answers
        if ($_POST['q1'] == "PHP") $score++;
        if ($_POST['q2'] == "Hyper Text Markup Language") $score++;
        if ($_POST['q3'] == "React") $score++;

        echo "<h3>Your Score: $score / 3</h3>";
    }
    ?>
</body>
</html>