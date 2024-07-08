<?php

    $db = new PDO('mysql:host=localhost;dbname=chatbot_db;charset=utf8', 'thutazaw', 'root');

    if(isset($_FILES['fileToUpload'])) {
        $file_path = $_FILES['fileToUpload']['tmp_name'];

        $target_file = 'uploads/' . basename($_FILES['fileToUpload']['name']);

        if (move_uploaded_file($file_path, $target_file)) {
            echo "The file has been uploaded.";

            $stmt = $db -> prepare("INSERT INTO responses(images) VALUES (?)");

            $stmt -> execute([$target_file]);
        }
        else echo "Sorry. Failed";
    }

?>