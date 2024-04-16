<!DOCTYPE html>
<html lang="en">
<head>
    <style><?=file_get_contents("./css/style.css")?></style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <nav id='menu'>
  <ul>
    <li><a href='phpwebfiles/watches.php'>Watches</a></li>
    <li><a href='phpwebfiles/shop.php'>Shop</a></li>
    <li><a href='phpwebfiles/home.php'>Home</a></li>
    <li><a href='http://'>Belts</a></li>
    <li><a href='http://'>Necklaces</a></li>
    <li><a href='http://'>About</a></li>
    <li><a href='phpwebfiles/login.php'>Login</a></li>
  </ul>
  <div id="logi"></div>
</nav> -->
<div class="login-form-d">
  <div class="hej">
  <h1>Zaloguj</h1>
  <form class="form-l" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="text" name="password" placeholder="password">
    <input type="submit" value="login">
  </form>
  <div>
</div>
</body>
</html>
<?php 
// include('/home/bob/Projects/BazaProjekt/dbh.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $username = $_POST["username"];
  $password = $_POST["password"];
  try{
    require_once();

  }catch(PDOException $e){
    die("Cos ne ta". $e->getMessage());
  }
}
else{
  header("Location: ../home.php");
  die();
}
?>