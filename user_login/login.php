<?php
// Connect to the database
$servername = "localhost"; // Change this to your database server name
$username = "thutazaw"; // Change this to your database username
$password = "root"; // Change this to your database password
$dbname = "login_register"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted for registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate password
    if (strlen($password) < 8) {
        echo '<div class="alert alert-danger" role="alert">Password must be at least 8 characters long!</div>';
    } elseif (preg_match('/[$&*#!@]/', $password)) {
        echo '<div class="alert alert-danger" role="alert">Password cannot contain the following characters: $ & * # ! @</div>';
    } else {
        // Check if email already exists
        $stmt_check_email = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt_check_email->bind_param("s", $email);
        $stmt_check_email->execute();
        $result_check_email = $stmt_check_email->get_result();

        if ($result_check_email->num_rows > 0) {
            echo '<div class="alert alert-danger" role="alert">Email already exists!</div>';
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT); // Hash the password for security

            // Prepare and bind SQL statement
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password);

            // Execute the statement
            if ($stmt->execute()) {
                echo '<div class="alert alert-success" role="alert">Registration successful!</div>';
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        }

        // Close statement for email check
        $stmt_check_email->close();
    }
}

// Check if the form is submitted for login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST["password"];

    // Prepare and execute SQL statement to fetch user by username
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Fetch user details
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row["password"])) {
            // echo '<div class="alert alert-success" role="alert">Login successful!</div>';
            session_start();
            $_SESSION["username"] = $row["username"];
            header("Location: index.php");
            exit;
        } else {
            echo '<div class="alert alert-danger" role="alert">Incorrect username or password!</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">User not found!</div>';
    }

    // Close statement
    $stmt->close();
}

// Close database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCSM Chatbot</title>
    <link rel="stylesheet" href="script.js">
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
        /* background-color: #add8e6; */
        background-color: gainsboro;
        overflow-x: hidden;
    }

    section {
        min-height: 495px;
        min-width: 430px;
        padding: 15px;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        border-radius: 10px;
        /* background: #d6ebf2; */
        background: white;
        overflow: hidden;
        position: relative;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }

    #logo {
        margin-bottom: 1px;
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
    }


    nav {
        margin: 20px;
        display: flex;
        justify-content: center;
    }

    nav label {
        text-transform: uppercase;
        cursor: pointer;
    }

    nav label:first-child {
        margin-right: 20px;
    }

    form {
        position: absolute;
        min-width: 320px;
        transform: translateX(140%);
        display: flex;
        flex-direction: column;
        transition: 0.3s;
    }

    #SignIn:checked~section #SignInFormData,
    #SignUp:checked~section #SignUpFormData {
        transform: translateX(15%);
    }

    #SignIn:checked~section nav label:first-child,
    #SignUp:checked~section nav label:last-child {
        margin-bottom: -2px;
        border-bottom: 2px solid #1ed760;
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
        color: #fff;
        cursor: pointer;
        margin-top: 5px;
    }

    form span {
        margin-left: 20px;
        display: inline;
    }

    form span label {
        cursor: pointer;
        font-size: 14px;
        text-transform: lowercase;
    }

    input[type="checkbox"] {
        cursor: pointer;
        accent-color: #1ed760;
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

    /* .alert {
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
        font-weight: bold;
        width: 300px;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .alert.success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .alert.error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .alert.show {
        opacity: 1;
    } */
</style>

<body>
    <input type="radio" name="optionScreen" id="SignIn" hidden checked>
    <input type="radio" name="optionScreen" id="SignUp" hidden>

    <section>
        <div id="logo">
            <img src="https://static.vecteezy.com/system/resources/previews/026/609/937/non_2x/butterfly-silhouette-illustration-butterfly-icon-vector.jpg"
                alt="">
        </div>

        <h1>UCSM ChatBot</h1>

    

        <nav>
            <label for="SignIn">Sign In</label>
            <label for="SignUp" id="registerLabel">Register</label>
        </nav>

        

        <form action="" method="post" id="SignInFormData">
            <input type="text" name="username" id="username" placeholder="Username">
            <br>
            <input type="password" name="password" id="password" placeholder="Password">
            <br>
            <button type="submit" name="login" title="Sign In">Sign In</button>
            <!-- <input type="submit" value="Login" name="login"> -->
            <!-- <a href="forgot_password.php" id="forgotPassword">Forgot Your Password?</a> -->
        </form>
        <form action="" method="post" id="SignUpFormData">
            <input type="text" name="username" id="name" placeholder="Username">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit" name="register" title="Sign Up">Register</button>
        </form>
    </section>
</body>

</html>