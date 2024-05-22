<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php file_get_contents('style2.css') ?></style>
    <title>Document</title>
</head>
<body>
    <div class="userpage-container">
        <div class="userpage">
            <div class="userage-ico">
            <img src="assets/usercirc.svg" alt="">
            </div>
            <div class="userpage-name"><?php echo $name?></div>
            <a href="logout.php"><input type="button" value="logout"></a>
            <div class="addproduct-container">
                <div class="addproduct-name">add product</div>
                <div class="addproduct-button-container"><a href="addproduct.php"><input type="button" class="addproduct-button" value="Click here"></input></a></div>
            </div>
        </div>
    </div>
</body>
</html>