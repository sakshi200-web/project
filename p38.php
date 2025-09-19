 <!-- sumform.html -->
<form action="sum.php" method="get">
    Enter first number: <input type="number" name="num1"><br><br>
    Enter second number: <input type="number" name="num2"><br><br>
    <input type="submit" value="Calculate Sum">
</form>
 <!-- sum.php -->
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sum = $num1 + $num2;

    echo "The sum of $num1 and $num2 is $sum.";
} else {
    echo "Please enter two numbers in the form.";
}
?>
