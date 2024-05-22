<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php file_get_contents("style2.css")?></style>
</head>
<body>
    <div class="addform-container">
        <div class="addform">
            <form method="Post">
            <div class="title"><h1>Upload Product <?php echo $name;?></h1></div>
            <div class="id ad"><label>Product ID</label><input type="number" name="id" placeholder="id"></div>
            <div class="name ad"><label>Product Name</label><input type="text" name="name" required placeholder="id"></div>
            <div class="file ad"><label>Product Photo</label><input type="file" class="file-input" name="image" placeholder="id"></div>
            <div class="mark ad"><label>Product Mark</label><input type="number" name="mark" placeholder="id"></div>
            <div class="subcategory ad"><label>Product Subcategory</label><input type="number"name="subcategory" placeholder="id"></div>
            <div class="price ad"><label>Product Price</label><input type="float" name="price" placeholder="id"></div>
            <div class="submit ad"><input type="submit" placeholder="id"></div>
            </form>
        </div>
    </div>
</body>
</html>