<?php
$conn = new mysqli("localhost", "root", "", "stylesense");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
