<?php
// Database connection details
$servername = 'localhost';
$username = 'user';
$password = 'P@$$W0rd';
$dbname = 'sklep';

// Create a new MySQL connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted email, username, and password
    $gmail = $_POST['email'];
    $submitted_password = $_POST['password'];

    // Prepare and execute the SQL query to fetch the user data
    $stmt = $conn->prepare("SELECT gmail, password FROM users WHERE gmail = ?");
    $stmt->bind_param("s", $gmail);
    $stmt->execute();
    $stmt->bind_result($db_username, $db_password_hash);
    $stmt->fetch();

    // Verify the password
    if (password_verify($submitted_password, $db_password_hash)) {
        // Start a session and redirect the user to the appropriate page
        session_start();
        $_SESSION['username'] = $db_username;
        echo "Udało się";
        header("Location: /home.php");
        exit;
    } else {
        // Display an error message and redirect the user back to the login page
        echo "sracziczi";
        $error_message = "Invalid email or password.";
        header("Location: login.php?error=" . urlencode($error_message));
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="login-form-d">
        <div class="hej">
            <h1>Login</h1>
            <?php if (isset($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } ?>
            <form class="form-l" method="post">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
