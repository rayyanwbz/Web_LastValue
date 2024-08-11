<?php

$servername = "127.0.0.1:3307";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "commands"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT direction FROM commands ORDER BY id DESC LIMIT 1';  
$result = mysqli_query($conn, $sql);

// Fetch the result
if(mysqli_num_rows($result) == 0){
    echo "the robot has not moved".'<br>';
}
else{
    $row = mysqli_fetch_assoc($result);
    echo $row['direction'];
}