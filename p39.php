 <!-- marksform.html -->
<form action="result.php" method="get">
    Enter your marks: <input type="number" name="marks"><br><br>
    <input type="submit" value="Check Result">
</form>
 <!-- result.php -->
<?php
if (isset($_GET['marks'])) {
    $marks = $_GET['marks'];
    if ($marks >= 40) {
        echo "PASS";
    } else {
        echo "FAIL";
    }
} else {
    echo "Please enter your marks in the form.";
}
?>
