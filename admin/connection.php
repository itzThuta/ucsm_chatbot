<?php
session_start(); // Start the session for storing user data

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Your database connection details
    $host = "localhost";
    $dbusername = "thutazaw";
    $dbpassword = "root";
    $dbname = "2fa";

    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM login WHERE username = '$username' AND password='$password'";
    
    $result = $conn -> query($query);

    if($result -> num_rows == 1){
        header("Location: admin/admin_dashboard");
        exit();
    }
    else{
        exit();
    }

    $conn -> close();

}

?>