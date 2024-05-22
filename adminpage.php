<?php
session_start(); 
include('navbar.php');
$name = $_SESSION['name'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_user_id'])) {
    require("dbh.php");
    $conn = dbconnect();
    $id = $_POST['delete_user_id'];
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php echo file_get_contents('style2.css'); ?></style>
    <title>Document</title>
</head>
<body>
    <div class="userpage-container">
        <div class="userpage">
            <div class="userpage-ico">
                <img src="assets/usercirc.svg" alt="">
            </div>
            <div class="userpage-name"><?php echo htmlspecialchars($name) . " BRAWO jesteś adminem"; ?></div>
            <a href="logout.php"><input type="button" value="logout"></a>
            <div class="addproduct-container">
                <div class="addproduct-name">add product</div>
                <div class="addproduct-button-container"><a href="addproduct.php"><input type="button" class="addproduct-button" value="Click here"></input></a></div>
            </div>
            <div class="deleteuser-container">
                <div class="deleteuser-name">delete user</div>
                <form method="post">
                    <input type="text" name="delete_user_id" placeholder="Enter user ID to delete" required>
                    <input type="submit" value="Delete User">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
