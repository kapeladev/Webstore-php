<?php 
require("dbh.php");
$conn = dbconnect();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = file_get_contents($_POST['image']);
    $mark = $_POST['mark'];
    $subcategory = $_POST['subcategory'];
    $price = $_POST['price'];
    try{
    $stmt = $conn -> prepare("INSERT INTO products (id, name, image, markid, subcategory_id,price) VALUES (?, ?, ?, ?, ?,?)");
            $stmt -> bind_param("ssssss",$id,$name, $image ,$mark, $subcategory,$price);
            $stmt ->execute();
            ob_end_flush();
        }
        catch(Exception $e){
            echo $e;
        }
}
?>