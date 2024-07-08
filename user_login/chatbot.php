<?php
// Check if the user has toggled the dark mode
if (isset($_POST['dark_mode'])) {
    // Set a cookie to remember the user's preference
    setcookie('dark_mode', $_POST['dark_mode'], time() + (86400 * 30), "/"); // Cookie will expire in 30 days
}

// Check if the dark mode cookie is set
$darkMode = isset($_COOKIE['dark_mode']) && $_COOKIE['dark_mode'] === 'true';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode/Light Mode Toggle</title>
    <style>
        /* Define styles for dark mode */
        body.dark-mode {
            background-color: #333;
            color: #fff;
        }

        /* Define styles for light mode */
        body.light-mode {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body class="<?php echo $darkMode ? 'dark-mode' : 'light-mode'; ?>">
    <h1>Dark Mode/Light Mode Toggle</h1>
    
    <!-- Dark Mode/Light Mode Toggle Button -->
    <form method="post">
        <button type="submit" name="dark_mode" value="<?php echo $darkMode ? 'false' : 'true'; ?>">
            <?php echo $darkMode ? 'Light Mode' : 'Dark Mode'; ?>
        </button>
    </form>

    <!-- Content of your website goes here -->
</body>
</html>
