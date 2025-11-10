<?php
$conn = new mysqli('localhost', 'root', '', 'espaceconnect');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database connection successful!";
?>