<!-- details.php -->
<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    echo "Hello " . htmlspecialchars($name) . ", you are " . htmlspecialchars($age) . " years old.";
} else {
    echo "Please provide both name and age in the URL.";
}
?>