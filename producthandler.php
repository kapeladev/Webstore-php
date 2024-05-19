<?php 
require("dbh.php");
$id = 1;
$name;
$conn = dbconnect();
$stmt  = $conn -> prepare("SELECT name, subcategory_id,markid,image, price FROM products Where id = ?");
$stmt -> bind_param('s', $id);
$stmt-> execute();
$res = $stmt->get_result();
if($res-> num_rows > 0){
    while($row = $res-> fetch_assoc()){
        $name =  $row['name'];
        $price = $row['price'];
        $category = $row['subcategory_id'];
        $mark = $row['markid'];
        $photo = base64_encode($row['image']);
    }
    if(strpos($price, '.') == null){
        $price = $price.".00";
    }
    if(strpos($mark, '1') == '0'){
        $mark = "/rolex";
    }
    
}
?>
