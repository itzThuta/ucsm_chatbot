<?php
include_once('connection.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    $stmt = $conn->prepare("SELECT * FROM adminlogin WHERE username=?");

    
    $stmt->bind_param("s", $username);

    
    $stmt->execute();

    
    $result = $stmt->get_result();

    
    if ($result->num_rows > 0) {
        
        $user = $result->fetch_assoc();
        
        
        if (password_verify($password, $user['password'])) {
            
            header("location: adminpage.php");
            exit(); 
        } else {
            
            echo "<script language='javascript'>";
            echo "alert('Wrong password')";
            echo "</script>";
        }
    } else {
        echo "<script language='javascript'>";
        echo "alert('User not found')";
        echo "</script>";
    }

    $stmt->close();
}

$conn->close();
?>
