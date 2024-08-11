<?php
// Connect to MySQL database
$servername = "127.0.0.1:3307";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "commands"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $direction = $_POST['direction'];
    $sql = "INSERT INTO commands (direction) VALUES ('$direction')";

    if ($conn->query($sql) === TRUE) {
        header("Location: confirmation.php?direction=$direction");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close MySQL connection
$conn->close();
?>
