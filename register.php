<?php 
ob_start();
// require(__DIR__."/registerhandler.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style><?=file_get_contents("./css/style.css")?></style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>">
        Name: <input type="text" name="name" placeholder="Username" required><br>
        Email: <input type="email" name="email" placeholder="Email" required><br>
        Password: <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>