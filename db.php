<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hot_hotel";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}
?>