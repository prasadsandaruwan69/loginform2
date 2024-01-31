<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectone";

 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check the connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 if ($_SERVER["REQUEST_METHOD"] == "POST") 
    // Get input data from the form
    $email = $_POST['email'];
    $passwordd = $_POST['password'];

 // Prepare and execute a SQL query to check the username and password
 $sql = "SELECT * FROM users WHERE email = '$email' AND passwordd = '$password'";
 $result = $conn->query($sql);
 echo $result;

 // Check if a matching user is found
 if ($result->num_rows > 0) {
     // Set session variables
    echo "success"; // Redirect to wenas kr a welcome page or dashboard
     exit();
 } else {
     $error = "Invalid username or password.";
 }

 // Close the database connection
 $conn->close();


?>