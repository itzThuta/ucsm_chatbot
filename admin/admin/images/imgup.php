<?php

$db = new PDO('mysql:host=localhost;dbname=chatbot_db;charset=utf8', 'thutazaw', 'root');

if(isset($_FILES['fileToUpload'])) {
    $file_path = $_FILES['fileToUpload']['tmp_name'];

    $target_file = '/Applications/XAMPP/xamppfiles/htdocs/chatbot_project/admin/admin/images/uploads' . basename($_FILES['fileToUpload']['name']);

    if (move_uploaded_file($file_path, $target_file)) {
        echo "The file has been uploaded.";

        $stmt = $db -> prepare("INSERT INTO responses(images) VALUES (?)");

        $stmt -> execute([$target_file]);
    }
    else echo "Sorry. Failed";
}

?>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-top: 0;
            text-align: center;
        }

        input[type="file"] {
            display: block;
            margin: 10px 0;
        }

        .upload-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;
            width: 100%;
        }

        .upload-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form id="uploadForm" method="post" enctype="multipart/form-data">
        <h2>Upload Image</h2>
        <label for="fileToUpload">Select image to upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <!-- Use a div as the upload button -->
        <div class="upload-button" onclick="document.getElementById('uploadForm').submit()">Upload Image</div>
    </form>
</body>