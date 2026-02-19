<?php
include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

if ($conn->query($sql)) {
    echo "Registered Successfully <a href='login.html'>Login</a>";
} else {
    echo "Email already exists!";
}
?>
