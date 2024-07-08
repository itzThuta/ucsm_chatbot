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

    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // include 'admin/admin_dashboard/admin/index.php';
        header("Location: admin/index.php");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Incorrect username or password!</div>';
        // exit();
    }

    $conn->close();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<style>
    * {
        font-family: "Gotham Round Book", "sans-serif";
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        color: black;
    }

    ::selection {
        background: 0;
    }

    body {
        width: 100%;
        min-height: 560px;
        height: 100vh;
        display: grid;
        place-content: center;
        background-color: gainsboro;
        overflow-x: hidden;
    }

    section {
        min-height: 480px;
        min-width: 400px;
        padding: 15px;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        border-radius: 10px;
        background: white;
        overflow: hidden;
        position: relative;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }

    #logo {
        margin-bottom: 10px;
        /* Add margin between logo and h1 */
    }

    #logo img {
        width: 100px;
        /* Adjust the width as desired */
        height: auto;
        /* Maintain aspect ratio */
    }

    h1 {
        text-align: center;
        /* margin-top: 15px;
        margin-bottom: 20px; */
    }

    form {
        position: absolute;
        min-width: 320px;
        transform: translateX(50%);
        left: 50%;
        top: 64%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        transition: 0.3s;
    }

    input,
    button {
        color: black;
        border-radius: 50px;
        padding: 15px 20px;
        margin-bottom: 15px;
        border: none;
        outline: none;
        font-size: 16px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    button {
        background: black;
        text-transform: uppercase;
        font-weight: bold;
        color: white;
        cursor: pointer;
        margin-top: 5px;
    }

    a {
        font-weight: bold;
        text-decoration: none;
        margin-top: 20px;
        cursor: pointer;
        text-align: center;
        opacity: 0.6;
    }

    a:hover {
        opacity: 1;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        font-weight: normal;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }
</style>

<body>
    <section>


        <div id="logo">
            <img src="https://static.vecteezy.com/system/resources/previews/026/609/937/non_2x/butterfly-silhouette-illustration-butterfly-icon-vector.jpg"
                alt="">
        </div>

        <h1>Admin Login</h1>

        <form method="post" action="">
            <input type="text" name="username" id="username" placeholder="Username"><br>

            <input type="password" name="password" id="password" placeholder="Password"><br>

            <button type="submit" name="login" title="Sign In">Sign In</button>
        </form>
    </section>
</body>

</html>