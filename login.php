<?php   
require(__DIR__."/loginhandler.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style><?=file_get_contents("style2.css")?></style>
</head>
<body>
 <div class="logincontainer">   
<form method="post">
 Name:
<input  calss="" type="text" name="name" placeholder="Name" required><br>
Password:
<input type="password" name="password" placeholder="Password" required><br>
<input type="submit" value="login"><br>
<input type="button" name="logout" value="index" onclick="<?php header("Location: logout.php")?>">

</from>
</div>    

</body>
</html>