<?php
session_start();
include "config.php";

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM history WHERE user_id='$user_id' ORDER BY created_at DESC";
$result = $conn->query($sql);

echo "<h2>Your Outfit History</h2>";

while($row = $result->fetch_assoc()){
    echo "<p>";
    echo $row['occasion']." - ".$row['outfit']." (".$row['created_at'].")";
    echo "</p>";
}
?>
