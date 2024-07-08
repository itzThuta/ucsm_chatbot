<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projects";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        header("location: adminpage.php");
        exit();
        
    } else {
    
        echo "Invalid username or password";
    }
}

?>
