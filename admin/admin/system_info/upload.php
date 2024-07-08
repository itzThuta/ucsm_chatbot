<!-- <?php
// Check if a file was uploaded
if ($_FILES['img']['error'] == UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['img']['tmp_name'];
    $fileName = $_FILES['img']['name'];
    
    // Validate file type (optional)
    $fileType = $_FILES['img']['type'];
    if ($fileType !== 'image/jpeg' && $fileType !== 'image/png') {
        die("Only JPEG and PNG files are allowed.");
    }
    
    // Move the uploaded file to a directory on the server
    $uploadDir = 'uploads/';
    $destPath = $uploadDir . $fileName;
    if (!move_uploaded_file($fileTmpPath, $destPath)) {
        die("Failed to move uploaded file.");
    }
    
    // Insert the file path into the database
    $dbHost = 'localhost';
    $dbUser = 'thutazaw';
    $dbPass = 'root';
    $dbName = 'chatbot_db/system_info';
    
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO images (file_path) VALUES ('$destPath')";
    if ($conn->query($sql) === TRUE) {
        echo "Image uploaded and stored in the database successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
} else {
    die("Error uploading file.");
}
?> -->
