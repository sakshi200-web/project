<!-- hello.php -->
<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, " . htmlspecialchars($name);
} else {
    echo "Hello, Guest!";
}
?>