<?php 
require("dbh.php");
$id = 1;
$name;
$conn = dbconnect();
$stmt  = $conn -> prepare("SELECT name, image FROM products Where id = ?");
$stmt -> bind_param('s', $id);
$stmt-> execute();
$res = $stmt->get_result();
if($res-> num_rows > 0){
    while($row = $res-> fetch_assoc()){
        $name =  $row['name'];
        $photo = base64_encode($row['image']);
    }
}
?>
