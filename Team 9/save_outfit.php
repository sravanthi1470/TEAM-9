<?php
session_start();
include "config.php";

if(!isset($_SESSION['user_id'])){
    echo "Login required";
    exit();
}

$user_id = $_SESSION['user_id'];
$gender = $_POST['gender'];
$occasion = $_POST['occasion'];
$color = $_POST['color'];
$outfit = $_POST['outfit'];

$sql = "INSERT INTO history (user_id,gender,occasion,color,outfit)
VALUES ('$user_id','$gender','$occasion','$color','$outfit')";

if($conn->query($sql)){
    echo "Saved";
}else{
    echo "Error";
}
?>
