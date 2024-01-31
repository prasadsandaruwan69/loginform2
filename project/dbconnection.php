<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST['name'];
$email = $_POST['email'];
$password=$_POST['password'];

// Insert data into the database
$sql = "INSERT INTO users (name, email,passwordd) VALUES ('$name', '$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>